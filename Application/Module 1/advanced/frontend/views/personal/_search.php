<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\PersonalSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="personal-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'last_name') ?>

    <?= $form->field($model, 'first_name') ?>

    <?= $form->field($model, 'middle_name') ?>

    <?= $form->field($model, 'city_address') ?>

    <?= $form->field($model, 'cellphone_no') ?>

    <?= $form->field($model, 'date_of_birth') ?>

    <?= $form->field($model, 'age') ?>

    <?= $form->field($model, 'status') ?>

    <?= $form->field($model, 'sex') ?>

    <?= $form->field($model, 'place_of_birth') ?>

    <?= $form->field($model, 'nationality') ?>

    <?= $form->field($model, 'height') ?>

    <?= $form->field($model, 'weight') ?>

    <?= $form->field($model, 'religion') ?>

    <?= $form->field($model, 'personal_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
