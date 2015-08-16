<?php
use dosamigos\datepicker\DatePicker;
use common\models\Scholars;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
/* @var $this yii\web\View */
/* @var $model common\models\Refunds */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="uploaded-form">

    <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>
	
	<?= $form->field($model, 'uploaded_scholar_id')->textInput(['readonly'=>true]) ?>
	
    <?= $form->field($model, 'fileName')->textInput(['readonly'=>true]) ?>

	<?php    
		echo 'Overwrite Previous File?<br>'.$model->uploadedForm.'&nbsp;&nbsp;&nbsp;<img src="'.\Yii::$app->request->BaseUrl.'/'.$model->uploadedForm.'" width="90px">&nbsp;&nbsp;&nbsp;';
	?>
	
	<?= Html::a('Download', ['download','id' => $model->id], ['class' => 'btn btn-alert']) ?>
	
    <?= $form->field($model, 'checked_by')->checkBox(['label'=> 'Checked By '.Yii::$app->user->identity->username])?>
	
	<?= $form->field($model, 'checked_remark')->textInput()?>
	
    <div class="form-group">
        <?= Html::submitButton('Update', ['check', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
