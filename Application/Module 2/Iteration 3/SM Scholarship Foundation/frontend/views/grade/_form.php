<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Scholars;
use yii\helpers\ArrayHelper;

use dosamigos\fileinput\FileInput;

/* @var $this yii\web\View */
/* @var $model frontend\models\Grades */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="grades-form">

   <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>
	
    <?= $form->field($model2, 'grade_raw_grade')->textInput() ?>

    

  
	
	
	  

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
