<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ApprovedDeductionsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="approved-deductions-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'deduction_id') ?>

    <?= $form->field($model, 'deduction_date') ?>

    <?= $form->field($model, 'deduction_amount') ?>

    <?= $form->field($model, 'deduction_remark') ?>

    <?= $form->field($model, 'deduction_scholar_id') ?>

    <?php // echo $form->field($model, 'approval_status') ?>

    <?php // echo $form->field($model, 'approved_by') ?>

    <?php // echo $form->field($model, 'approved_remark') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
