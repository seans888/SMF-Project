<?php

namespace backend\controllers;

use Yii;
use common\models\Withholding;
use common\models\WithholdingSearch;
use common\models\ScholarSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * WithholdingController implements the CRUD actions for Withholding model.
 */
class WithholdingController extends Controller
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
     * Lists all Withholding models.
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
	public function actionIndex2()
    {
        $searchModel = new ScholarSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index2', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Withholding model.
     * @param integer $withholding_id
     * @param integer $scholar_scholar_id
     * @param integer $scholar_school_school_id
     * @param string $scholar_allowance_allowance_area
     * @return mixed
     */
    public function actionView($withholding_id, $scholar_scholar_id, $scholar_school_school_id, $scholar_allowance_allowance_area)
    {
        return $this->render('view', [
            'model' => $this->findModel($withholding_id, $scholar_scholar_id, $scholar_school_school_id, $scholar_allowance_allowance_area),
        ]);
    }

    /**
     * Creates a new Withholding model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Withholding();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'withholding_id' => $model->withholding_id, 'scholar_scholar_id' => $model->scholar_scholar_id, 'scholar_school_school_id' => $model->scholar_school_school_id, 'scholar_allowance_allowance_area' => $model->scholar_allowance_allowance_area]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Withholding model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $withholding_id
     * @param integer $scholar_scholar_id
     * @param integer $scholar_school_school_id
     * @param string $scholar_allowance_allowance_area
     * @return mixed
     */
    public function actionUpdate($withholding_id, $scholar_scholar_id, $scholar_school_school_id, $scholar_allowance_allowance_area)
    {
        $model = $this->findModel($withholding_id, $scholar_scholar_id, $scholar_school_school_id, $scholar_allowance_allowance_area);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'withholding_id' => $model->withholding_id, 'scholar_scholar_id' => $model->scholar_scholar_id, 'scholar_school_school_id' => $model->scholar_school_school_id, 'scholar_allowance_allowance_area' => $model->scholar_allowance_allowance_area]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Withholding model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $withholding_id
     * @param integer $scholar_scholar_id
     * @param integer $scholar_school_school_id
     * @param string $scholar_allowance_allowance_area
     * @return mixed
     */
    public function actionDelete($withholding_id, $scholar_scholar_id, $scholar_school_school_id, $scholar_allowance_allowance_area)
    {
        $this->findModel($withholding_id, $scholar_scholar_id, $scholar_school_school_id, $scholar_allowance_allowance_area)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Withholding model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $withholding_id
     * @param integer $scholar_scholar_id
     * @param integer $scholar_school_school_id
     * @param string $scholar_allowance_allowance_area
     * @return Withholding the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($withholding_id, $scholar_scholar_id, $scholar_school_school_id, $scholar_allowance_allowance_area)
    {
        if (($model = Withholding::findOne(['withholding_id' => $withholding_id, 'scholar_scholar_id' => $scholar_scholar_id, 'scholar_school_school_id' => $scholar_school_school_id, 'scholar_allowance_allowance_area' => $scholar_allowance_allowance_area])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
