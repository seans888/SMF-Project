<?php

namespace frontend\controllers;

use Yii;
use common\models\Tuition;
use common\models\TuitionSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use common\models\User;
use common\models\Scholar;
use common\models\School;
use common\models\Grade;

/**
 * GradeController implements the CRUD actions for Grades model.
 */
class TuitionController extends Controller
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
		$username=Yii::$app->user->identity->username;
		$users = User::find()->all();
		$scholars = Scholar::find()->all();
		$model = new Tuition();
		
		foreach($users as $user){
			foreach($scholars as $scholar){
				if($user->username==$username&&$user->id==$scholar->scholar_id){
					$model->scholar_scholar_id=$scholar->scholar_id;
					
					$searchModel = new TuitionSearch($model);
					$dataProvider = $searchModel->search(Yii::$app->request->queryParams);
					return $this->render('index', [
					'searchModel' => $searchModel,
					'dataProvider' => $dataProvider,
					]);
				}

			}
		}
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
       
        if ($model->load(Yii::$app->request->post())) {
            return $this->redirect(['view', 'id' => $model->tuitionfee_id]);
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
    public function actionUpdate()
    {
		$username=Yii::$app->user->identity->username;
		$users= User::find()->all();
		$grades = Grades::find()->all();
		$model = new Grades();
		$tuitions = Tuitionfees::find()->all();
		foreach($users as $user){
			foreach($tuitions as $tuition){
				if($user->username==$username&&$user->id==$tuition->tuitionfee_id){
					$id=$tuition->tuitionfee_id;
					$model = $this->findModel($id);
					if ($model->load(Yii::$app->request->post()) && $model->save()) {
						$fileName = $model->tuitionfee_id."regform";
						$model->file = UploadedFile::getInstance($model,'file');
						if($model->file != null)
						{
						$model->file->saveAs('uploads/'.$fileName.'.'.$model->file->extension);
						$model->tuitionfee_registrationForm = 'uploads/'.$fileName.'.'.$model->file->extension;
						}
						$model->save();
						return $this->redirect(['view', 'id' => $model->tuitionfee_id]);
					return $this->redirect(['view', 'id' => $model->tuitionfee_id]);
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
        if (($model = Tuitionfees::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
