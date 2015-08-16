<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Withholding */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="withholding-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'withholding_id')->textInput() ?>

    <?= $form->field($model, 'scholar_scholar_id')->textInput() ?>

    <?= $form->field($model, 'scholar_school_school_id')->textInput() ?>

    <?= $form->field($model, 'scholar_allowance_allowance_area')->dropDownList([ 'NCR' => 'NCR', 'Provincial' => 'Provincial', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'withholding_start_date')->textInput() ?>

    <?= $form->field($model, 'withholding_end_date')->textInput() ?>

    <?= $form->field($model, 'withholding_remark')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
