<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model frontend\models\Alumni */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="alumni-form">

		
	<?php $form = ActiveForm::begin(); ?>
	
	<table>
	<tr><td>
    <?= $form->field($model, 'alumni_id')->textInput(['maxlength' => true]) ?>
    </td> </tr> 
	<h3> Personal Details </h3>
	<tr> <td>
    <?= $form->field($model, 'alumni_firstname')->textInput(['maxlength' => true]) ?>
	</td> <td style="padding-left:50px;">
    <?= $form->field($model, 'alumni_midinit')->textInput(['maxlength' => true]) ?>
	</td> <td style="padding-left:50px;">
    <?= $form->field($model, 'alumni_lastname')->textInput(['maxlength' => true]) ?>
    </td>  <td style="padding-left:50px;">
	<?= $form->field($model, 'alumni_gender')->dropDownList([ 'Male' => 'Male', 'Female' => 'Female', ], ['prompt' => 'Select Gender']) ?>
	</td> </tr> <td colspan="3", style="padding-right:70px"> 
    <?= $form->field($model, 'alumni_address')->textInput(['maxlength' => true]) ?>
	</td> <td colspan="4"> 
    <?= $form->field($model, 'alumni_contactno')->textInput(['maxlength' => true]) ?>
	</td> </tr> <td colspan="2"> 
    <?= $form->field($model, 'alumni_remarks')->textArea(['maxlength' => true]) ?>
	
	<h3> Work Details </h3>
	<td> <tr>  <td colspan="2", style="padding-right:50px"> 
    <?= $form->field($model, 'alumni_company')->textInput(['maxlength' => true]) ?>
	</td> <td colspan="1">
	<?= $form->field($model, 'alumni_email')->textInput(['maxlength' => true]) ?>
	</td> </tr> <td colspan="2", style="padding-right:50px">
	<?= $form->field($model, 'alumni_office_local_no')->textInput(['maxlength' => true]) ?>
	</td> <td colspan="1">
    <?= $form->field($model, 'alumni_status')->textInput(['maxlength' => true]) ?>
	</td> </tr> <td colspan="2">
	<?= $form->field($model, 'alumni_cur_work')->textInput(['maxlength' => true]) ?>
	</td> </tr> <td colspan="2">
    <?= $form->field($model, 'alumni_prev_work')->textInput(['maxlength' => true]) ?>
	</tr> <td colspan="2">
	
	<h3> Education Details </h3>

    <?= $form->field($model, 'alumni_year_graduated')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alumni_course')->dropDownList([ 'BEED' => 'BEED', 'BSE English-Fil. (Com. Arts)' => 'BSE English-Fil. (Com. Arts)', 'BSIT' => 'BSIT',
	'BSCE' => 'BSCE', 'BSE Biology' => 'BSE Biology', 'BSBAA' => 'BSBAA', 'BSE Biology' => 'BSE Biology', 'BS BA' => 'BS BA',
	'BS FMA' => 'BS FMA', 'BS Math' => 'BS Math', 'BSIM' => 'BSIM', 'BSE Physics-Math' => 'BSE Physics-Math', 'BSBAMA' => 'BSBAMA', 'BSC Mgt. Acctng' => 'BSC Mgt. Acctng',
	'BSA' => 'BSA', 'BSCSIT SSE' => 'BSCSIT SSE', 'BSE Math' => 'BSE Math', 'BSCS' => 'BSCS', 'BSE-English' => 'BSE-English', 'BSECE' => 'BSECE', 'BSMA / COMA' => 'BSMA / COMA',
    'BSCOE' => 'BSCOE']) ?>

    <?= $form->field($model, 'alumni_school')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alumni_area')->widget(Select2::classname(), [ 'data'=>['NCR','Abra','Agusan del Norte','Agusan del Sur','Aklan', 'Albay','Antique','Apayao','Aurora','Bataan','Batanes','Batangas','Bohol', 
	'Cagayan','Camarines Norte','Camarines Sur','Cavite','Cebu','Davao','Ifugao', 'Ilocos Norte','Ilocos Sur','Iloilo','Laguna','Misamis Oriental', 'Mountain Province','Nueva Ecija','Nueva Vizcaya','Palawan','Pangasinan', 
	'Quezon','Quirino','Rizal','Romblon','Sorsogon','Tarlac','Zambales'], 'language'=>'en', 'options'=>['placeholder'=>'Select School Area'], 'pluginOptions'=>['allowClear'=>true], ]) ?>

    <?= $form->field($model, 'alumni_further_study')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alumni_achievements')->textArea(['maxlength' => true]) ?>

    <?= $form->field($model, 'alumni_legends')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

	</table>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
