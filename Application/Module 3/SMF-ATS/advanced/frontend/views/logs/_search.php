<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\LogsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="logs-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'logs_id') ?>

    <?= $form->field($model, 'logs_descript') ?>

    <?= $form->field($model, 'logs_date') ?>

    <?= $form->field($model, 'employee_employee_id') ?>

    <?= $form->field($model, 'employee_user_user_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
