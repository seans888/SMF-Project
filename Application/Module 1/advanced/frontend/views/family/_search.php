<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\FamilySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="family-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'fam_background_id') ?>

    <?= $form->field($model, 'name_of_father') ?>

    <?= $form->field($model, 'father_occupation') ?>

    <?= $form->field($model, 'father_company_address') ?>

    <?= $form->field($model, 'father_phonenum') ?>

    <?php // echo $form->field($model, 'father_birthdate') ?>

    <?php // echo $form->field($model, 'name_of_mother') ?>

    <?php // echo $form->field($model, 'mother_occupation') ?>

    <?php // echo $form->field($model, 'mother_company_address') ?>

    <?php // echo $form->field($model, 'mother_phonenum') ?>

    <?php // echo $form->field($model, 'mother_birthdate') ?>

    <?php // echo $form->field($model, 'sibling1_name') ?>

    <?php // echo $form->field($model, 'sibling1_age') ?>

    <?php // echo $form->field($model, 'sibling1_school') ?>

    <?php // echo $form->field($model, 'sibling1_grade_or_year') ?>

    <?php // echo $form->field($model, 'sibling1_employed') ?>

    <?php // echo $form->field($model, 'sibling1_married') ?>

    <?php // echo $form->field($model, 'sibling2_name') ?>

    <?php // echo $form->field($model, 'sibling2_age') ?>

    <?php // echo $form->field($model, 'sibling2_school') ?>

    <?php // echo $form->field($model, 'sibling2_grade_or_year') ?>

    <?php // echo $form->field($model, 'sibling2_employed') ?>

    <?php // echo $form->field($model, 'sibling2_married') ?>

    <?php // echo $form->field($model, 'income_per_year') ?>

    <?php // echo $form->field($model, 'income_per_year_in_words') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
