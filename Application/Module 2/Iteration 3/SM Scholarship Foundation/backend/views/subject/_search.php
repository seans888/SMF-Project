<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\SubjectSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="subject-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'subject_id') ?>

    <?= $form->field($model, 'scholar_scholar_id') ?>

    <?= $form->field($model, 'scholar_school_school_id') ?>

    <?= $form->field($model, 'subject_term') ?>

    <?= $form->field($model, 'subject_name') ?>

    <?php // echo $form->field($model, 'subject_units') ?>

    <?php // echo $form->field($model, 'subject_taken_status') ?>

    <?php // echo $form->field($model, 'subject_approval_status') ?>

    <?php // echo $form->field($model, 'subject_approved_by') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
