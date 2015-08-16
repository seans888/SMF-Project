<?php

namespace backend\controllers;

use Yii;
use common\models\Upload;
use common\models\UploadSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

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
        $searchModel = new UploadSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Upload model.
     * @param integer $upload_id
     * @param integer $scholar_scholar_id
     * @param integer $scholar_school_school_id
     * @return mixed
     */
    public function actionView($upload_id, $scholar_scholar_id, $scholar_school_school_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($upload_id, $scholar_scholar_id, $scholar_school_school_id),
        ]);
    }

    /**
     * Creates a new Upload model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Upload();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'upload_id' => $model->upload_id, 'scholar_scholar_id' => $model->scholar_scholar_id, 'scholar_school_school_id' => $model->scholar_school_school_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Upload model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $upload_id
     * @param integer $scholar_scholar_id
     * @param integer $scholar_school_school_id
     * @return mixed
     */
    public function actionUpdate($upload_id, $scholar_scholar_id, $scholar_school_school_id)
    {
        $model = $this->findModel($upload_id, $scholar_scholar_id, $scholar_school_school_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'upload_id' => $model->upload_id, 'scholar_scholar_id' => $model->scholar_scholar_id, 'scholar_school_school_id' => $model->scholar_school_school_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Upload model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $upload_id
     * @param integer $scholar_scholar_id
     * @param integer $scholar_school_school_id
     * @return mixed
     */
    public function actionDelete($upload_id, $scholar_scholar_id, $scholar_school_school_id)
    {
        $this->findModel($upload_id, $scholar_scholar_id, $scholar_school_school_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Upload model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $upload_id
     * @param integer $scholar_scholar_id
     * @param integer $scholar_school_school_id
     * @return Upload the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($upload_id, $scholar_scholar_id, $scholar_school_school_id)
    {
        if (($model = Upload::findOne(['upload_id' => $upload_id, 'scholar_scholar_id' => $scholar_scholar_id, 'scholar_school_school_id' => $scholar_school_school_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
