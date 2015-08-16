<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Refunds */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="refunds-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'refund_amount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'refund_smShare')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'refund_scholarShare')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'refund_scholar_id')->textInput() ?>

    <?= $form->field($model, 'refund_tuitionfee_id')->textInput() ?>

    <?= $form->field($model, 'refund_description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'refund_date')->textInput() ?>

    <?= $form->field($model, 'uploaded_by')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'checked_by')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'checked_remark')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'updated_by')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
