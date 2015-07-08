<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Scholars;

/* @var $this yii\web\View */
/* @var $model common\models\Grades */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="grades-form">

    <?php $form = ActiveForm::begin(); ?>
	
	<?= $form->field($model, 'grade_scholar_id')->dropDownList(
		ArrayHelper::map(Scholars::find()->all(),'scholar_id','scholar_id'),
		['prompt'=>'Select Scholar']
	) ?>
	
    <?= $form->field($model, 'grade_school_year')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'grade_school_term')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'grade_value')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
