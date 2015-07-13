<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\GradesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="grades-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'grade_id') ?>

    <?= $form->field($model, 'grade_schoolYear') ?>

    <?= $form->field($model, 'grade_Term') ?>

    <?= $form->field($model, 'grade_scholar_id') ?>

    <?= $form->field($model, 'grade_scholar_lastName') ?>

    <?php // echo $form->field($model, 'grade_scholar_firstName') ?>

    <?php // echo $form->field($model, 'grade_scholar_middleName') ?>

    <?php // echo $form->field($model, 'grade_value') ?>

    <?php // echo $form->field($model, 'grade_grade_form') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
