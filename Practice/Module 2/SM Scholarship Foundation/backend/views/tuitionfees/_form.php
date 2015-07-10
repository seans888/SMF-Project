<?php
use yii\helpers\ArrayHelper;
use common\models\Scholars;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $model common\models\Tuitionfees */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tuitionfees-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tuitionfee_scholar_id')->dropDownList(
		ArrayHelper::map(Scholars::find()->all(),'scholar_id','scholar_id','scholar_lastName'),
		['prompt'=>'Select Scholar ID']
	) ?>
	


    <?= $form->field($model, 'tuitionfee_amount')->textInput() ?>
	
	<?= $form->field($model, 'tuitionfee_dateOfEnrollment')->widget(
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
	
	<?= $form->field($model, 'tuitionfee_dateOfPayment')->widget(
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
	
    <?= $form->field($model, 'tuitionfee_paidStatus')->dropDownList([ 'paid' => 'Paid', 'not paid' => 'Not paid', ], ['prompt' => '']) ?>
	
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
