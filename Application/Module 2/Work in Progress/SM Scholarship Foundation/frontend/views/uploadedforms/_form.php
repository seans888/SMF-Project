<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Uploadedforms */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="uploadedforms-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'scholar_lastName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'scholar_firstName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'scholar_middleName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'uploadedForm')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
