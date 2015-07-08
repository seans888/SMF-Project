<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Tuitions */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tuitions-form">

    <?php $form = ActiveForm::begin(); ?>
	
	<?= $form->field($model, 'tuition_scholar_id')->textInput() ?>
	

    <?= $form->field($model, 'tuition_full_amount')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
