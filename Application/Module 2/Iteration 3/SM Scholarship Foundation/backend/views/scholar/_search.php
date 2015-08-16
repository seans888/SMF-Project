<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ScholarSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="scholar-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'scholar_id') ?>

    <?= $form->field($model, 'school_school_id') ?>

    <?= $form->field($model, 'scholar_first_name') ?>

    <?= $form->field($model, 'scholar_middle_name') ?>

    <?= $form->field($model, 'scholar_last_name') ?>

    <?php // echo $form->field($model, 'scholar_gender') ?>

    <?php // echo $form->field($model, 'scholar_address') ?>

    <?php // echo $form->field($model, 'scholar_course') ?>

    <?php // echo $form->field($model, 'scholar_graduate_status') ?>

    <?php // echo $form->field($model, 'scholar_year_level') ?>

    <?php // echo $form->field($model, 'scholar_contact_email') ?>

    <?php // echo $form->field($model, 'scholar_contact_number') ?>

    <?php // echo $form->field($model, 'scholar_allowance_status') ?>

    <?php // echo $form->field($model, 'scholar_cash_card_number') ?>

    <?php // echo $form->field($model, 'scholar_type') ?>

    <?php // echo $form->field($model, 'scholar_sponsor') ?>

    <?php // echo $form->field($model, 'allowance_allowance_area') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
