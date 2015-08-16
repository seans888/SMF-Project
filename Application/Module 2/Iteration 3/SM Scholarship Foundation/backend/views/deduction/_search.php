<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\DeductionSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="deduction-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'deduction_id') ?>

    <?= $form->field($model, 'scholar_scholar_id') ?>

    <?= $form->field($model, 'scholar_school_school_id') ?>

    <?= $form->field($model, 'deduction_date') ?>

    <?= $form->field($model, 'deduction_amount') ?>

    <?php // echo $form->field($model, 'deduction_remark') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
