<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\College */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="college-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'school_plan_to_enroll_in')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'course_plan_to_take1')->dropDownList([ 'BS in Computer Science' => 'BS in Computer Science', 'BS in Information Technology' => 'BS in Information Technology', 'BS in Information Management' => 'BS in Information Management', 'BS in Electronics and Communications Engineering' => 'BS in Electronics and Communications Engineering', 'BS in Computer Engineering' => 'BS in Computer Engineering', 'BS in Civil Engineering' => 'BS in Civil Engineering', 'BS in Electrical Engineering' => 'BS in Electrical Engineering', 'BS in Mechanical Engineering' => 'BS in Mechanical Engineering', 'BS in Elementary Education' => 'BS in Elementary Education', 'BS in Secondary Education major in Biology' => 'BS in Secondary Education major in Biology', 'BS in Secondary Education major in Chemistry' => 'BS in Secondary Education major in Chemistry', 'BS in Secondary Education major in Physics' => 'BS in Secondary Education major in Physics', 'BS in Secondary Education major in Mathematics' => 'BS in Secondary Education major in Mathematics', 'BS in Secondary Education major in English' => 'BS in Secondary Education major in English', 'BS in Accountancy' => 'BS in Accountancy', 'BS in Pharmacy' => 'BS in Pharmacy', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'course_plan_to_take2')->dropDownList([ 'BS in Computer Science' => 'BS in Computer Science', 'BS in Information Technology' => 'BS in Information Technology', 'BS in Information Management' => 'BS in Information Management', 'BS in Electronics and Communications Engineering' => 'BS in Electronics and Communications Engineering', 'BS in Computer Engineering' => 'BS in Computer Engineering', 'BS in Civil Engineering' => 'BS in Civil Engineering', 'BS in Electrical Engineering' => 'BS in Electrical Engineering', 'BS in Mechanical Engineering' => 'BS in Mechanical Engineering', 'BS in Elementary Education' => 'BS in Elementary Education', 'BS in Secondary Education major in Biology' => 'BS in Secondary Education major in Biology', 'BS in Secondary Education major in Chemistry' => 'BS in Secondary Education major in Chemistry', 'BS in Secondary Education major in Physics' => 'BS in Secondary Education major in Physics', 'BS in Secondary Education major in Mathematics' => 'BS in Secondary Education major in Mathematics', 'BS in Secondary Education major in English' => 'BS in Secondary Education major in English', 'BS in Accountancy' => 'BS in Accountancy', 'BS in Pharmacy' => 'BS in Pharmacy', ], ['prompt' => '']) ?>

	<hr/><h5>Click <font color = "red"> Submit </font> before proceeding to Family Background.</h5><hr>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Submit' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        <?= Html::button('Next (Family Background)', array('onclick' => 'js:document.location.href="index.php?r=family/create"', 'class' => 'btn btn-info')); ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
