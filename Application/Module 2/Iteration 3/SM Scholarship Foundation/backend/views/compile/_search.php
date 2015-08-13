<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\CompileSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="compile-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'compile_id') ?>

    <?= $form->field($model, 'compile_scholar_id') ?>

    <?= $form->field($model, 'compile_school_id') ?>

    <?= $form->field($model, 'compile_tuitionfee_id') ?>

    <?= $form->field($model, 'compile_grade_id') ?>

    <?php // echo $form->field($model, 'compile_scholar_firstName') ?>

    <?php // echo $form->field($model, 'compile_scholar_lastName') ?>

    <?php // echo $form->field($model, 'compile_scholar_middleName') ?>

    <?php // echo $form->field($model, 'compile_school_name') ?>

    <?php // echo $form->field($model, 'compile_school_area') ?>

    <?php // echo $form->field($model, 'compile_pendingPaymentToSchool') ?>

    <?php // echo $form->field($model, 'compile_pendingPaymentToStudent') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
