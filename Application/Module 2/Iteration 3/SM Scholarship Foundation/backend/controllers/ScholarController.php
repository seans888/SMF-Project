<?php

namespace backend\controllers;

use Yii;
use yii\helpers\Json;
use yii\helpers\ArrayHelper;
use common\models\School;
use common\models\Scholar;
use common\models\ScholarSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\ForbiddenHttpException;

/**
 * ScholarController implements the CRUD actions for Scholar model.
 */
class ScholarController extends Controller
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
     * Lists all Scholar models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ScholarSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
		
		if(Yii::$app->request->post('hasEditable'))
		{
			$scholarId = Yii::$app->request->post('editableKey');
			$scholar = Scholar::findOne($scholarId);

			$out = Json::encode(['output'=>'','message'=>'']);
			$post = [];
			$posted = current($_POST['Scholar']);
			$post['Scholar'] = $posted;
			
			if($scholar->load($post))
			{
				$scholar->save();
			}
			echo $out;
			return;
		}
		
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Scholar model.
     * @param integer $scholar_id
     * @param integer $school_school_id
     * @param string $allowance_allowance_area
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Scholar model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Scholar();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->scholar_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Scholar model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $scholar_id
     * @param integer $school_school_id
     * @param string $allowance_allowance_area
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->scholar_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Scholar model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $scholar_id
     * @param integer $school_school_id
     * @param string $allowance_allowance_area
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Scholar model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $scholar_id
     * @param integer $school_school_id
     * @param string $allowance_allowance_area
     * @return Scholar the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Scholar::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
