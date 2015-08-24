<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\School;
use kartik\select2\Select2;
/* @var $this yii\web\View */
/* @var $model common\models\Scholar */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="scholar-form">

    <?php $form = ActiveForm::begin(); ?>

	<?= $form->field($model,'school_school_id')->widget(Select2::classname(),
		[
			'data'=>ArrayHelper::map(School::find()->all(),'school_id','school_name'),
			'language'=>'en',
			'options'=>['placeholder'=>'Select School Name'],
			'pluginOptions'=>['allowClear'=>true],
		]) ?>

    <?= $form->field($model, 'scholar_first_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'scholar_middle_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'scholar_last_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'scholar_gender')->dropDownList([ 'Male' => 'Male', 'Female' => 'Female', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'scholar_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'scholar_course')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'scholar_graduate_status')->dropDownList([ 'Graduated' => 'Graduated', 'Not Graduated' => 'Not Graduated', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'scholar_year_level')->textInput() ?>

    <?= $form->field($model, 'scholar_contact_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'scholar_contact_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'scholar_vendor_code')->textInput() ?>

    <?= $form->field($model, 'scholar_cash_card_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'scholar_type')->dropDownList([ 'SMFI' => 'SMFI', 'My Scholar A' => 'My Scholar A', 'Kabayan Scholar' => 'Kabayan Scholar', 'My Scholar B' => 'My Scholar B', 'ICA Grant Scholar' => 'ICA Grant Scholar', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'scholar_sponsor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'allowance_allowance_area')->dropDownList([ 'NCR' => 'NCR', 'Provincial' => 'Provincial', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
