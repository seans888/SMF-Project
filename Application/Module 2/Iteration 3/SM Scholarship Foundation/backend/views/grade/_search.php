<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\GradeSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="grade-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'grade_id') ?>

    <?= $form->field($model, 'subject_subject_id') ?>

    <?= $form->field($model, 'subject_scholar_scholar_id') ?>

    <?= $form->field($model, 'subject_scholar_school_school_id') ?>

    <?= $form->field($model, 'grade_school_year_start') ?>

    <?php // echo $form->field($model, 'grade_school_year_end') ?>

    <?php // echo $form->field($model, 'grade_raw_grade') ?>

    <?php // echo $form->field($model, 'grade_approval_status') ?>

    <?php // echo $form->field($model, 'grade_approved_by') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
