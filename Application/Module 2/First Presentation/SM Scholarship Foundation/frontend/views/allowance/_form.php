<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Allowance */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="allowance-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'allowance_amount')->textInput() ?>

    <?= $form->field($model, 'allowance_remark')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'allowance_scholar_id')->textInput() ?>

    <?= $form->field($model, 'allowance_school_id')->textInput() ?>

    <?= $form->field($model, 'allowance_payStatus')->dropDownList([ 'paid' => 'Paid', 'not paid' => 'Not paid', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'benefit_allowance_id')->textInput() ?>

    <?= $form->field($model, 'allowance_scholar_lastName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'allowance_scholar_firstName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'allowance_scholar_middleName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'allowance_paidDate')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
