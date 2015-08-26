<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use wbraganca\dynamicform\DynamicFormWidget;
use common\models\Scholar;
use dosamigos\datepicker\DatePicker;
use kartik\select2\Select2;
use common\models\Subject;
use common\models\Grade;
use common\models\GroupGrade;
use common\models\User;

?>

<div class="grade-form">

    <?php $form = ActiveForm::begin(['id' => 'dynamic-form']); ?>
	<?php   
		$username=Yii::$app->user->identity->username;
		$users = User::find()->all();
		$scholars = Scholar::find()->all();
		
        $modelCustomer = new Grade;
        $modelsAddress = [new Grade];
		foreach($users as $user){
			foreach($scholars as $scholar){
				if($user->username==$username&&$user->id==$scholar->scholar_user_id){
					$modelCustomer->subject_scholar_scholar_id=$scholar->scholar_id;
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
				}
			}
		}?>

    
	<div class="row">
		<div class="col-sm-4">
			<?= $form->field($modelCustomer, "grade_school_year_start")->textInput(['maxlength' => true]) ?>
		</div>
		<div class="col-sm-4">
			<?= $form->field($modelCustomer, "grade_school_year_end")->textInput(['maxlength' => true]) ?>
		</div>
	</div><!-- .row -->
    <div class="panel panel-default">
        <div class="panel-heading"><h4><i class="glyphicon glyphicon-envelope"></i> Grades</h4></div>
        <div class="panel-body">
             <?php DynamicFormWidget::begin([
                'widgetContainer' => 'dynamicform_wrapper', // required: only alphanumeric characters plus "_" [A-Za-z0-9_]
                'widgetBody' => '.container-items', // required: css class selector
                'widgetItem' => '.item', // required: css class
                'limit' => 10, // the maximum times, an element can be cloned (default 999)
                'min' => 1, // 0 or 1 (default 1)
                'insertButton' => '.add-item', // css class
                'deleteButton' => '.remove-item', // css class
                'model' => $modelsAddress[0],
                'formId' => 'dynamic-form',
                'formFields' => [
					'subject_scholar_scholar_id',
                    'subject_subject_id',
					'grade_raw_grade',
					'grade_school_year_start',
					'grade_school_year_end',
                ],
            ]); ?>

            <div class="container-items"><!-- widgetContainer -->
            <?php foreach ($modelsAddress as $i => $modelAddress): ?>
                <div class="item panel panel-default"><!-- widgetBody -->
                    <div class="panel-heading">
                        <h3 class="panel-title pull-left">Subject</h3>
                        <div class="pull-right">
                            <button type="button" class="add-item btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"></i></button>
                            <button type="button" class="remove-item btn btn-danger btn-xs"><i class="glyphicon glyphicon-minus"></i></button>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="panel-body">
                        <?php
                            // necessary for update action.
                            if (! $modelAddress->isNewRecord) {
                                echo Html::activeHiddenInput($modelAddress, "[{$i}]grade_id");
                            }
                        ?>
                        <div class="row">
                            <div class="col-sm-6">

								<?= $form->field($modelAddress,"[{$i}]subject_subject_id")->dropDownList(
								ArrayHelper::map(Subject::find()->where(['scholar_scholar_id'=>$scholar->scholar_id])->all(),'subject_id','subject_name','scholar_scholar_id')
								)
								?>
                            </div>
                            <div class="col-sm-4">
                                <?= $form->field($modelAddress, "[{$i}]grade_raw_grade")->textInput(['maxlength' => true]) ?>
                            </div>
                        </div><!-- .row -->


                    </div>
                </div>
            <?php endforeach; ?>
            </div>
            <?php DynamicFormWidget::end(); ?>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton($modelAddress->isNewRecord ? 'Create' : 'Update', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>