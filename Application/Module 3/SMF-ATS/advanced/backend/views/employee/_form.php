<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\employee */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="employee-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'emp_firstname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'emp_lastname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'emp_midname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'emp_position')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'emp_department')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
