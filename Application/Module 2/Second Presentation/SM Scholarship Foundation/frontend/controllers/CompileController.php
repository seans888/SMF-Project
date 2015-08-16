<?php

namespace frontend\controllers;

use Yii;
use common\models\Compile;
use common\models\CompileSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use common\models\Grades;
use common\models\User;
use common\models\Scholars;
use common\models\Schools;
use frontend\models\Tuition;
use common\models\Allowance;
use common\models\Benefit;

/**
 * CompileController implements the CRUD actions for Compile model.
 */
class CompileController extends Controller
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
     * Lists all Compile models.
     * @return mixed
     */
    public function actionIndex()
    {
		
		$schools = Schools::find()->all();
		$users = User::find()->all();
		$scholars = Scholars::find()->all();
		$allowances = Allowance::find()->all();
		
		$grades = Grades::find()->all();
		return $this->render('index',array('users'=>$users,'scholars'=>$scholars,'schools'=>$schools,'allowances'=>$allowances,'grades'=>$grades));
		
    }

    /**
     * Displays a single Compile model.
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
     * Creates a new Compile model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
		$this->layout = 'records';
        $model = new Compile();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['grades', 'id' => $model->compile_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Compile model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->compile_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Compile model.
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
     * Finds the Compile model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Compile the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Compile::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
