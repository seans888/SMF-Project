<?php
use dosamigos\datepicker\DatePicker;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\School;
use common\models\Scholar;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;
/* @var $this yii\web\View */
/* @var $model common\models\Optionalwork */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="optionalwork-form">

    <?php $form = ActiveForm::begin(); ?>

	<?= $form->field($model,'scholar_scholar_id')->widget(Select2::classname(),
	[
		'data'=>ArrayHelper::map(Scholar::find()->all(),'scholar_id','scholar_id','scholar_last_name'),
		'language'=>'en',
		'options'=>['placeholder'=>'Select Scholar ID'],
		'pluginOptions'=>['allowClear'=>true],
	]) ?>

    <?= $form->field($model, 'optionalwork_location')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'optionalwork_start_date')->widget(
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

    <?= $form->field($model, 'optionalwork_end_date')->widget(
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
	
	<?= $form->field($model, 'optional_work_company_name')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
