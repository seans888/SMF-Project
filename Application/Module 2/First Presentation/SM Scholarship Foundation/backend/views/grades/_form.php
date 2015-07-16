<?php
use yii\helpers\ArrayHelper;
use common\models\Scholars;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Grades */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="grades-form">

    <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>

    <?= $form->field($model, 'grade_schoolYear')->textInput() ?>

    <?= $form->field($model, 'grade_Term')->textInput() ?>

    <?= $form->field($model, 'grade_scholar_id')->dropDownList(
    		ArrayHelper::map(Scholars::find()->all(),'scholar_id','scholar_id','scholar_lastName'),
    		['prompt'=>'Select Scholar ID']
    		) ?>

    <?= $form->field($model, 'grade_value')->textInput(['maxlength' => true]) ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
