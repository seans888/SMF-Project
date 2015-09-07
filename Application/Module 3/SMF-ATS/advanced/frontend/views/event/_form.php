<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $model frontend\models\Event */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="event-form">

    <?php $form = ActiveForm::begin(); ?>
	<table width=600px;>
	<tr> <td style ="padding-right:300px;">
    <?= $form->field($model, 'event_title')->textInput(['maxlength' => true]) ?>
	<tr> <td>
    <?= $form->field($model, 'event_descript')->textArea(['maxlength' => true]) ?>
	<tr> <td>
    <?= $form->field($model, 'event_date')->widget(
    DatePicker::className(), [
        // inline too, not bad
         'inline' => false, 
         // modify template for custom rendering
        //'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-m-d'
        ]
	]);?>
	<tr> <td>
	<?= $form->field($model, 'event_place')->textInput(['maxlength' => true]) ?>
	<tr> <td>
    <?= $form->field($model, 'employee_employee_id')->textInput() ?>
	<tr> <td>
   <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
	
	</table>
    <?php ActiveForm::end(); ?>

</div>
