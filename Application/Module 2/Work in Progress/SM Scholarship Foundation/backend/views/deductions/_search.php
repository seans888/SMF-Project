<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\DeductionsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="deductions-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'deduction_id') ?>

    <?= $form->field($model, 'deduction_date') ?>

    <?= $form->field($model, 'deduction_amount') ?>

    <?= $form->field($model, 'deduction_remark') ?>

    <?= $form->field($model, 'deduction_scholar_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
