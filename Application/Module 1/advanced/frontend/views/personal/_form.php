<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker

/* @var $this yii\web\View */
/* @var $model frontend\models\Personal */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="personal-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'middle_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'city_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cellphone_no')->textInput() ?>

    <?= $form->field($model, 'date_of_birth')->widget(
                DatePicker::className(), [
                // inline too, not bad
                 'inline' => false, 
                 // modify template for custom rendering
          //      'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
                'clientOptions' => [
                    'autoclose' => true,
                    'format' => 'yyyy-mm-dd'
                ]

    ]); ?>

    <?= $form->field($model, 'age')->textInput() ?>

    <?= $form->field($model, 'status')->dropDownList([ 'Single' => 'Single', 'Married' => 'Married', 'Separated' => 'Separated', 'Widowed' => 'Widowed', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'sex')->dropDownList([ 'Male' => 'Male', 'Female' => 'Female', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'place_of_birth')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nationality')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'height')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'weight')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'religion')->textInput(['maxlength' => true]) ?>

    <hr/><h5>Click <font color = "red"> Submit </font> before proceeding to Academic Background.</h5><hr>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Submit' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        <?= Html::button('Next (Academic Background)', array('onclick' => 'js:document.location.href="index.php?r=academic/create"', 'class' => 'btn btn-info')); ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
