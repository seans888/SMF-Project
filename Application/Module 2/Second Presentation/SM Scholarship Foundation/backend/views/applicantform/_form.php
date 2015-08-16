<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Applicantform */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="applicantform-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'middle_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'city_address')->textInput() ?>

    <?= $form->field($model, 'telephone_no')->textInput() ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cellphone_no')->textInput() ?>

    <?= $form->field($model, 'birthday')->textInput() ?>

    <?= $form->field($model, 'status')->dropDownList([ 'Single' => 'Single', 'Married' => 'Married', 'Widowed' => 'Widowed', 'Separated' => 'Separated', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'sex')->dropDownList([ 'Male' => 'Male', 'Female' => 'Female', '' => '', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'birth_place')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nationality')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'height')->textInput() ?>

    <?= $form->field($model, 'weight')->textInput() ?>

    <?= $form->field($model, 'religion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name_of_public_high_school_graduating_from')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'section')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'complete_address_of_school')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name_of_principal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telephone_numbers')->textInput() ?>

    <?= $form->field($model, 'org_1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'position_held1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'school_you_want_to_enroll_in')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'course_you_plan_to_take')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
