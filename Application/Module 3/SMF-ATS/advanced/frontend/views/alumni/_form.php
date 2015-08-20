<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model frontend\models\Alumni */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="alumni-form">

    <?php $form = ActiveForm::begin(); ?>
	
	<?php $form = ActiveForm::begin(); ?>
	<table>
	<tr><td>
    <?= $form->field($model, 'alumni_id')->textInput(['maxlength' => true]) ?>
    </td> </tr> 
	<tr> <td>
    <?= $form->field($model, 'alumni_firstname')->textInput(['maxlength' => true]) ?>
	</td> <td style="padding-left:50px;">
    <?= $form->field($model, 'alumni_midinit')->textInput(['maxlength' => true]) ?>
	</td> <td style="padding-left:50px;">
    <?= $form->field($model, 'alumni_lastname')->textInput(['maxlength' => true]) ?>
    </td>  <td style="padding-left:50px;">
	<?= $form->field($model, 'alumni_gender')->dropDownList([ 'Male' => 'Male', 'Female' => 'Female', ], ['prompt' => 'Select Gender']) ?>
	</td> </tr> <td colspan="5"> 
    <?= $form->field($model, 'alumni_address')->textInput(['maxlength' => true]) ?>
	</td> </tr> <td colspan="2"> 
    <?= $form->field($model, 'alumni_contactno')->textInput(['maxlength' => true]) ?>
	</td> </tr> <td colspan="2"> 
    <?= $form->field($model, 'alumni_remarks')->textArea(['maxlength' => true]) ?>
	</td> </tr> <td colspan="2"> 
    <?= $form->field($model, 'alumni_office_local_no')->textInput(['maxlength' => true]) ?>
	</td> </tr> <td colspan="2">

    <?= $form->field($model, 'alumni_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alumni_year_graduated')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alumni_course')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alumni_school')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alumni_company')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alumni_status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alumni_area')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alumni_cur_work')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alumni_prev_work')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alumni_further_study')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alumni_achievements')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alumni_legends')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_id')->textInput() ?>
</table>

	<?php ActiveForm::end(); ?>
	
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
