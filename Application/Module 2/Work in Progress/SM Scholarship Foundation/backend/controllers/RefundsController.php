<?php

namespace backend\controllers;

use Yii;
use common\models\ScholarsSearch;
use common\models\Refunds;
use common\models\RefundsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

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
        $searchModel = new ScholarsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
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
	
    public function actionCheck($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
			if($model->checked_by=='1')
			{
				$model->checked_by = Yii::$app->user->identity->username;		
			}
			else
			{
				$model->checked_by = null;
			}
			$model->save();
            return $this->redirect(['view', 'id' => $model->tuitionfee_id]);
        } else {
            return $this->render('check', [
                'model' => $model,
            ]);
        }	
    }
	
	public function actionSend($id)
	{
		$model = $this->findModel($id);
		if($model->checked_by!=null)
		{
			try{
			$sql = "INSERT INTO approved_tuitionfees (tuitionfee_id, tuitionfee_scholar_id,
			tuitionfee_term,tuitionfee_amount,tuitionfee_dateOfEnrollment,
			tuitionfee_dateOfPayment,tuitionfee_paidStatus) VALUES(".$model->tuitionfee_id.",".$model->tuitionfee_scholar_id.",'".$model->tuitionfees_term."',".
			$model->tuitionfee_amount.",".$model->tuitionfee_dateOfEnrollment.",'2015-03-03','".
			$model->tuitionfee_paidStatus."')";
			
			Yii::$app->db->createCommand($sql)->execute();
			
			return $this->redirect(['index']);
			
			}catch(IntegrityException $e)
			{
				return $this->redirect('index.php?r=error/error');
			}
		}
		else
		{
			return $this->redirect('index.php?r=error/error2');
		}
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
