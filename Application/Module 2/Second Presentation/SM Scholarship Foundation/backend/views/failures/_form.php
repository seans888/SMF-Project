<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Failures */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="failures-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fail_subject')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fail_units')->textInput() ?>

    <?= $form->field($model, 'fail_scholar_id')->textInput() ?>

    <?= $form->field($model, 'fail_school_id')->textInput() ?>

    <?= $form->field($model, 'failures_scholar_lastName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'failures_scholar_firstName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'failures_scholar_middleName')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
