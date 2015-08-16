<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\RefundsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="refunds-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'refund_id') ?>

    <?= $form->field($model, 'refund_amount') ?>

    <?= $form->field($model, 'refund_smShare') ?>

    <?= $form->field($model, 'refund_scholarShare') ?>

    <?= $form->field($model, 'refund_scholar_id') ?>

    <?php // echo $form->field($model, 'refund_tuitionfee_id') ?>

    <?php // echo $form->field($model, 'refund_description') ?>

    <?php // echo $form->field($model, 'refund_date') ?>

    <?php // echo $form->field($model, 'uploaded_by') ?>

    <?php // echo $form->field($model, 'checked_by') ?>

    <?php // echo $form->field($model, 'checked_remark') ?>

    <?php // echo $form->field($model, 'updated_by') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
