<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Schools

/* @var $this yii\web\View */
/* @var $model common\models\Scholars */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="scholars-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'scholar_first_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'scholar_last_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'scholar_middle_initial')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'scholar_school_id')->dropDownList(
		ArrayHelper::map(Schools::find()->all(),'school_id','school_name'),
		['prompt'=>'Select School']
	) ?>

    <?= $form->field($model, 'scholar_course')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'scholar_email')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
