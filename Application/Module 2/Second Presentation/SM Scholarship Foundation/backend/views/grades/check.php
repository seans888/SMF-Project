<?php
use dosamigos\datepicker\DatePicker;
use common\models\Scholars;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
/* @var $this yii\web\View */
/* @var $model common\models\Grades */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="grades-form">

    <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>
	
	<?= $form->field($model, 'grade_id')->textInput(['readonly'=>true])->label('Tuition Fee Amount') ?>
	
    <?= $form->field($model, 'grade_schoolYear')->textInput(['readonly'=>true])->label('Tuition Fee Amount') ?>

    <?= $form->field($model, 'grade_Term')->textInput(['readonly'=>true])?>

    <?= $form->field($model, 'grade_scholar_id')->textInput(['readonly'=>true])?>

    <?= $form->field($model, 'grade_subject')->textInput(['readonly'=>true]) ?>
	
	<?= $form->field($model, 'grade_units')->textInput(['readonly'=>true]) ?>
	
	<?= $form->field($model, 'grade_value')->textInput(['readonly'=>true]) ?>
	
	<?= $form->field($model, 'School_id')->textInput(['readonly'=>true]) ?>
	
    <?= $form->field($model, 'checked_by')->checkBox(['label'=> 'Checked By '.Yii::$app->user->identity->username])?>
	
	<?= $form->field($model, 'checked_remark')->textInput()?>
	
    <div class="form-group">
        <?= Html::submitButton('Update', ['check', 'id' => $model->grade_id], ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
