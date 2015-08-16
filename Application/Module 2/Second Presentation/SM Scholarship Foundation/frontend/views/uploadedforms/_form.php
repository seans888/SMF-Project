<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\fileinput\FileInput;

/* @var $this yii\web\View */
/* @var $model common\models\Uploadedforms */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="uploadedforms-form" style="margin-top:50px;">

     <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>
	 
	<?= $form->field($model, 'fileName')->dropDownList(['Registration Form'=>'Registration Form','Grades Form'=>'Grades Form'],
			['prompt'=>'Select File Type']) ?>
	
	<?= $form->field($model, 'file')->widget(\dosamigos\fileinput\BootstrapFileInput::className(), [
    'options' => ['multiple' => true],
    'clientOptions' => [
        'previewFileType' => 'text',
        'browseClass' => 'btn btn-success',
        'uploadClass' => 'btn btn-info',
        'removeClass' => 'btn btn-danger',
        'removeIcon' => '<i class="glyphicon glyphicon-trash"></i> '
    ],
	
	])->label('Upload Form')?>
	

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Insert into Record' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
