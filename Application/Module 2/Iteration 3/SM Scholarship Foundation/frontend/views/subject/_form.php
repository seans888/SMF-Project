<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Grade;
use common\models\Subject;
use common\models\User;
use common\models\Scholar;

/* @var $this yii\web\View */
/* @var $model common\models\Subject */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="subject-form">


<?php $form = ActiveForm::begin(); ?>
	
    <?= $form->field($model, 'subject_term')->textInput() ?>

    <?= $form->field($model, 'subject_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'subject_units')->textInput(['maxlength' => true]) ?>
	 <?php
	 $modelCustomers=Grade::find()->all();
	 foreach($modelCustomers as $modelCustomer){
		 if($modelCustomer->subject_subject_id==$model->subject_id){
		 $test=$form->field($modelCustomer, 'grade_raw_grade')->textInput(['maxlength' => true]) ;
		 
		 }
	 }
	 ?>
	 <?= $test?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
	

    <?php ActiveForm::end(); ?>


    

</div>
