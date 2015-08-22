<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Optionalwork */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="optionalwork-form">

    <?php $form = ActiveForm::begin(); ?>

   

    <?= $form->field($model, 'optionalwork_location')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'optionalwork_start_date')->textInput() ?>

    <?= $form->field($model, 'optionalwork_end_date')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
