<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ApplicantformSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="applicantform-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'last_name') ?>

    <?= $form->field($model, 'first_name') ?>

    <?= $form->field($model, 'middle_name') ?>

    <?= $form->field($model, 'city_address') ?>

    <?php // echo $form->field($model, 'telephone_no') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'cellphone_no') ?>

    <?php // echo $form->field($model, 'birthday') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'sex') ?>

    <?php // echo $form->field($model, 'birth_place') ?>

    <?php // echo $form->field($model, 'nationality') ?>

    <?php // echo $form->field($model, 'height') ?>

    <?php // echo $form->field($model, 'weight') ?>

    <?php // echo $form->field($model, 'religion') ?>

    <?php // echo $form->field($model, 'name_of_public_high_school_graduating_from') ?>

    <?php // echo $form->field($model, 'section') ?>

    <?php // echo $form->field($model, 'complete_address_of_school') ?>

    <?php // echo $form->field($model, 'name_of_principal') ?>

    <?php // echo $form->field($model, 'telephone_numbers') ?>

    <?php // echo $form->field($model, 'org_1') ?>

    <?php // echo $form->field($model, 'position_held1') ?>

    <?php // echo $form->field($model, 'school_you_want_to_enroll_in') ?>

    <?php // echo $form->field($model, 'course_you_plan_to_take') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
