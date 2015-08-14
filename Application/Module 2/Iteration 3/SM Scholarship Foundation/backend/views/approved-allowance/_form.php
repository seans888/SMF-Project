<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ApprovedAllowance */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="approved-allowance-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'allowance_amount')->textInput(['readonly'=>true]) ?>

    <?= $form->field($model, 'allowance_remark')->textInput(['readonly'=>true]) ?>

    <?= $form->field($model, 'allowance_scholar_id')->textInput(['readonly'=>true]) ?>

    <?= $form->field($model, 'allowance_payStatus')->textInput(['readonly'=>true]) ?>

    <?= $form->field($model, 'allowance_paidDate')->textInput(['readonly'=>true]) ?>

    <?= $form->field($model, 'approval_status')->dropDownList([ 'Approved' => 'Approved', 'Not Approved' => 'Not Approved']) ?>

    <?= $form->field($model, 'approved_remark')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
