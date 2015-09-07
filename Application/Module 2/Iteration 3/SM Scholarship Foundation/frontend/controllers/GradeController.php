<?php

namespace frontend\controllers;

use Yii;
use common\models\User;
use common\models\Subject;
use common\models\Scholar;
use common\models\SchoolSearch;
use common\models\Grade;
use common\models\GradeSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use common\models\GroupGrade;
use common\models\SubjectSearch;
use yii\helpers\ArrayHelper;
use yii\helpers\Json;


/**
 * GradeController implements the CRUD actions for Grade model.
 */
class GradeController extends Controller
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
     * Lists all Grades models.
     * @return mixed
     */
	
    public function actionIndex()
    {
		$username=Yii::$app->user->identity->username;
		$users = User::find()->all();
		$scholars = Scholar::find()->all();
		
		
		foreach($users as $user){
			foreach($scholars as $scholar){
				if($user->username==$username&&$user->id==$scholar->scholar_user_id){
					$searchModel = new GradeSearch();
					$dataProvider = $searchModel->search(Yii::$app->request->queryParams);

					if(Yii::$app->request->post('hasEditable'))
				{
			$gradeId = Yii::$app->request->post('editableKey');
			$grade = Grade::findOne($gradeId);
			$out = Json::encode(['output'=>'','message'=>'']);
			$post = [];
			$posted = current($_POST['Grade']);
			$post['Grade'] = $posted;
			
			if($grade->load($post))
			{
				if($grade->grade_approval_status=='Approved')
				{
					$grade->grade_approved_by = Yii::$app->user->identity->username;
				}
				else
				{
					$grade->grade_approved_by = null;
				}

					$subject = Subject::findOne($grade->subject_subject_id);
					// $subjectTakenStatus = ArrayHelper::map(Subject::find()
					// ->where(['subject_id'=>$grade->subject_subject_id])
					// ->all(),'subject_id','subject_taken_status');
					$subject->subject_taken_status = $grade->takenStatus;
					$subject->save();
				
				$grade->save();
			}
			echo $out;
			return;
		}
		
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
				}
			}
		}
    }


    /**
     * Displays a single Grades model.
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
     * Creates a new Grades model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
	
    public function actionCreate()
    {
	
		
        $model = new Grade();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->grade_id]);
        } else {
            return $this->render('index', [
                'model' => $model,
            ]);
        }
    }
public function actionGroupcreate()
    {
        $modelCustomer = new Grade;
        $modelsAddress = [new Grade];
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
                            $modelAddress->subject_scholar_scholar_id = $modelCustomer->subject_scholar_scholar_id;
							$modelAddress->grade_school_year_start = $modelCustomer->grade_school_year_start;
							$modelAddress->grade_school_year_end = $modelCustomer->grade_school_year_end;
							$selectSchool = ArrayHelper::map(Scholar::find()
							->where(['scholar_id'=>$modelAddress->subject_scholar_scholar_id])
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
	
    /**
     * Updates an existing Grades model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
	
			if(Yii::$app->user->can('update-grades'))
		{
			$model2 = $this->findModel($id);

			if ($model2->load(Yii::$app->request->post())) {
				$model2->updated_by = Yii::$app->user->identity->username;
				$model2->save();
				return $this->redirect(['view', 'id' => $model2->grade_id]);
			} else {
				return $this->render('update', [
					'model' => $model,
				]);
			}
		}
		else
		{
			throw new ForbiddenHttpException;
		}
    }

    /**
     * Deletes an existing Grades model.
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
     * Finds the Grades model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Grades the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Grades::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
