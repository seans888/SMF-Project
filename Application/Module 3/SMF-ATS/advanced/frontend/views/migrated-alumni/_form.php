<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\MigratedAlumni */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="migrated-alumni-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'migalu_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'migalu_lastname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'migalu_firstname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'migalu_midinit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'migalu_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'migalu_gender')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'migalu_school')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'migalu_course')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'migalu_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'migalu_contactno')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'migalu_remarks')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'migalu_area')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'migalu_office_local_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'migalu_year_graduated')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'migalu_status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'migalu_cur_work')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'migalu_prev_work')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'migalu_achievements')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'migalu_company')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'migalu_legends')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
