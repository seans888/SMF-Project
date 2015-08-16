<?php

namespace backend\controllers;

use Yii;
use common\models\Deduction;
use common\models\DeductionSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DeductionController implements the CRUD actions for Deduction model.
 */
class DeductionController extends Controller
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
     * Lists all Deduction models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new DeductionSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Deduction model.
     * @param integer $deduction_id
     * @param integer $scholar_scholar_id
     * @param integer $scholar_school_school_id
     * @return mixed
     */
    public function actionView($deduction_id, $scholar_scholar_id, $scholar_school_school_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($deduction_id, $scholar_scholar_id, $scholar_school_school_id),
        ]);
    }

    /**
     * Creates a new Deduction model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Deduction();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'deduction_id' => $model->deduction_id, 'scholar_scholar_id' => $model->scholar_scholar_id, 'scholar_school_school_id' => $model->scholar_school_school_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Deduction model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $deduction_id
     * @param integer $scholar_scholar_id
     * @param integer $scholar_school_school_id
     * @return mixed
     */
    public function actionUpdate($deduction_id, $scholar_scholar_id, $scholar_school_school_id)
    {
        $model = $this->findModel($deduction_id, $scholar_scholar_id, $scholar_school_school_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'deduction_id' => $model->deduction_id, 'scholar_scholar_id' => $model->scholar_scholar_id, 'scholar_school_school_id' => $model->scholar_school_school_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Deduction model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $deduction_id
     * @param integer $scholar_scholar_id
     * @param integer $scholar_school_school_id
     * @return mixed
     */
    public function actionDelete($deduction_id, $scholar_scholar_id, $scholar_school_school_id)
    {
        $this->findModel($deduction_id, $scholar_scholar_id, $scholar_school_school_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Deduction model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $deduction_id
     * @param integer $scholar_scholar_id
     * @param integer $scholar_school_school_id
     * @return Deduction the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($deduction_id, $scholar_scholar_id, $scholar_school_school_id)
    {
        if (($model = Deduction::findOne(['deduction_id' => $deduction_id, 'scholar_scholar_id' => $scholar_scholar_id, 'scholar_school_school_id' => $scholar_school_school_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
