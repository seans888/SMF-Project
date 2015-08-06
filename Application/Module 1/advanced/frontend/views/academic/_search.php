<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\AcademicSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="academic-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Public_high_school_graduating_from') ?>

    <?= $form->field($model, 'complete_school_address') ?>

    <?= $form->field($model, 'principal_fullname') ?>

    <?= $form->field($model, 'section_no') ?>

    <?= $form->field($model, 'organization') ?>

    <?= $form->field($model, 'position_held') ?>

    <?= $form->field($model, 'academic_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
