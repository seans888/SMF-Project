<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Equivalence */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="equivalence-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'school_school_id')->textInput() ?>

    <?= $form->field($model, 'equivalence_numerical_grade')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'equivalence_letter_grade')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'equivalence_percentile_lower')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'equivalence_percentile_upper')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'equivalence_school_rating')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'equivalence_foundation_rating')->dropDownList([ 'PASS' => 'PASS', 'FAIL' => 'FAIL', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
