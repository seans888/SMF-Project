<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Alumni */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="alumni-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'alumni_firstname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alumni_lastname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alumni_midname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alumni_course')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alumni_school')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alumni_year_graduated')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alumni_status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alumni_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alumni_cur_work')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alumni_prev_work')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alumni_further_study')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_user_id')->textInput() ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
