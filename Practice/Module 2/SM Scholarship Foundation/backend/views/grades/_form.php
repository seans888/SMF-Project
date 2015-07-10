<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Scholars;

/* @var $this yii\web\View */
/* @var $model common\models\Grades */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="grades-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'grade_schoolYear')->textInput() ?>

    <?= $form->field($model, 'grade_Term')->textInput() ?>

    <?= $form->field($model, 'grade_scholar_id')->dropDownList(
		ArrayHelper::map(Scholars::find()->all(),'scholar_id','scholar_id'),
		['prompt'=>'Select Scholar ID']
	) ?>
	
    <?= $form->field($model, 'grade_scholar_lastName')->dropDownList(
		ArrayHelper::map(Scholars::find()->all(),'scholar_lastName','scholar_lastName'),
		['prompt'=>'Select Scholar Last Name']
	) ?>
	
    <?= $form->field($model, 'grade_scholar_firstName')->dropDownList(
		ArrayHelper::map(Scholars::find()->all(),'scholar_firstName','scholar_firstName'),
		['prompt'=>'Select Scholar First Name']
	) ?>
	
    <?= $form->field($model, 'grade_scholar_middleName')->dropDownList(
		ArrayHelper::map(Scholars::find()->all(),'scholar_middleName','scholar_middleName'),
		['prompt'=>'Select Scholar Middle Name']
	) ?>
	
    <?= $form->field($model, 'grade_value')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
