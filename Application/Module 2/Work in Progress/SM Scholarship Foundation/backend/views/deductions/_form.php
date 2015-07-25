<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Deductions */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="deductions-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'deduction_date')->textInput() ?>

    <?= $form->field($model, 'deduction_amount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'deduction_remark')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'deduction_scholar_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
