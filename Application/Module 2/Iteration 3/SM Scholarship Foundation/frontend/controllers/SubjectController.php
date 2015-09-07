<?php

namespace frontend\controllers;

use Yii;
use common\models\Subject;
use common\models\SubjectSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use common\models\User;
use common\models\Scholar;
use common\models\GroupGrade;
use common\models\Email;
use common\models\Grade;
use yii\helpers\ArrayHelper;

/**
 * SubjectController implements the CRUD actions for Subject model.
 */
class SubjectController extends Controller
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
     * Lists all Subject models.
     * @return mixed
     */
    public function actionIndex()
    {
       $username=Yii::$app->user->identity->username;
		$users = User::find()->all();
		$scholars = Scholar::find()->all();
		$model = new Subject();
		$model2= new Email();
		
		foreach($users as $user){
			foreach($scholars as $scholar){
				if($user->username==$username&&$user->id==$scholar->scholar_user_id){
					$model->scholar_scholar_id=$scholar->scholar_id;
					$model->scholar_school_school_id=$scholar->school_school_id;
					$TabContent=$this->render('/email/create2',['model2'=>$model2]);
					$searchModel = new SubjectSearch($model);
					$dataProvider = $searchModel->search(Yii::$app->request->queryParams);
					return $this->render('index', [
					'searchModel' => $searchModel,
					'dataProvider' => $dataProvider,
					'TabContent'=>$TabContent,
					'model2'=>$model2,
					]);
				}

			}
		}
    }
	public function actionIndex2()
    {
       $username=Yii::$app->user->identity->username;
		$users = User::find()->all();
		$scholars = Scholar::find()->all();
		$model = new Subject();
		
		foreach($users as $user){
			foreach($scholars as $scholar){
				if($user->username==$username&&$user->id==$scholar->scholar_user_id){
					$model->scholar_scholar_id=$scholar->scholar_id;
					$model->scholar_school_school_id=$scholar->school_school_id;
					
					$searchModel = new SubjectSearch($model);
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
     * Displays a single Subject model.
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
     * Creates a new Subject model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {$username=Yii::$app->user->identity->username;
		$users = User::find()->all();
		$scholars = Scholar::find()->all();
		$model = new Subject();
		
		foreach($users as $user){
			foreach($scholars as $scholar){
				if($user->username==$username&&$user->id==$scholar->scholar_user_id){
					$model->scholar_scholar_id=$scholar->scholar_id;
					$model->scholar_school_school_id=$scholar->school_school_id;

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->subject_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
				}
			}
		}
    }
	public function actionSubjectcreate()
    {
		$username=Yii::$app->user->identity->username;
		$users = User::find()->all();
		$scholars = Scholar::find()->all();
        $modelCustomer = new Subject;
        $modelsAddress = [new Subject];
		foreach($users as $user){
			foreach($scholars as $scholar){
				if($user->username==$username&&$user->id==$scholar->scholar_user_id){
					$modelCustomer->scholar_scholar_id=$scholar->scholar_id;
					$modelCustomer->scholar_school_school_id=$scholar->school_school_id;
					 if ($modelCustomer->load(Yii::$app->request->post())) {
			
            $modelsAddress = GroupGrade::createMultiple(Subject::classname());
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
					// if($flag = $modelCustomer->save(false)){
                        foreach ($modelsAddress as $modelAddress) {
                            $modelAddress->scholar_scholar_id = $modelCustomer->scholar_scholar_id;
							$modelAddress->subject_term = $modelCustomer->subject_term;
							// $modelAddress->grade_school_year_start = $modelCustomer->grade_school_year_start;
							// $modelAddress->grade_school_year_end = $modelCustomer->grade_school_year_end;
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
                    // }
					if ($flag) {
			if($modelCustomer->subject_name==null)
			{
				$sql = "DELETE FROM subject WHERE subject_name is null;";
				Yii::$app->db->createCommand($sql)->execute();
			}
                        $transaction->commit();
                        return $this->redirect(['index']);
                    }
					 
                   
                } catch (Exception $e) {
                    $transaction->rollBack();
                }
            }
        }
		 return $this->render('subjectcreate', [
            'modelCustomer' => $modelCustomer,
            'modelsAddress' => (empty($modelsAddress)) ? [new Subject] : $modelsAddress
        ]);
				}
			}
		}
	}
	public function actionGroupcreate()
    {
		
		$username=Yii::$app->user->identity->username;
		$users = User::find()->all();
		$scholars = Scholar::find()->all();
		$model = new Subject();
        $modelCustomer = new Grade;
        $modelsAddress = [new Grade];
		foreach($users as $user){
			foreach($scholars as $scholar){
				if($user->username==$username&&$user->id==$scholar->scholar_user_id){
					$model->subject_scholar_scholar_id=$scholar->scholar_id;
        if ($modelCustomer->load(Yii::$app->request->post())) {
			
            $modelsAddress = GroupGrade::createMultiple(Grade::classname());
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
					// if($flag = $modelCustomer->save(false)){
                        foreach ($modelsAddress as $modelAddress) {
                            $modelAddress->scholar_scholar_id = $modelCustomer->scholar_scholar_id;
							$modelAddress->grade_school_year_start = $modelCustomer->grade_school_year_start;
							$modelAddress->grade_school_year_end = $modelCustomer->grade_school_year_end;
							$selectSchool = ArrayHelper::map(Scholar::find()
							->where(['scholar_id'=>$modelAddress->scholar_scholar_id])
							->all(),'school_school_id','school_school_id');
							$schoolID = array_values($selectSchool)[0];
							$modelAddress->subject_scholar_school_school_id = $schoolID;
                            if (! ($flag = $modelAddress->save(false))) {
								
                                $transaction->rollBack();
                                break;
                            }
                        }
                    // }
                    if ($flag) {
			if($modelCustomer->subject_subject_id==null)
			{
				$sql = "DELETE FROM grade WHERE subject_subject_id is null;";
				Yii::$app->db->createCommand($sql)->execute();
			}
			if($modelCustomer->grade_raw_grade!=null){
				$sql = "DELETE FROM grade WHERE grade_id=max(grade_id)-1";
				Yii::$app->db->createCommand($sql)->execute();
			}
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
            'modelsAddress' => (empty($modelsAddress)) ? [new Grade] : $modelsAddress
        ]);
    }
			}
		}
	}
	

    /**
     * Updates an existing Subject model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
	
        $model = $this->findModel($id);
		
		if($model->subject_approval_status=='Not Approved'){
			
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
			
            return $this->redirect(['update', 'id' => $model->subject_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
		}else{
			\Yii::$app->getSession()->setFlash('error', 'The record has already been reviewed by the SM Foundation');
			 return $this->redirect(['index', 'id' => $model->subject_id]);
		}
    }

    /**
     * Deletes an existing Subject model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
		
        $model=$this->findModel($id);
		if($model->subject_approval_status=='Not Approved'){
		$model=$this->findModel($id)->delete();
        return $this->redirect(['index']);
		}else{
			\Yii::$app->getSession()->setFlash('error', 'The record has already been reviewed by the SM Foundation');
			return $this->redirect(['index']);
		}
    }

    /**
     * Finds the Subject model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Subject the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Subject::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
