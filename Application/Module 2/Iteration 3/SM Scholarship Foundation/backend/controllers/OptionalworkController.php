<?php

namespace backend\controllers;

use Yii;
use common\models\Optionalwork;
use common\models\ScholarSearch;
use common\models\OptionalworkSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * OptionalworkController implements the CRUD actions for Optionalwork model.
 */
class OptionalworkController extends Controller
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
     * Lists all Optionalwork models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ScholarSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Optionalwork model.
     * @param integer $optionalwork_id
     * @param integer $scholar_scholar_id
     * @param integer $scholar_school_school_id
     * @return mixed
     */
    public function actionView($optionalwork_id, $scholar_scholar_id, $scholar_school_school_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($optionalwork_id, $scholar_scholar_id, $scholar_school_school_id),
        ]);
    }

    /**
     * Creates a new Optionalwork model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Optionalwork();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'optionalwork_id' => $model->optionalwork_id, 'scholar_scholar_id' => $model->scholar_scholar_id, 'scholar_school_school_id' => $model->scholar_school_school_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Optionalwork model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $optionalwork_id
     * @param integer $scholar_scholar_id
     * @param integer $scholar_school_school_id
     * @return mixed
     */
    public function actionUpdate($optionalwork_id, $scholar_scholar_id, $scholar_school_school_id)
    {
        $model = $this->findModel($optionalwork_id, $scholar_scholar_id, $scholar_school_school_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'optionalwork_id' => $model->optionalwork_id, 'scholar_scholar_id' => $model->scholar_scholar_id, 'scholar_school_school_id' => $model->scholar_school_school_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Optionalwork model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $optionalwork_id
     * @param integer $scholar_scholar_id
     * @param integer $scholar_school_school_id
     * @return mixed
     */
    public function actionDelete($optionalwork_id, $scholar_scholar_id, $scholar_school_school_id)
    {
        $this->findModel($optionalwork_id, $scholar_scholar_id, $scholar_school_school_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Optionalwork model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $optionalwork_id
     * @param integer $scholar_scholar_id
     * @param integer $scholar_school_school_id
     * @return Optionalwork the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($optionalwork_id, $scholar_scholar_id, $scholar_school_school_id)
    {
        if (($model = Optionalwork::findOne(['optionalwork_id' => $optionalwork_id, 'scholar_scholar_id' => $scholar_scholar_id, 'scholar_school_school_id' => $scholar_school_school_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
