<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\FailuresSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="failures-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'fail_id') ?>

    <?= $form->field($model, 'fail_subject') ?>

    <?= $form->field($model, 'fail_units') ?>

    <?= $form->field($model, 'fail_scholar_id') ?>

    <?= $form->field($model, 'fail_school_id') ?>

    <?php // echo $form->field($model, 'failures_scholar_lastName') ?>

    <?php // echo $form->field($model, 'failures_scholar_firstName') ?>

    <?php // echo $form->field($model, 'failures_scholar_middleName') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
