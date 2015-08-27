<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Scholar;
use common\models\School;
use dosamigos\datepicker\DatePicker;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;
/* @var $this yii\web\View */
/* @var $model common\models\Deduction */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="deduction-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model,'scholar_scholar_id')->widget(Select2::classname(),
		[
			'data'=>ArrayHelper::map(Scholar::find()->all(),'scholar_id','scholar_id','scholar_last_name'),
			'language'=>'en',
			'options'=>['placeholder'=>'Select Scholar ID'],
			'pluginOptions'=>['allowClear'=>true],
		]) ?>

    <?= $form->field($model,'scholar_school_school_id')->widget(Select2::classname(),
		[
			'data'=>ArrayHelper::map(School::find()->all(),'school_id','school_name'),
			'language'=>'en',
			'options'=>['placeholder'=>'Select School'],
			'pluginOptions'=>['allowClear'=>true],
		]) ?>

    <?= $form->field($model, 'deduction_date')->widget(
			DatePicker::className(), [
				// inline too, not bad
				 'inline' => false, 
				 // modify template for custom rendering
			//	'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
				'clientOptions' => [
					'autoclose' => true,
					'format' => 'yyyy-mm-dd'
				]
			]);?>

    <?= $form->field($model, 'deduction_amount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'deduction_remark')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
