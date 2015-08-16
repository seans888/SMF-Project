<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\TuitionSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tuition-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'tuition_id') ?>

    <?= $form->field($model, 'scholar_scholar_id') ?>

    <?= $form->field($model, 'scholar_school_school_id') ?>

    <?= $form->field($model, 'tuition_term') ?>

    <?= $form->field($model, 'tuition_school_year_start') ?>

    <?php // echo $form->field($model, 'tuition_school_year_end') ?>

    <?php // echo $form->field($model, 'tuition_enrollment_date') ?>

    <?php // echo $form->field($model, 'tuition_amount') ?>

    <?php // echo $form->field($model, 'tuition_paid_status') ?>

    <?php // echo $form->field($model, 'tuition_payment_date') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
