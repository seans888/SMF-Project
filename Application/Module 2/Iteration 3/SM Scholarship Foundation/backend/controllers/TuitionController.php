<?php

namespace backend\controllers;
use common\models\Scholar;
use yii\helpers\ArrayHelper;
use Yii;
use common\models\School;
use common\models\SchoolSearch;
use common\models\Tuition;
use common\models\TuitionSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\Json;
use common\models\GroupGrade;

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
        $searchModel = new SchoolSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
		
		if(Yii::$app->request->post('hasEditable'))
		{
			$scholarId = Yii::$app->request->post('editableKey');
			$scholar = Tuition::findOne($scholarId);

			$out = Json::encode(['output'=>'','message'=>'']);
			$post = [];
			$posted = current($_POST['Tuition']);
			$post['Tuition'] = $posted;
			
			if($scholar->load($post))
			{
				$scholar->save();
			}
			echo $out;
			return;
		}
		
        return $this->render('groupschool', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

	public function actionIndex2()
    {
        $searchModel = new TuitionSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index2', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
	
    /**
     * Displays a single Tuition model.
     * @param integer $tuition_id
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
     * Creates a new Tuition model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Tuition();

        if ($model->load(Yii::$app->request->post())) {
			$selectSchool = ArrayHelper::map(Scholar::find()
			->where(['scholar_id'=>$model->scholar_scholar_id])
			->all(),'school_school_id','school_school_id');
			$schoolID = array_values($selectSchool)[0];
			$model->scholar_school_school_id = $schoolID;
			$model->save();
            return $this->redirect(['view', 'id' => $model->tuition_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }
	
	public function actionGroupcreate()
    {
        $modelCustomer = new School;
        $modelsAddress = [new Tuition];
        if ($modelCustomer->load(Yii::$app->request->post())) {

            $modelsAddress = GroupGrade::createMultiple(Tuition::classname());
            GroupGrade::loadMultiple($modelsAddress, Yii::$app->request->post());

            // ajax validation
            if (Yii::$app->request->isAjax) {
                Yii::$app->response->format = Response::FORMAT_JSON;
                return ArrayHelper::merge(
                    ActiveForm::validateMultiple($modelsAddress),
                    ActiveForm::validate($modelCustomer)
                );
            }

            // validate all models
            $valid = $modelCustomer->validate();
            $valid = GroupGrade::validateMultiple($modelsAddress) && $valid;

            if ($valid) {
                $transaction = \Yii::$app->db->beginTransaction();
                try {
                    
                        foreach ($modelsAddress as $modelAddress) {
							$selectSchool = ArrayHelper::map(Scholar::find()
							->where(['scholar_id'=>$modelAddress->scholar_scholar_id])
							->all(),'school_school_id','school_school_id');
							$schoolID = array_values($selectSchool)[0];
							$modelAddress->scholar_school_school_id = $schoolID;
                            if (! ($flag = $modelAddress->save(false))) {
                                $transaction->rollBack();
                                break;
                            }
                        }
                    
                    if ($flag) {
                        $transaction->commit();
                        return $this->redirect(['index']);
                    }
                } catch (Exception $e) {
                    $transaction->rollBack();
                }
            }
        }

        return $this->render('groupcreate', [
            'modelCustomer' => $modelCustomer,
            'modelsAddress' => (empty($modelsAddress)) ? [new Tuition] : $modelsAddress
        ]);
    }
	
    /**
     * Updates an existing Tuition model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $tuition_id
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
            return $this->redirect(['view', 'id' => $model->tuition_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Tuition model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $tuition_id
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
     * Finds the Tuition model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $tuition_id
     * @param integer $scholar_scholar_id
     * @param integer $scholar_school_school_id
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
