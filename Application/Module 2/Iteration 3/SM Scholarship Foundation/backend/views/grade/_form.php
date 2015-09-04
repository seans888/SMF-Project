<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use common\models\Subject;
use yii\helpers\ArrayHelper;
use common\models\Scholar;
/* @var $this yii\web\View */
/* @var $model common\models\Grade */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="grade-form">

    <?php $form = ActiveForm::begin(); ?>
	
	<?= $form->field($model,'subject_subject_id')->widget(Select2::classname(),
		[
			'data'=>ArrayHelper::map(Subject::find()->all(),'subject_id','subject_name'),
			'language'=>'en',
			'options'=>['placeholder'=>'Select Scholar ID'],
			'pluginOptions'=>['allowClear'=>true],
		]) ?>

	<?= $form->field($model,'subject_scholar_scholar_id')->widget(Select2::classname(),
		[
			'data'=>ArrayHelper::map(Scholar::find()->all(),'scholar_id','scholar_last_name','scholar_id'),
			'language'=>'en',
			'options'=>['placeholder'=>'Select Scholar ID'],
			'pluginOptions'=>['allowClear'=>true],
		]) ?>

    <?= $form->field($model, 'grade_school_year_start')->textInput() ?>

    <?= $form->field($model, 'grade_school_year_end')->textInput() ?>

    <?= $form->field($model, 'grade_raw_grade')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'grade_approval_status')->dropDownList([ 'Not Approved' => 'Not Approved', 'Approved' => 'Approved', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'grade_approved_by')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
