<?php

use dosamigos\datepicker\DatePicker;
use common\models\Scholars;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\fileinput\FileInput;


/* @var $this yii\web\View */
/* @var $model frontend\models\Tuition */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tuition-form">

     <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>
	
		<?= $form->field($model, 'file')->widget(\dosamigos\fileinput\BootstrapFileInput::className(), [
			'options' => ['multiple' => true],
			'clientOptions' => [
			'previewFileType' => 'text',
			'browseClass' => 'btn btn-success',
			'uploadClass' => 'btn btn-info',
			'removeClass' => 'btn btn-danger',
			'removeIcon' => '<i class="glyphicon glyphicon-trash"></i> '
		],
	
		])->label('Upload Registration Form')?>

    <?= $form->field($model, 'tuitionfee_amount')->textInput() ?>

   <?= $form->field($model, 'tuitionfee_dateOfEnrollment')->widget(
			DatePicker::className(), [
				// inline too, not bad
				 'inline' => false, 
				 // modify template for custom rendering
			//	'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
				'clientOptions' => [
					'autoclose' => true,
					'format' => 'yyyy-mm-dd'
				]
			]);?>

    <?= $form->field($model, 'tuitionfee_dateOfPayment')->widget(
			DatePicker::className(), [
				// inline too, not bad
				 'inline' => false, 
				 // modify template for custom rendering
			//	'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
				'clientOptions' => [
					'autoclose' => true,
					'format' => 'yyyy-mm-dd'
				]
			]);?>

  

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
