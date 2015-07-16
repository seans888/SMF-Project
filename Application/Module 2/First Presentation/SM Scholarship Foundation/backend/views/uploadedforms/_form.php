<?php
use common\models\Scholars;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\fileinput\FileInput;
use kartik\select2\Select2;
use kartik\typeahead\TypeaheadBasic;
use kartik\typeahead\Typeahead;
/* @var $this yii\web\View */
/* @var $model common\models\Uploadedforms */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="uploadedforms-form">

    <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>
	
	<?= $form->field($model,'scholar_id')->widget(Select2::classname(),
		[
			'data'=>ArrayHelper::map(Scholars::find()->all(),'scholar_id','scholar_id','scholar_lastName'),
			'language'=>'en',
			'options'=>['placeholder'=>'Select a state...'],
			'pluginOptions'=>['allowClear'=>true],
		]) ?>
	
	<?= $form->field($model,'scholar_lastName')->widget(Typeahead::classname(),
		[
			'dataset'=>[
				[
					'local'=>$data,
					'limit'=>10
				]
			],
			'pluginOptions' => ['highlight'=>true],
			'options'=>['placeholder'=>'Filter as you type...'],
		]
	) ?>
	
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
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
