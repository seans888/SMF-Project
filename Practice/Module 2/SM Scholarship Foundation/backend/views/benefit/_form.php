<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Scholars;
use common\models\Schools;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model common\models\Benefit */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="benefit-form">

    <?php $form = ActiveForm::begin(); ?>
    
    <?= $form->field($model, 'benefit_scholar_id')->dropDownList(
    		ArrayHelper::map(Scholars::find()->all(), 'scholar_id','scholar_id','scholar_lastName'),
    		['prompt'=>'Select Scholar ID']
    		) ?>
    		
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
