<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ParttimejobsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="parttimejobs-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'job_scholar_id') ?>

    <?= $form->field($model, 'job_location') ?>

    <?= $form->field($model, 'job_startDate') ?>

    <?= $form->field($model, 'job_endDate') ?>

    <?php // echo $form->field($model, 'job_description') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
