<?php

namespace backend\controllers;

use Yii;
use common\models\Incentive;
use common\models\IncentiveSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use common\models\ScholarSearch;
use yii\helpers\Json;
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
		
		if(Yii::$app->request->post('hasEditable'))
		{
			$incentiveId = Yii::$app->request->post('editableKey');
			$incentive = Incentive::findOne($incentiveId);

			$out = Json::encode(['output'=>'','message'=>'']);
			$post = [];
			$posted = current($_POST['Incentive']);
			$post['Incentive'] = $posted;
			
			if($incentive->load($post))
			{
				$incentive->save();
			}
			echo $out;
			return;
		}
		
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
	
	public function actionIndex2()
    {
        $searchModel = new IncentiveSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
		
		if(Yii::$app->request->post('hasEditable'))
		{
			$incentiveId = Yii::$app->request->post('editableKey');
			$incentive = Incentive::findOne($incentiveId);

			$out = Json::encode(['output'=>'','message'=>'']);
			$post = [];
			$posted = current($_POST['Incentive']);
			$post['Incentive'] = $posted;
			
			if($incentive->load($post))
			{
				$incentive->save();
			}
			echo $out;
			return;
		}
		
        return $this->render('index2', [
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
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
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
            return $this->redirect(['view', 'id' => $model->incentive_id]);
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
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->incentive_id]);
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
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

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
    protected function findModel($id)
    {
        if (($model = Incentive::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
