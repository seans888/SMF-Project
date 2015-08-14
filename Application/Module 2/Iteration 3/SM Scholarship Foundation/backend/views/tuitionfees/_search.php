<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\TuitionfeesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tuitionfees-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'tuitionfee_id') ?>

    <?= $form->field($model, 'tuitionfee_scholar_id') ?>

    <?= $form->field($model, 'tuitionfee_scholar_lastName') ?>

    <?= $form->field($model, 'tuitionfee_scholar_firstName') ?>

    <?= $form->field($model, 'tuitionfee_scholar_middleName') ?>

    <?php // echo $form->field($model, 'tuitionfee_amount') ?>

    <?php // echo $form->field($model, 'tuitionfee_dateOfEnrollment') ?>

    <?php // echo $form->field($model, 'tuitionfee_dateOfPayment') ?>

    <?php // echo $form->field($model, 'tuitionfee_paidStatus') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
