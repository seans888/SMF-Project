<?php

use yii\helpers\ArrayHelper;
use common\models\Schools;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Scholars */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="scholars-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'scholar_firstName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'scholar_lastName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'scholar_middleName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'scholar_gender')->dropDownList([ 'Male' => 'Male', 'Female' => 'Female', ], ['prompt' => 'Select Gender']) ?>

    <?= $form->field($model, 'scholar_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'scholar_school_id')->dropDownList(
		ArrayHelper::map(Schools::find()->all(),'school_id','school_name'),['prompt'=>'Select School']
	) ?>

    <?= $form->field($model, 'scholar_course')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'scholar_yearLevel')->textInput() ?>

    <?= $form->field($model, 'scholar_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'scholar_contactNum')->textInput() ?>

    <?= $form->field($model, 'scholar_cashCardNum')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
