<?php

namespace backend\controllers;

use Yii;
use common\models\ScholarsSearch;
use common\models\Refunds;
use common\models\RefundsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\db\IntegrityException;

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

        if ($model->load(Yii::$app->request->post())) 
		{
			$model->uploaded_by = Yii::$app->user->identity->username;
			$model->save();
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

        if ($model->load(Yii::$app->request->post())) 
		{
			$model->updated_by = Yii::$app->user->identity->username;
			$model->save();
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
            return $this->redirect(['view', 'id' => $model->refund_id]);
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
			$sql = "INSERT INTO approved_refunds (refund_id, refund_scholar_id,
			refund_amount,refund_smShare,refund_scholarShare,
			refund_tuitionfee_id,refund_description,refund_date) VALUES(".$model->refund_id.",".$model->refund_scholar_id.",".$model->refund_amount.",".
			$model->refund_smShare.",".$model->refund_scholarShare.",".$model->refund_tuitionfee_id.",'".
			$model->refund_description."','".$model->refund_date."')";
			
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
