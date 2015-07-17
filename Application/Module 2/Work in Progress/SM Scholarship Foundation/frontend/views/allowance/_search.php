<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\AllowanceSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="allowance-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'allowance_id') ?>

    <?= $form->field($model, 'allowance_amount') ?>

    <?= $form->field($model, 'allowance_remark') ?>

    <?= $form->field($model, 'allowance_scholar_id') ?>

    <?= $form->field($model, 'allowance_school_id') ?>

    <?php // echo $form->field($model, 'allowance_payStatus') ?>

    <?php // echo $form->field($model, 'benefit_allowance_id') ?>

    <?php // echo $form->field($model, 'allowance_scholar_lastName') ?>

    <?php // echo $form->field($model, 'allowance_scholar_firstName') ?>

    <?php // echo $form->field($model, 'allowance_scholar_middleName') ?>

    <?php // echo $form->field($model, 'allowance_paidDate') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
