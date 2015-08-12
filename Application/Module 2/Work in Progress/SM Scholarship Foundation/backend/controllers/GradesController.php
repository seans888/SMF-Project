<?php

namespace backend\controllers;

use Yii;
use common\models\ScholarsSearch;
use common\models\Grades;
use common\models\GradesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\ForbiddenHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use common\models\Scholars;
use common\models\Schools;
use yii\helpers\Json;
use yii\helpers\ArrayHelper;

/**
 * GradesController implements the CRUD actions for Grades model.
 */
class GradesController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Grades models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ScholarsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
		
				if(Yii::$app->request->post('hasEditable'))
		{
			$gradeId = Yii::$app->request->post('editableKey');
			$grade = Grades::findOne($gradeId);
			if(Yii::$app->user->can('update-grades'))
			{
			$out = Json::encode(['output'=>'','message'=>'']);
			$post = [];
			$posted = current($_POST['Grades']);
			$post['Grades'] = $posted;
			
			if($grade->load($post))
			{
				$grade->save();
			}
			echo $out;
			return;
			}
			else
			{
				throw new ForbiddenHttpException;
			}
			
		}
		
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Grades model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Grades model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
		if(Yii::$app->user->can('create-grades'))
		{
			$model = new Grades();

			if ($model->load(Yii::$app->request->post())) {
				$model->uploaded_by = Yii::$app->user->identity->username;
				$model->save();
				return $this->redirect(['view', 'id' => $model->grade_id]);
			} else {
				return $this->render('create', [
					'model' => $model,
				]);
			}
		}
		else
		{
			throw new ForbiddenHttpException;
		}
    }

    /**
     * Updates an existing Grades model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
		if(Yii::$app->user->can('update-grades'))
		{
			$model = $this->findModel($id);

			if ($model->load(Yii::$app->request->post())) {
				$model->updated_by = Yii::$app->user->identity->username;
				$model->save();
				return $this->redirect(['view', 'id' => $model->grade_id]);
			} else {
				return $this->render('update', [
					'model' => $model,
				]);
			}
		}
		else
		{
			throw new ForbiddenHttpException;
		}
    }

    /**
     * Deletes an existing Grades model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }
	
	public function actionCheck($id)
    {
		if(Yii::$app->user->can('create-grades'))
		{
			$model = $this->findModel($id);

			if ($model->load(Yii::$app->request->post())) {
				if($model->checked_by=='1')
				{
					$model->checked_by = Yii::$app->user->identity->username;		
				}
				else
				{
					$model->checked_by = null;
				}
				$model->save();
				return $this->redirect(['view', 'id' => $model->grade_id]);
			} else {
				return $this->render('check', [
					'model' => $model,
				]);
			}
		}
		else
		{
			throw new ForbiddenHttpException;
		}
    }
	
	public function actionSend($id)
	{
		if(Yii::$app->user->can('check-grades'))
		{
			$model = $this->findModel($id);
			if($model->checked_by!=null)
			{
				try{
				$sql = "INSERT INTO approved_grades (grade_id, grade_scholar_id,
				grade_schoolYear,grade_Term,grade_subject,
				grade_units,grade_value,equivalence_grade_rule,School_id) VALUES(".$model->grade_id.",".$model->grade_scholar_id.",".$model->grade_schoolYear.",".
				$model->grade_Term.",'".$model->grade_subject."',".$model->grade_units.",'".
				$model->grade_value."',".$model->equivalence_grade_rule.",".$model->School_id.")";
				
				Yii::$app->db->createCommand($sql)->execute();
				
				return $this->redirect(['index']);
				
				}catch(IntegrityException $e)
				{
					return $this->redirect('index.php?r=error/error');
				}
			}
			else
			{
				return $this->redirect('index.php?r=error/error2');
			}
		}
		else
		{
			throw new ForbiddenHttpException;
		}
	}

    /**
     * Finds the Grades model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Grades the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Grades::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
