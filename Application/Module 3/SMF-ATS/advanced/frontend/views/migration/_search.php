<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\MigrationSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="migration-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'migration_id') ?>

    <?= $form->field($model, 'migration_year') ?>

    <?= $form->field($model, 'employee_employee_id') ?>

    <?= $form->field($model, 'employee_user_user_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
