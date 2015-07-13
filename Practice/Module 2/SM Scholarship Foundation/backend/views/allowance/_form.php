<?php
use dosamigos\datepicker\DatePicker;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Scholars;
use common\models\Schools;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model common\models\Allowance */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="allowance-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'allowance_amount')->textInput() ?>

    <?= $form->field($model, 'allowance_remark')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'allowance_scholar_id')->dropDownList(
    		ArrayHelper::map(Scholars::find()->all(),'scholar_id','scholar_id','scholar_lastName'),
    		['prompt'=>'Select Scholar ID']
    		) ?>

    <?= $form->field($model, 'allowance_school_id')->dropDownList(
    		ArrayHelper::map(Schools::find()->all(),'school_id','school_name'),
    		['prompt'=>'Select School']
    		) ?>

    <?= $form->field($model, 'allowance_payStatus')->dropDownList([ 'paid' => 'Paid', 'not paid' => 'Not paid', ], ['prompt' => 'Select Payment Status']) ?>

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
