<?php

namespace backend\controllers;

use Yii;
use common\models\ScholarsSearch;
use common\models\Allowance;
use common\models\AllowanceSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AllowanceController implements the CRUD actions for Allowance model.
 */
class AllowanceController extends Controller
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
     * Lists all Allowance models.
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
     * Displays a single Allowance model.
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
     * Creates a new Allowance model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Allowance();

        if ($model->load(Yii::$app->request->post())) {
			$model->uploaded_by = Yii::$app->user->identity->username;
			$model->save();
            return $this->redirect(['view', 'id' => $model->allowance_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Allowance model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
			$model->updated_by = Yii::$app->user->identity->username;
			$model->save();
            return $this->redirect(['view', 'id' => $model->allowance_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Allowance model.
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
            return $this->redirect(['view', 'id' => $model->allowance_id]);
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
			$sql = "INSERT INTO approved_allowance (allowance_id, allowance_scholar_id,
			allowance_amount,allowance_remark,allowance_school_id,
			allowance_payStatus,allowance_paidDate,allowance_status) VALUES(".$model->allowance_id.",".$model->allowance_scholar_id.",".$model->allowance_amount.",'".
			$model->allowance_remark."',".$model->allowance_school_id.",'".$model->allowance_payStatus."','".
			$model->allowance_paidDate."','".$model->allowance_status."')";
			
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
     * Finds the Allowance model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Allowance the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Allowance::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
