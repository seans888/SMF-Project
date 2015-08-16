<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\SchoolSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="school-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'school_id') ?>

    <?= $form->field($model, 'school_name') ?>

    <?= $form->field($model, 'school_area') ?>

    <?= $form->field($model, 'school_address') ?>

    <?= $form->field($model, 'school_contact_emails') ?>

    <?php // echo $form->field($model, 'school_contact_numbers') ?>

    <?php // echo $form->field($model, 'school_vendor_code') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
