<?php

namespace frontend\controllers;

use Yii;
use common\models\Refunds;
use common\models\RefundsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use common\models\User;
use common\models\Scholars;
use common\models\Schools;

/**
 * RefundsController implements the CRUD actions for Refunds model.
 */
class RefundsController extends Controller
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
     * Lists all Refunds models.
     * @return mixed
     */
    public function actionIndex()
    {
       $username=Yii::$app->user->identity->username;
		$users = User::find()->all();
		$scholars = Scholars::find()->all();
		$model = new Refunds();
		
		foreach($users as $user){
			foreach($scholars as $scholar){
				if($user->username==$username&&$user->id==$scholar->scholar_id){
					$model->refund_scholar_id=$scholar->scholar_id;
					
					$searchModel = new RefundsSearch($model);
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
     * Displays a single Refunds model.
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
     * Creates a new Refunds model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Refunds();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->refund_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Refunds model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->refund_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Refunds model.
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
     * Finds the Refunds model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Refunds the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Refunds::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
