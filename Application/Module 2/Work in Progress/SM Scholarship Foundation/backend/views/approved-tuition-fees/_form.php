<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ApprovedTuitionFees */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="approved-tuition-fees-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tuitionfee_scholar_id')->textInput() ?>

    <?= $form->field($model, 'tuitionfee_term')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tuitionfee_amount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tuitionfee_dateOfEnrollment')->textInput() ?>

    <?= $form->field($model, 'tuitionfee_dateOfPayment')->textInput() ?>

    <?= $form->field($model, 'tuitionfee_paidStatus')->dropDownList([ 'paid' => 'Paid', 'not paid' => 'Not paid', '' => '', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'approval_status')->dropDownList([ 'Approved' => 'Approved', 'Not Approved' => 'Not Approved', '' => '', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'approved_by')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
