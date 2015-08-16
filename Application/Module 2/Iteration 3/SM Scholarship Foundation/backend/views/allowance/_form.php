<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Allowance */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="allowance-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'allowance_area')->dropDownList([ 'NCR' => 'NCR', 'Provincial' => 'Provincial', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'allowance_amount')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
