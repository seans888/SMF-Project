<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Employee */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="employee-form">

    <?php $form = ActiveForm::begin(); ?>

    <table>
	<td style="padding-right:50px;"> 		
    <?= $form->field($model, 'emp_firstname')->textInput(['maxlength' => true]) ?>
	</td> <td style="padding-right:100px;"> 
    <?= $form->field($model, 'emp_midname')->textInput(['maxlength' => true]) ?>
	</td> <td style="padding-right:100px;"> 
    <?= $form->field($model, 'emp_lastname')->textInput(['maxlength' => true]) ?>
    </tr> <td style="padding-right:100px;"> 
    <?= $form->field($model, 'emp_position')->textInput(['maxlength' => true]) ?>
	</tr> <td style="padding-right:100px;"> 
    <?= $form->field($model, 'emp_department')->textInput(['maxlength' => true]) ?>
	</tr> <td style="padding-right:100px;"> 
    <?= $form->field($model, 'user_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
	</table>

    <?php ActiveForm::end(); ?>

</div>
