<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ApprovedUploadedforms */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="approved-uploadedforms-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'uploadedForm')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'uploaded_scholar_id')->textInput() ?>

    <?= $form->field($model, 'fileName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'approval_status')->dropDownList([ 'Not Approved' => 'Not Approved', 'Approved' => 'Approved', '' => '', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'approved_by')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'approved_remark')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
