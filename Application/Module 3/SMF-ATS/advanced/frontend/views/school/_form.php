<?php

use kartik\select2\Select2;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\School */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="school-form">

	<?php $form = ActiveForm::begin(); ?>
	
    <table width=400px>
	<tr> <td>
    <?= $form->field($model, 'school_name')->textInput(['maxlength' => true]) ?> 
	<tr> <td style="padding-right:30px;">
	<?= $form->field($model,'school_area')->widget(Select2::classname(), [ 'data'=>['NCR','Abra','Agusan del Norte','Agusan del Sur','Aklan', 'Albay','Antique','Apayao','Aurora','Bataan','Batanes','Batangas','Bohol', 'Cagayan','Camarines Norte','Camarines Sur','Cavite','Cebu','Davao','Ifugao', 'Ilocos Norte','Ilocos Sur','Iloilo','Laguna','Misamis Oriental', 'Mountain Province','Nueva Ecija','Nueva Vizcaya','Palawan','Pangasinan', 'Quezon','Quirino','Rizal','Romblon','Sorsogon','Tarlac','Zambales'], 'language'=>'en', 'options'=>['placeholder'=>'Select School Area'], 'pluginOptions'=>['allowClear'=>true], ]) ?>
	<tr> <td>
    <?= $form->field($model, 'school_address')->textInput(['maxlength' => true]) ?>
	<tr> <td>
    <?= $form->field($model, 'school_email')->textInput(['maxlength' => true]) ?>
	<tr> <td>
    <?= $form->field($model, 'school_contact')->textInput(['maxlength' => true]) ?>


	</table>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
