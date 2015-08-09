<?php

namespace frontend\controllers;

use Yii;
use common\models\Grades;
use frontend\models\GradeSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use common\models\User;
use common\models\Scholars;
use common\models\Schools;

/**
 * GradeController implements the CRUD actions for Grades model.
 */
class GradeController extends Controller
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
	 public function actionGradestab(){
		$grades = Grades::find()->all();
		$users = User::find()->all();
		$scholars = Scholars::find()->all();
		
		return $this->render('gradestab',['users'=>$users,'scholars'=>$scholars,'grades'=>$grades]);
	 }
    public function actionIndex()
    {
		$grades = Grades::find()->all();
		$users = User::find()->all();
		$scholars = Scholars::find()->all();
	
	
		return $this->render('index',array('users'=>$users,'scholars'=>$scholars,'grades'=>$grades));
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
		$this->layout = 'records';
        $model = new Grades();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->grade_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
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
       $username=Yii::$app->user->identity->username;
		$users= User::find()->all();
		$grades = Grades::find()->all();
		$model = new Grades();
		foreach($users as $user){
			foreach($grades as $grade){
				if($user->username==$username&&$user->id==$grade->grade_scholar_id){
					$id=$grade->grade_id;
					$model = $this->findModel($id);
					if ($model->load(Yii::$app->request->post()) && $model->save()) {
						$fileName = $model->grade_id."gradeform";
						$model->file = UploadedFile::getInstance($model,'file');
						if($model->file != null)
						{
						$model->file->saveAs('GradeForm/'.$fileName.'.'.$model->file->extension);
						$model->grade_grade_form = 'GradeForm/'.$fileName.'.'.$model->file->extension;
						}
						$model->save();
						return $this->redirect(['view', 'id' => $model->grade_id]);
					return $this->redirect(['view', 'id' => $model->grade_id]);
					} else {
					return $this->render('update', [
					'model' => $model,
					]);
					}
				}
			}
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
