<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Subject */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="subject-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'subject_id')->textInput() ?>

    <?= $form->field($model, 'scholar_scholar_id')->textInput() ?>

    <?= $form->field($model, 'scholar_school_school_id')->textInput() ?>

    <?= $form->field($model, 'subject_term')->textInput() ?>

    <?= $form->field($model, 'subject_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'subject_units')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'subject_taken_status')->dropDownList([ 'Not Taken' => 'Not Taken', 'Taken' => 'Taken', 'Failed' => 'Failed', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'subject_approval_status')->dropDownList([ 'Not Approved' => 'Not Approved', 'Approved' => 'Approved', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'subject_approved_by')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
