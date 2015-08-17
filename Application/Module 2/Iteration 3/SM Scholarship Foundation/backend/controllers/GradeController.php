<?php

namespace backend\controllers;

use Yii;
use common\models\SchoolSearch;
use common\models\Grade;
use common\models\GradeSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * GradeController implements the CRUD actions for Grade model.
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
     * Lists all Grade models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SchoolSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
	
    public function actionIndex2()
    {
        $searchModel = new GradeSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index2', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Grade model.
     * @param integer $grade_id
     * @param integer $subject_subject_id
     * @param integer $subject_scholar_scholar_id
     * @param integer $subject_scholar_school_school_id
     * @return mixed
     */
    public function actionView($grade_id, $subject_subject_id, $subject_scholar_scholar_id, $subject_scholar_school_school_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($grade_id, $subject_subject_id, $subject_scholar_scholar_id, $subject_scholar_school_school_id),
        ]);
    }

    /**
     * Creates a new Grade model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Grade();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'grade_id' => $model->grade_id, 'subject_subject_id' => $model->subject_subject_id, 'subject_scholar_scholar_id' => $model->subject_scholar_scholar_id, 'subject_scholar_school_school_id' => $model->subject_scholar_school_school_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Grade model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $grade_id
     * @param integer $subject_subject_id
     * @param integer $subject_scholar_scholar_id
     * @param integer $subject_scholar_school_school_id
     * @return mixed
     */
    public function actionUpdate($grade_id, $subject_subject_id, $subject_scholar_scholar_id, $subject_scholar_school_school_id)
    {
        $model = $this->findModel($grade_id, $subject_subject_id, $subject_scholar_scholar_id, $subject_scholar_school_school_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'grade_id' => $model->grade_id, 'subject_subject_id' => $model->subject_subject_id, 'subject_scholar_scholar_id' => $model->subject_scholar_scholar_id, 'subject_scholar_school_school_id' => $model->subject_scholar_school_school_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Grade model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $grade_id
     * @param integer $subject_subject_id
     * @param integer $subject_scholar_scholar_id
     * @param integer $subject_scholar_school_school_id
     * @return mixed
     */
    public function actionDelete($grade_id, $subject_subject_id, $subject_scholar_scholar_id, $subject_scholar_school_school_id)
    {
        $this->findModel($grade_id, $subject_subject_id, $subject_scholar_scholar_id, $subject_scholar_school_school_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Grade model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $grade_id
     * @param integer $subject_subject_id
     * @param integer $subject_scholar_scholar_id
     * @param integer $subject_scholar_school_school_id
     * @return Grade the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($grade_id, $subject_subject_id, $subject_scholar_scholar_id, $subject_scholar_school_school_id)
    {
        if (($model = Grade::findOne(['grade_id' => $grade_id, 'subject_subject_id' => $subject_subject_id, 'subject_scholar_scholar_id' => $subject_scholar_scholar_id, 'subject_scholar_school_school_id' => $subject_scholar_school_school_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}