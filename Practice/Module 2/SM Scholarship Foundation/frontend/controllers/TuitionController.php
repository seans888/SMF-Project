<?php

namespace frontend\controllers;

use Yii;
use common\models\Grades;

use frontend\models\GradeSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use common\models\User;
use common\models\Scholars;
use common\models\Schools;
use frontend\models\Tuition;

/**
 * TuitionController implements the CRUD actions for Tuition model.
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
     * Lists all Tuition models.
     * @return mixed
     */
    public function actionIndex()
    {
		$grades = Grades::find()->all();
		$schools = Schools::find()->all();
		$users = User::find()->all();
		$scholars = Scholars::find()->all();
		$tuitions = Tuition::find()->all();
		return $this->render('index',array('users'=>$users,'scholars'=>$scholars,'schools'=>$schools,'tuitions'=>$tuitions,'grades'=>$grades));
    }

    /**
     * Displays a single Tuition model.
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
     * Creates a new Tuition model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Tuition();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->tuitionfee_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Tuition model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate()
    {
		$username=Yii::$app->user->identity->username;
		$users= User::find()->all();
		$grades = Grades::find()->all();
		$tuitions = Tuition::find()->all();
		$model = new Grades();
		foreach($users as $user){
			foreach($tuitions as $tuition){
				if($user->username==$username&&$user->id==$tuition->tuitionfee_scholar_id){
					$id=$tuition->tuitionfee_scholar_id;
					$model = $this->findModel($id);
					if ($model->load(Yii::$app->request->post()) && $model->save()) {
					return $this->redirect(['view', 'id' => $model->grade_id]);
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
     * Deletes an existing Tuition model.
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
     * Finds the Tuition model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Tuition the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Tuition::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
