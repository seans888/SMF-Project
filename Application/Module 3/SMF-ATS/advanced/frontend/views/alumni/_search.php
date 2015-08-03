<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\AlumniSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="alumni-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'alumni_id') ?>

    <?= $form->field($model, 'alumni_firstname') ?>

    <?= $form->field($model, 'alumni_lastname') ?>

    <?= $form->field($model, 'alumni_midname') ?>

    <?= $form->field($model, 'alumni_course') ?>

    <?php // echo $form->field($model, 'alumni_school') ?>

    <?php // echo $form->field($model, 'alumni_year_graduated') ?>

    <?php // echo $form->field($model, 'alumni_status') ?>

    <?php // echo $form->field($model, 'alumni_email') ?>

    <?php // echo $form->field($model, 'alumni_cur_work') ?>

    <?php // echo $form->field($model, 'alumni_prev_work') ?>

    <?php // echo $form->field($model, 'alumni_further_study') ?>

    <?php // echo $form->field($model, 'user_user_id') ?>

    <?php // echo $form->field($model, 'user_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
