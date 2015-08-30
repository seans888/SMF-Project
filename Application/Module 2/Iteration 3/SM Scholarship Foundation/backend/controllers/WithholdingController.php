<?php

namespace backend\controllers;

use Yii;
use common\models\Withholding;
use common\models\WithholdingSearch;
use common\models\ScholarSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;
use common\models\Scholar;
use yii\helpers\Json;
/**
 * WithholdingController implements the CRUD actions for Withholding model.
 */
class WithholdingController extends Controller
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
     * Lists all Withholding models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ScholarSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
		
		if(Yii::$app->request->post('hasEditable'))
		{
			$withholdingId = Yii::$app->request->post('editableKey');
			$withholding = Withholding::findOne($withholdingId);

			$out = Json::encode(['output'=>'','message'=>'']);
			$post = [];
			$posted = current($_POST['Withholding']);
			$post['Withholding'] = $posted;
			
			if($withholding->load($post))
			{
				$withholding->save();
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
        $searchModel = new WithholdingSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
		
		if(Yii::$app->request->post('hasEditable'))
		{
			$withholdingId = Yii::$app->request->post('editableKey');
			$withholding = Withholding::findOne($withholdingId);

			$out = Json::encode(['output'=>'','message'=>'']);
			$post = [];
			$posted = current($_POST['Withholding']);
			$post['Withholding'] = $posted;
			
			if($withholding->load($post))
			{
				$withholding->save();
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
     * Displays a single Withholding model.
     * @param integer $withholding_id
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
     * Creates a new Withholding model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Withholding();

        if ($model->load(Yii::$app->request->post())) {
			$selectSchool = ArrayHelper::map(Scholar::find()
			->where(['scholar_id'=>$model->scholar_scholar_id])
			->all(),'school_school_id','school_school_id');
			$schoolID = array_values($selectSchool)[0];
			$model->scholar_school_school_id = $schoolID;
			
			$selectArea = ArrayHelper::map(Scholar::find()
			->where(['scholar_id'=>$model->scholar_scholar_id])
			->all(),'allowance_allowance_area','allowance_allowance_area');
			$area = array_values($selectArea)[0];
			$model->scholar_allowance_allowance_area = $area;
			
			$model->save();
            return $this->redirect(['view', 'id' => $model->withholding_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Withholding model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $withholding_id
     * @param integer $scholar_scholar_id
     * @param integer $scholar_school_school_id
     * @param string $scholar_allowance_allowance_area
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->withholding_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Withholding model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $withholding_id
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
     * Finds the Withholding model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $withholding_id
     * @param integer $scholar_scholar_id
     * @param integer $scholar_school_school_id
     * @param string $scholar_allowance_allowance_area
     * @return Withholding the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Withholding::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
