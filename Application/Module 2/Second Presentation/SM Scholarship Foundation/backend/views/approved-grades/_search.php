<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ApprovedGradesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="approved-grades-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'grade_id') ?>

    <?= $form->field($model, 'grade_schoolYear') ?>

    <?= $form->field($model, 'grade_Term') ?>

    <?= $form->field($model, 'grade_scholar_id') ?>

    <?= $form->field($model, 'grade_subject') ?>

    <?php // echo $form->field($model, 'grade_units') ?>

    <?php // echo $form->field($model, 'grade_value') ?>

    <?php // echo $form->field($model, 'equivalence_grade_rule') ?>

    <?php // echo $form->field($model, 'School_id') ?>

    <?php // echo $form->field($model, 'approval_status') ?>

    <?php // echo $form->field($model, 'approved_by') ?>

    <?php // echo $form->field($model, 'approved_remark') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
