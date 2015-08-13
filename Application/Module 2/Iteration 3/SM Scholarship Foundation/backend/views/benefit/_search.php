<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\BenefitSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="benefit-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'benefit_id') ?>

    <?= $form->field($model, 'benefit_amount') ?>

    <?= $form->field($model, 'benefit_scholarShare') ?>

    <?= $form->field($model, 'benefit_tuitionfee_id') ?>

    <?= $form->field($model, 'benefit_scholar_id') ?>

    <?php // echo $form->field($model, 'benefit_school_id') ?>

    <?php // echo $form->field($model, 'benefit_scholar_lastName') ?>

    <?php // echo $form->field($model, 'benefit_scholar_firstName') ?>

    <?php // echo $form->field($model, 'benefit_scholar_middleName') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
