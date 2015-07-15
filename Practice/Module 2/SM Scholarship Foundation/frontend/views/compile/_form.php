<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Compile */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="compile-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'compile_scholar_id')->textInput() ?>

    <?= $form->field($model, 'compile_school_id')->textInput() ?>

    <?= $form->field($model, 'compile_tuitionfee_id')->textInput() ?>

    <?= $form->field($model, 'compile_grade_id')->textInput() ?>

    <?= $form->field($model, 'compile_scholar_firstName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'compile_scholar_lastName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'compile_scholar_middleName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'compile_school_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'compile_school_area')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'compile_pendingPaymentToSchool')->dropDownList([ 'Yes' => 'Yes', 'No' => 'No', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'compile_pendingPaymentToStudent')->dropDownList([ 'Yes' => 'Yes', 'No' => 'No', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
