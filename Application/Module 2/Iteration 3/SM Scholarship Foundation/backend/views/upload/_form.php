<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\fileinput\FileInput;
/* @var $this yii\web\View */
/* @var $model common\models\Upload */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="upload-form">

    <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>

    <?= $form->field($model, 'scholar_scholar_id')->textInput() ?>

    <?= $form->field($model, 'scholar_school_school_id')->textInput() ?>

    <?= $form->field($model, 'upload_file_name')->textInput(['maxlength' => true]) ?>
	
	<?php
if ($model->upload_form) {
    echo 'Overwrite Previous File?<br>'.$model->upload_form.'&nbsp;&nbsp;&nbsp;<img src="'.\Yii::$app->request->BaseUrl.'/'.$model->upload_form.'" width="90px">&nbsp;&nbsp;&nbsp;';
    
}

?>
	
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
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
