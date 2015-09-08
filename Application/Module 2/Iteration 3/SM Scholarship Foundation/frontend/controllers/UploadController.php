<?php

namespace frontend\controllers;

use Yii;
use common\models\Upload;
use common\models\UploadSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use common\models\User;
use common\models\Scholar;
use yii\web\UploadedFile;

/**
 * UploadController implements the CRUD actions for Upload model.
 */
class UploadController extends Controller
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
     * Lists all Upload models.
     * @return mixed
     */
    public function actionIndex()
    {
       	$username=Yii::$app->user->identity->username;
		$users = User::find()->all();
		$scholars = Scholar::find()->all();
		$model = new Upload();
		
		foreach($users as $user){
			foreach($scholars as $scholar){
				if($user->username==$username&&$user->id==$scholar->scholar_user_id){
					$model->scholar_scholar_id=$scholar->scholar_id;
					$model->scholar_school_school_id=$scholar->school_school_id;
					$searchModel = new UploadSearch($model);
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
     * Displays a single Upload model.
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
     * Creates a new Upload model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
		$username=Yii::$app->user->identity->username;
		$users = User::find()->all();
		$scholars = Scholar::find()->all();
		$model = new Upload();
		foreach($users as $user){
		foreach($scholars as $scholar){
			if($user->username==$username&&$user->id==$scholar->scholar_user_id){
			$model->scholar_scholar_id=$scholar->scholar_id;
			$model->scholar_school_school_id=$scholar->school_school_id;
			if ($model->load(Yii::$app->request->post())) {
			$model->file = UploadedFile::getInstance($model,'file');
			if($model->file != null)
			{
				$fileName = md5(time()).$model->upload_file_name."".$model->scholar_scholar_id."".$model->file->name;
				$model->file->saveAs('Forms/'.$fileName);	
				$model->upload_form = 'Forms/'.$fileName;	
			}			
			$model->save();
			
            return $this->redirect(['index', 'id' => $model->upload_id]);
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
     * Updates an existing Upload model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index', 'id' => $model->upload_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Upload model.
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
     * Finds the Upload model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Upload the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Upload::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
