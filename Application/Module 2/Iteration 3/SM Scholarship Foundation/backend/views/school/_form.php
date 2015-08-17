<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
/* @var $this yii\web\View */
/* @var $model common\models\School */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="school-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'school_id')->textInput() ?>

    <?= $form->field($model, 'school_name')->textInput(['maxlength' => true]) ?>

	<?= $form->field($model,'school_area')->widget(Select2::classname(),
		[
			'data'=>['NCR'=>'NCR','Abra'=>'Abra','Agusan del Norte','Agusan del Sur','Aklan',
			'Albay','Antique','Apayao','Aurora','Bataan','Batanes','Batangas','Bohol',
			'Cagayan','Camarines Norte','Camarines Sur','Cavite','Cebu','Davao','Ifugao',
			'Ilocos Norte'=>'Ilocos Norte','Ilocos Sur','Iloilo','Laguna','Misamis Oriental',
			'Mountain Province','Nueva Ecija','Nueva Vizcaya','Palawan','Pangasinan',
			'Quezon','Quirino','Rizal','Romblon','Sorsogon','Tarlac','Zambales'],
			'language'=>'en',
			'options'=>['placeholder'=>'Select School Area'],
			'pluginOptions'=>['allowClear'=>true],
		]) ?>

    <?= $form->field($model, 'school_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'school_contact_emails')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'school_contact_numbers')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'school_vendor_code')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>