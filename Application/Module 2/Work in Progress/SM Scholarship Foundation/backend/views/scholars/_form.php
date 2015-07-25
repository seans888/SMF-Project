<?php
use common\models\Schools;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;
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

	<?= $form->field($model,'scholar_school_id')->widget(Select2::classname(),
		[
			'data'=>ArrayHelper::map(Schools::find()->all(),'School_id','school_name'),
			'language'=>'en',
			'options'=>['placeholder'=>'Select School Name'],
			'pluginOptions'=>['allowClear'=>true],
		]) ?>

    <?= $form->field($model, 'scholar_course')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'scholar_yearLevel')->textInput() ?>

    <?= $form->field($model, 'scholar_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'scholar_contactNum')->textInput() ?>

    <?= $form->field($model, 'scholar_cashCardNum')->textInput() ?>

    <?= $form->field($model, 'scholar_school_area')->dropDownList([ 'Provincial' => 'Provincial', 'NCR' => 'NCR', ], ['prompt' => 'Select School Area']) ?>
	
	<?= $form->field($model, 'scholar_sponsors')->textInput() ?>
	
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
