<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\UploadSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="upload-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'upload_id') ?>

    <?= $form->field($model, 'scholar_scholar_id') ?>

    <?= $form->field($model, 'scholar_school_school_id') ?>

    <?= $form->field($model, 'upload_form') ?>

    <?= $form->field($model, 'upload_file_name') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
