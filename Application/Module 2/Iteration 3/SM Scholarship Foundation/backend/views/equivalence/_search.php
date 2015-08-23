<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\EquivalenceSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="equivalence-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'equivalence_id') ?>

    <?= $form->field($model, 'school_school_id') ?>

    <?= $form->field($model, 'equivalence_numerical_grade') ?>

    <?= $form->field($model, 'equivalence_letter_grade') ?>

    <?= $form->field($model, 'equivalence_percentile_lower') ?>

    <?php // echo $form->field($model, 'equivalence_percentile_upper') ?>

    <?php // echo $form->field($model, 'equivalence_school_rating') ?>

    <?php // echo $form->field($model, 'equivalence_foundation_rating') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
