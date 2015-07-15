<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Scholars;
use common\models\Schools;

/* @var $this yii\web\View */
/* @var $model common\models\Compile */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="compile-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'compile_scholar_id')->dropDownList(
		ArrayHelper::map(Scholars::find()->all(),'scholar_id','scholar_id'),
		['prompt'=>'Select Scholar ID']
	) ?>

    <?= $form->field($model, 'compile_scholar_lastName')->dropDownList(
		ArrayHelper::map(Scholars::find()->all(),'scholar_lastName','scholar_lastName'),
		['prompt'=>'Select Scholar Last Name']
	) ?>

    <?= $form->field($model, 'compile_scholar_firstName')->dropDownList(
		ArrayHelper::map(Scholars::find()->all(),'scholar_firstName','scholar_firstName'),
		['prompt'=>'Select Scholar First Name']
	) ?>
	
    <?= $form->field($model, 'compile_scholar_middleName')->dropDownList(
		ArrayHelper::map(Scholars::find()->all(),'scholar_middleName','scholar_middleName'),
		['prompt'=>'Select Scholar Middle Name']
	) ?>

    <?= $form->field($model, 'compile_school_name')->dropDownList(
		ArrayHelper::map(Schools::find()->all(),'school_name','school_name'),
		['prompt'=>'Select School Name']
	) ?>
	
	    <?= $form->field($model, 'compile_school_area')->dropDownList(
		ArrayHelper::map(Schools::find()->all(),'school_area','school_area'),
		['prompt'=>'Select School Area']
	) ?>

    <?= $form->field($model, 'compile_pendingPaymentToSchool')->dropDownList([ 'Yes' => 'Yes', 'No' => 'No', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'compile_pendingPaymentToStudent')->dropDownList([ 'Yes' => 'Yes', 'No' => 'No', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
