<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Tuition */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tuition-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tuition_id')->textInput() ?>

    <?= $form->field($model, 'scholar_scholar_id')->textInput() ?>

    <?= $form->field($model, 'scholar_school_school_id')->textInput() ?>

    <?= $form->field($model, 'tuition_term')->textInput() ?>

    <?= $form->field($model, 'tuition_school_year_start')->textInput() ?>

    <?= $form->field($model, 'tuition_school_year_end')->textInput() ?>

    <?= $form->field($model, 'tuition_enrollment_date')->textInput() ?>

    <?= $form->field($model, 'tuition_amount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tuition_paid_status')->dropDownList([ 'Paid' => 'Paid', 'Not Paid' => 'Not Paid', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'tuition_payment_date')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
