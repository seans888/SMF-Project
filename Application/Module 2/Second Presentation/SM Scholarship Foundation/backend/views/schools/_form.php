<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
/* @var $this yii\web\View */
/* @var $model common\models\Schools */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="schools-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'school_name')->textInput(['maxlength' => true]) ?>

	<?= $form->field($model,'school_area')->widget(Select2::classname(),
		[
			'data'=>['NCR','Abra','Agusan del Norte','Agusan del Sur','Aklan',
			'Albay','Antique','Apayao','Aurora','Bataan','Batanes','Batangas','Bohol',
			'Cagayan','Camarines Norte','Camarines Sur','Cavite','Cebu','Davao','Ifugao',
			'Ilocos Norte','Ilocos Sur','Iloilo','Laguna','Misamis Oriental',
			'Mountain Province','Nueva Ecija','Nueva Vizcaya','Palawan','Pangasinan',
			'Quezon','Quirino','Rizal','Romblon','Sorsogon','Tarlac','Zambales'],
			'language'=>'en',
			'options'=>['placeholder'=>'Select School Area'],
			'pluginOptions'=>['allowClear'=>true],
		]) ?>

    <?= $form->field($model, 'school_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'school_contactEmail')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'school_contactNumber')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
