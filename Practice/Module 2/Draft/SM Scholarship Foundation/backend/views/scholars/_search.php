<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ScholarsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="scholars-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'scholar_id') ?>

    <?= $form->field($model, 'scholar_first_name') ?>

    <?= $form->field($model, 'scholar_last_name') ?>

    <?= $form->field($model, 'scholar_middle_initial') ?>

    <?= $form->field($model, 'scholar_school_id') ?>

    <?php // echo $form->field($model, 'scholar_course') ?>

    <?php // echo $form->field($model, 'scholar_email') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
