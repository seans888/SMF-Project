<?php
use yii\helpers\ArrayHelper;
use common\models\Scholars;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use kartik\typeahead\TypeaheadBasic;
use kartik\typeahead\Typeahead;
/* @var $this yii\web\View */
/* @var $model common\models\Grades */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="grades-form">

    <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]);
		$test = ArrayHelper::map(Scholars::findBySql('SELECT * FROM scholars WHERE scholar_id=2')->all(),'scholar_id','scholar_lastName');
		$test2 = ArrayHelper::map(Scholars::findBySql('SELECT * FROM scholars WHERE scholar_id=3')->all(),'scholar_id','scholar_lastName');
		$test3 = array_values($test2)[0].' '.array_values($test)[0];
	?>

	<?= $form->field($model,'grade_scholar_id')->widget(Select2::classname(),
		[
			'data'=>ArrayHelper::map(Scholars::find()->all(),'scholar_id','scholar_id','scholar_lastName'),
			'language'=>'en',
			'options'=>['placeholder'=>'Select Scholar ID'],
			'pluginOptions'=>['allowClear'=>true],
		]) ?>
	
	<?= $form->field($model, 'grade_schoolYear')->textInput() ?>

    <?= $form->field($model, 'grade_Term')->textInput() ?>

	<?= $form->field($model, 'grade_value')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
