<?php

namespace backend\controllers;

use Yii;
use common\models\Incentive;
use common\models\IncentiveSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use common\models\ScholarSearch;

/**
 * IncentiveController implements the CRUD actions for Incentive model.
 */
class IncentiveController extends Controller
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
     * Lists all Incentive models.
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
     * Displays a single Incentive model.
     * @param integer $incentive_id
     * @param integer $scholar_scholar_id
     * @param integer $scholar_school_school_id
     * @param string $scholar_allowance_allowance_area
     * @return mixed
     */
    public function actionView($incentive_id, $scholar_scholar_id, $scholar_school_school_id, $scholar_allowance_allowance_area)
    {
        return $this->render('view', [
            'model' => $this->findModel($incentive_id, $scholar_scholar_id, $scholar_school_school_id, $scholar_allowance_allowance_area),
        ]);
    }

    /**
     * Creates a new Incentive model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Incentive();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'incentive_id' => $model->incentive_id, 'scholar_scholar_id' => $model->scholar_scholar_id, 'scholar_school_school_id' => $model->scholar_school_school_id, 'scholar_allowance_allowance_area' => $model->scholar_allowance_allowance_area]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Incentive model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $incentive_id
     * @param integer $scholar_scholar_id
     * @param integer $scholar_school_school_id
     * @param string $scholar_allowance_allowance_area
     * @return mixed
     */
    public function actionUpdate($incentive_id, $scholar_scholar_id, $scholar_school_school_id, $scholar_allowance_allowance_area)
    {
        $model = $this->findModel($incentive_id, $scholar_scholar_id, $scholar_school_school_id, $scholar_allowance_allowance_area);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'incentive_id' => $model->incentive_id, 'scholar_scholar_id' => $model->scholar_scholar_id, 'scholar_school_school_id' => $model->scholar_school_school_id, 'scholar_allowance_allowance_area' => $model->scholar_allowance_allowance_area]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Incentive model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $incentive_id
     * @param integer $scholar_scholar_id
     * @param integer $scholar_school_school_id
     * @param string $scholar_allowance_allowance_area
     * @return mixed
     */
    public function actionDelete($incentive_id, $scholar_scholar_id, $scholar_school_school_id, $scholar_allowance_allowance_area)
    {
        $this->findModel($incentive_id, $scholar_scholar_id, $scholar_school_school_id, $scholar_allowance_allowance_area)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Incentive model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $incentive_id
     * @param integer $scholar_scholar_id
     * @param integer $scholar_school_school_id
     * @param string $scholar_allowance_allowance_area
     * @return Incentive the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($incentive_id, $scholar_scholar_id, $scholar_school_school_id, $scholar_allowance_allowance_area)
    {
        if (($model = Incentive::findOne(['incentive_id' => $incentive_id, 'scholar_scholar_id' => $scholar_scholar_id, 'scholar_school_school_id' => $scholar_school_school_id, 'scholar_allowance_allowance_area' => $scholar_allowance_allowance_area])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
