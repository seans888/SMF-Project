<?php
use dosamigos\datepicker\DatePicker;
use common\models\Scholars;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
/* @var $this yii\web\View */
/* @var $model common\models\Tuitionfees */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tuitionfees-form">

    <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>
	
	<?= $form->field($model, 'tuitionfee_scholar_id')->textInput(['readonly'=>true])->label('Tuition Fee Amount') ?>
	
	
	
    <?= $form->field($model, 'tuitionfee_amount')->textInput(['readonly'=>true])->label('Tuition Fee Amount') ?>

    <?= $form->field($model, 'tuitionfee_dateOfEnrollment')->textInput(['readonly'=>true])?>

    <?= $form->field($model, 'tuitionfee_dateOfPayment')->textInput(['readonly'=>true])?>

    <?= $form->field($model, 'tuitionfee_paidStatus')->textInput(['readonly'=>true]) ?>
	
    <?= $form->field($model, 'checked_by')->checkBox(['label'=> 'Checked By '.Yii::$app->user->identity->username])?>
	
	<?= $form->field($model, 'checked_remark')->textInput()?>
	
    <div class="form-group">
        <?= Html::submitButton('Update', ['check', 'id' => $model->tuitionfee_id], ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
