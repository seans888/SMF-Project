<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Testimonials */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="testimonials-form">
	<table width=600px;>
    <?php $form = ActiveForm::begin(); ?>
	<tr> <td style ="padding-right:300px;">
    <?= $form->field($model, 'testimonial_name')->textInput(['maxlength' => true]) ?>
	<tr> <td>
    <?= $form->field($model, 'testimonial_description')->textArea(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
	</table>
    <?php ActiveForm::end(); ?>

</div>
