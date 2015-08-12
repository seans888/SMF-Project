<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ApprovedAllowance */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="approved-allowance-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'allowance_amount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'allowance_remark')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'allowance_scholar_id')->textInput() ?>

    <?= $form->field($model, 'allowance_school_id')->textInput() ?>

    <?= $form->field($model, 'allowance_payStatus')->dropDownList([ 'paid' => 'Paid', 'not paid' => 'Not paid', '' => '', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'allowance_paidDate')->textInput() ?>

    <?= $form->field($model, 'allowance_status')->dropDownList([ 'PAST' => 'PAST', 'PRESENT' => 'PRESENT', '' => '', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'approval_status')->dropDownList([ 'Approved' => 'Approved', 'Not Approved' => 'Not Approved', '' => '', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'approved_by')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'approved_remark')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
