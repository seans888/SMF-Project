<?php
use dosamigos\datepicker\DatePicker;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Scholars;
use common\models\Schools;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;
/* @var $this yii\web\View */
/* @var $model common\models\Allowance */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="allowance-form">

    <?php $form = ActiveForm::begin(); ?>

	<?= $form->field($model,'allowance_scholar_id')->widget(Select2::classname(),
		[
			'data'=>ArrayHelper::map(Scholars::find()->all(),'scholar_id','scholar_id','scholar_lastName'),
			'language'=>'en',
			'options'=>['placeholder'=>'Select Scholar ID'],
			'pluginOptions'=>['allowClear'=>true],
		]) ?>
	
    <?= $form->field($model, 'allowance_amount')->textInput() ?>

    <?= $form->field($model, 'allowance_remark')->textInput(['maxlength' => true]) ?>

	<?= $form->field($model,'allowance_school_id')->widget(Select2::classname(),
		[
			'data'=>ArrayHelper::map(Schools::find()->all(), 'School_id','school_name'),
			'language'=>'en',
			'options'=>['placeholder'=>'Select School Name'],
			'pluginOptions'=>['allowClear'=>true],
		]) ?>

    <?= $form->field($model, 'allowance_payStatus')->dropDownList([ 'paid' => 'Paid', 'not paid' => 'Not paid', ], ['prompt' => 'Select Payment Status']) ?>
	
	<?= $form->field($model, 'allowance_status')->dropDownList(['PRESENT','PAST'])?>
	
    <?= $form->field($model, 'allowance_paidDate')->widget(
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

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
