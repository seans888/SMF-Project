<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Grade */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="grade-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'grade_id')->textInput() ?>

    <?= $form->field($model, 'subject_subject_id')->textInput() ?>

    <?= $form->field($model, 'subject_scholar_scholar_id')->textInput() ?>

    <?= $form->field($model, 'subject_scholar_school_school_id')->textInput() ?>

    <?= $form->field($model, 'grade_school_year_start')->textInput() ?>

    <?= $form->field($model, 'grade_school_year_end')->textInput() ?>

    <?= $form->field($model, 'grade_raw_grade')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'grade_approval_status')->dropDownList([ 'Not Approved' => 'Not Approved', 'Approved' => 'Approved', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'grade_approved_by')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
