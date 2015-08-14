<?php

namespace frontend\controllers;

use Yii;
use common\models\Uploadedforms;
use common\models\UploadedformsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use common\models\User;
use common\models\Scholars;
use yii\web\UploadedFile;

/**
 * UploadedformsController implements the CRUD actions for Uploadedforms model.
 */
class UploadedformsController extends Controller
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
     * Lists all Uploadedforms models.
     * @return mixed
     */
    public function actionIndex()
    {
       	$username=Yii::$app->user->identity->username;
		$users = User::find()->all();
		$scholars = Scholars::find()->all();
		$model = new Uploadedforms();
		
		foreach($users as $user){
			foreach($scholars as $scholar){
				if($user->username==$username&&$user->id==$scholar->scholar_id){
					$model->uploaded_scholar_id=$scholar->scholar_id;
					$searchModel = new UploadedformsSearch($model);
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
     * Displays a single Uploadedforms model.
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
     * Creates a new Uploadedforms model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {	
		$username=Yii::$app->user->identity->username;
		$users = User::find()->all();
		$scholars = Scholars::find()->all();
		$model = new Uploadedforms();
		foreach($users as $user){
		foreach($scholars as $scholar){
			if($user->username==$username&&$user->id==$scholar->scholar_id){
			$model->uploaded_scholar_id=$scholar->scholar_id;
			if ($model->load(Yii::$app->request->post())) {
			$fileName = $model->fileName.$model->uploaded_scholar_id;
			$model->file = UploadedFile::getInstance($model,'file');
			if($model->file != null)
			{
				$model->file->saveAs('uploads/'.$fileName.'.'.$model->file->extension);	
				$model->uploadedForm = 'uploads/'.$fileName.'.'.$model->file->extension;	
			}			
			$model->save();
            return $this->redirect(['index', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
			}
			
			}
				
		}
			
		
    }

    /**
     * Updates an existing Uploadedforms model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {	 
		$model = $this->findModel($id);
	
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
			
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Uploadedforms model.
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
     * Finds the Uploadedforms model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Uploadedforms the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Uploadedforms::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
