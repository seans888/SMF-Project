<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Academic */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="academic-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Public_high_school_graduating_from')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'complete_school_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'principal_fullname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'section_no')->textInput() ?>

    <?= $form->field($model, 'organization')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'position_held')->textarea(['rows' => 6]) ?>

    <hr/><h5>Click <font color = "red"> Submit </font> before proceeding to College Plan.</h5><hr>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Submit' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        <?= Html::button('Next (College Plan)', array('onclick' => 'js:document.location.href="index.php?r=college/create"', 'class' => 'btn btn-info')); ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
