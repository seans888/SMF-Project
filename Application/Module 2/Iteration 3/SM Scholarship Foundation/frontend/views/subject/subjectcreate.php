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
	<div class="row" style="margin-top:150px;">
		<div class="col-sm-4">
			<?= $form->field($modelCustomer, "subject_term")->textInput(['maxlength' => true]) ?>
		</div>
		
	</div><!-- .row -->
    <div class="panel panel-default">
        <div class="panel-heading"><h4><i class="glyphicon glyphicon-th-list"></i> Subjects</h4></div>
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
					'scholar_scholar_id',
                    'subject_id',
					
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

								<?= $form->field($modelAddress,"[{$i}]subject_name")->textInput()
								?>
                            </div>
                            <div class="col-sm-4">
                                <?= $form->field($modelAddress, "[{$i}]subject_units")->textInput(['maxlength' => true]) ?>
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