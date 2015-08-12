<?php

namespace backend\controllers;

use Yii;
use common\models\ScholarsSearch;
use common\models\Deductions;
use common\models\DeductionsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DeductionsController implements the CRUD actions for Deductions model.
 */
class DeductionsController extends Controller
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
     * Lists all Deductions models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ScholarsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Deductions model.
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
     * Creates a new Deductions model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Deductions();

        if ($model->load(Yii::$app->request->post())) {
			$model->uploaded_by = Yii::$app->user->identity->username;
			$model->save();
            return $this->redirect(['view', 'id' => $model->deduction_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Deductions model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
			$model->updated_by = Yii::$app->user->identity->username;
			$model->save();
            return $this->redirect(['view', 'id' => $model->deduction_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Deductions model.
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
            return $this->redirect(['view', 'id' => $model->deduction_id]);
        } else {
            return $this->render('check', [
                'model' => $model,
            ]);
        }	
    }
	
	public function actionSend($id)
	{
		$model = $this->findModel($id);
		if($model->checked_by!=null)
		{
			try{
			$sql = "INSERT INTO approved_deductions (deduction_id, deduction_scholar_id,
			deduction_date,deduction_amount,deduction_remark) VALUES(".$model->deduction_id.",".$model->deduction_scholar_id.",'".$model->deduction_date."',".
			$model->deduction_amount.",'".$model->deduction_remark."')";
			
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
	
    /**
     * Finds the Deductions model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Deductions the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Deductions::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
