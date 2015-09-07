<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\MigratedAlumniSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="migratedalumni-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'migalu_id') ?>

    <?= $form->field($model, 'migalu_lastname') ?>

    <?= $form->field($model, 'migalu_firstname') ?>

    <?= $form->field($model, 'migalu_midinit') ?>

    <?php // echo $form->field($model, 'migalu_address') ?>

    <?php // echo $form->field($model, 'migalu_gender') ?>

    <?php // echo $form->field($model, 'migalu_school') ?>

    <?php // echo $form->field($model, 'migalu_course') ?>

    <?php // echo $form->field($model, 'migalu_email') ?>

    <?php // echo $form->field($model, 'migalu_contactno') ?>

    <?php // echo $form->field($model, 'migalu_remarks') ?>

    <?php // echo $form->field($model, 'migalu_area') ?>

    <?php // echo $form->field($model, 'migalu_office_local_no') ?>

    <?php // echo $form->field($model, 'migalu_year_graduated') ?>

    <?php // echo $form->field($model, 'migalu_status') ?>

    <?php // echo $form->field($model, 'migalu_cur_work') ?>

    <?php // echo $form->field($model, 'migalu_prev_work') ?>

    <?php // echo $form->field($model, 'migalu_achievements') ?>

    <?php // echo $form->field($model, 'migalu_company') ?>

    <?php // echo $form->field($model, 'migalu_legends') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
