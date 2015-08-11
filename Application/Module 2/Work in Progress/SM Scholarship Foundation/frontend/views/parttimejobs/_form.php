<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $model common\models\Parttimejobs */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="parttimejobs-form">

    <?php $form = ActiveForm::begin(); ?>

	
    <?= $form->field($model, 'job_location')->dropDownList(['Sample Company 1'=>'Sample Company 1','Sample Company 2'=>'Sample Company 2','Sample Company 3'=>'Sample Company 3','Sample Company 4'=>'Sample Company 4'],['prompt' => 'Select Location']) ?>

    <?= $form->field($model, 'job_startDate')->widget(
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
    <?= $form->field($model, 'job_endDate')->widget(
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

    <?= $form->field($model, 'job_description')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Submit' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
