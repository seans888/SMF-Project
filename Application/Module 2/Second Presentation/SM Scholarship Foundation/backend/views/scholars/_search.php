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

    <?= $form->field($model, 'scholar_firstName') ?>

    <?= $form->field($model, 'scholar_lastName') ?>

    <?= $form->field($model, 'scholar_middleName') ?>

    <?= $form->field($model, 'scholar_gender') ?>

    <?php // echo $form->field($model, 'scholar_address') ?>

    <?php // echo $form->field($model, 'scholar_school_id') ?>

    <?php // echo $form->field($model, 'scholar_course') ?>

    <?php // echo $form->field($model, 'scholar_yearLevel') ?>

    <?php // echo $form->field($model, 'scholar_email') ?>

    <?php // echo $form->field($model, 'scholar_contactNum') ?>

    <?php // echo $form->field($model, 'scholar_cashCardNum') ?>

    <?php // echo $form->field($model, 'scholar_school_area') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
