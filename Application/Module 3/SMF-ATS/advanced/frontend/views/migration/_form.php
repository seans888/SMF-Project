<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Migration */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="migration-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'migration_id')->textInput() ?>

    <?= $form->field($model, 'migration_year')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'employee_employee_id')->textInput() ?>

    <?= $form->field($model, 'employee_user_user_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
