<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ApprovedTuitionFees */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="approved-tuition-fees-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tuitionfee_scholar_id')->textInput(['readonly'=>true]) ?>

    <?= $form->field($model, 'tuitionfees_term')->textInput(['readonly'=>true]) ?>

    <?= $form->field($model, 'tuitionfee_amount')->textInput(['readonly'=>true]) ?>

    <?= $form->field($model, 'tuitionfee_dateOfEnrollment')->textInput(['readonly'=>true]) ?>

    <?= $form->field($model, 'tuitionfee_dateOfPayment')->textInput(['readonly'=>true]) ?>

    <?= $form->field($model, 'tuitionfee_paidStatus')->textInput(['readonly'=>true]) ?>

    <?= $form->field($model, 'approval_status')->dropDownList([ 'Approved' => 'Approved', 'Not Approved' => 'Not Approved']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
