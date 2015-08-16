<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Incentive */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="incentive-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'incentive_id')->textInput() ?>

    <?= $form->field($model, 'scholar_scholar_id')->textInput() ?>

    <?= $form->field($model, 'scholar_school_school_id')->textInput() ?>

    <?= $form->field($model, 'scholar_allowance_allowance_area')->dropDownList([ 'NCR' => 'NCR', 'Provincial' => 'Provincial', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'incentive_amount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'incentive_remark')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'incentive_date')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
