<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Scholars;
use common\models\Schools;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;
/* @var $this yii\web\View */
/* @var $model common\models\Benefit */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="benefit-form">

    <?php $form = ActiveForm::begin(); ?>
    
	<?= $form->field($model,'benefit_scholar_id')->widget(Select2::classname(),
		[
			'data'=>ArrayHelper::map(Scholars::find()->all(),'scholar_id','scholar_id','scholar_lastName'),
			'language'=>'en',
			'options'=>['placeholder'=>'Select Scholar ID'],
			'pluginOptions'=>['allowClear'=>true],
		]) ?>
    		
    <?= $form->field($model, 'benefit_school_id')->dropDownList(
    		ArrayHelper::map(Schools::find()->all(), 'school_id','school_name'),
    		['prompt'=>'Select School']
    		) ?>
    <?= $form->field($model, 'benefit_amount')->textInput() ?>

    <?= $form->field($model, 'benefit_scholarShare')->textInput() ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
