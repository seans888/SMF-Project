<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\WithholdingSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="withholding-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'withholding_id') ?>

    <?= $form->field($model, 'scholar_scholar_id') ?>

    <?= $form->field($model, 'scholar_school_school_id') ?>

    <?= $form->field($model, 'scholar_allowance_allowance_area') ?>

    <?= $form->field($model, 'withholding_start_date') ?>

    <?php // echo $form->field($model, 'withholding_end_date') ?>

    <?php // echo $form->field($model, 'withholding_remark') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
