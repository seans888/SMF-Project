<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Testimonials */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="testimonials-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'testimonial_name')->textInput(['maxlength' => true]) ?>
	
	<?= $form->field($model, 'file')->fileInput(); ?>

    <?= $form->field($model, 'testimonial_description')->textArea(['maxlength' => true, 'style' => 'height:200px; margin:0px auto;']); ?>

    <?= $form->field($model, 'testiomonial_date')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
