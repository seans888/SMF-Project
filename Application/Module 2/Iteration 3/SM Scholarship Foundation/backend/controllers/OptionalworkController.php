<?php

namespace backend\controllers;

use Yii;
use common\models\Optionalwork;
use common\models\ScholarSearch;
use common\models\OptionalworkSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\Json;
use yii\helpers\ArrayHelper;
use common\models\Scholar;
/**
 * OptionalworkController implements the CRUD actions for Optionalwork model.
 */
class OptionalworkController extends Controller
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
     * Lists all Optionalwork models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ScholarSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
		
		if(Yii::$app->request->post('hasEditable'))
		{
			$optionalWorkId = Yii::$app->request->post('editableKey');
			$optionalWork = Optionalwork::findOne($optionalWorkId);

			$out = Json::encode(['output'=>'','message'=>'']);
			$post = [];
			$posted = current($_POST['Optionalwork']);
			$post['Optionalwork'] = $posted;
			
			if($optionalWork->load($post))
			{
				$optionalWork->save();
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
        $searchModel = new OptionalworkSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
		
		if(Yii::$app->request->post('hasEditable'))
		{
			$optionalWorkId = Yii::$app->request->post('editableKey');
			$optionalWork = Optionalwork::findOne($optionalWorkId);

			$out = Json::encode(['output'=>'','message'=>'']);
			$post = [];
			$posted = current($_POST['Optionalwork']);
			$post['Optionalwork'] = $posted;
			
			if($optionalWork->load($post))
			{
				$optionalWork->save();
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
     * Displays a single Optionalwork model.
     * @param integer $optionalwork_id
     * @param integer $scholar_scholar_id
     * @param integer $scholar_school_school_id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Optionalwork model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Optionalwork();

        if ($model->load(Yii::$app->request->post())) {
			$selectSchool = ArrayHelper::map(Scholar::find()
			->where(['scholar_id'=>$model->scholar_scholar_id])
			->all(),'school_school_id','school_school_id');
			$schoolID = array_values($selectSchool)[0];
			$model->scholar_school_school_id = $schoolID;
			
			$model->save();
            return $this->redirect(['view', 'id' => $model->optionalwork_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Optionalwork model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $optionalwork_id
     * @param integer $scholar_scholar_id
     * @param integer $scholar_school_school_id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
			$selectSchool = ArrayHelper::map(Scholar::find()
			->where(['scholar_id'=>$model->scholar_scholar_id])
			->all(),'school_school_id','school_school_id');
			$schoolID = array_values($selectSchool)[0];
			$model->scholar_school_school_id = $schoolID;
			
			$model->save();
            return $this->redirect(['view', 'id' => $model->optionalwork_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Optionalwork model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $optionalwork_id
     * @param integer $scholar_scholar_id
     * @param integer $scholar_school_school_id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Optionalwork model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $optionalwork_id
     * @param integer $scholar_scholar_id
     * @param integer $scholar_school_school_id
     * @return Optionalwork the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Optionalwork::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
