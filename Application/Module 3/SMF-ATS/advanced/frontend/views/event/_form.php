<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Event */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="event-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'event_id')->textInput() ?>

    <?= $form->field($model, 'event_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'event_descript')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'event_date')->textInput() ?>

    <?= $form->field($model, 'event_place')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'employee_employee_id')->textInput() ?>

    <?= $form->field($model, 'employee_user_user_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
