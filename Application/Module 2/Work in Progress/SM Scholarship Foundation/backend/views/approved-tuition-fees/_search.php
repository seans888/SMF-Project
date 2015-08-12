<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ApprovedTuitionFeesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="approved-tuition-fees-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'tuitionfee_id') ?>

    <?= $form->field($model, 'tuitionfee_scholar_id') ?>

    <?= $form->field($model, 'tuitionfee_term') ?>

    <?= $form->field($model, 'tuitionfee_amount') ?>

    <?= $form->field($model, 'tuitionfee_dateOfEnrollment') ?>

    <?php // echo $form->field($model, 'tuitionfee_dateOfPayment') ?>

    <?php // echo $form->field($model, 'tuitionfee_paidStatus') ?>

    <?php // echo $form->field($model, 'approval_status') ?>

    <?php // echo $form->field($model, 'approved_by') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
