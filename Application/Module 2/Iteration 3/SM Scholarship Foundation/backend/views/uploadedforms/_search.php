<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\UploadedformsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="uploadedforms-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'scholar_lastName') ?>

    <?= $form->field($model, 'scholar_firstName') ?>

    <?= $form->field($model, 'scholar_middleName') ?>

    <?= $form->field($model, 'uploadedForm') ?>

    <?php // echo $form->field($model, 'scholar_id') ?>

    <?php // echo $form->field($model, 'fileName') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
