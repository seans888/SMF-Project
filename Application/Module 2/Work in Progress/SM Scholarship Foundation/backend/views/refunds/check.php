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

<div class="refunds-form">

    <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>
	
	<?= $form->field($model, 'refund_scholar_id')->textInput(['readonly'=>true]) ?>
	
    <?= $form->field($model, 'refund_amount')->textInput(['readonly'=>true]) ?>

    <?= $form->field($model, 'refund_smShare')->textInput(['readonly'=>true])?>

    <?= $form->field($model, 'refund_scholarShare')->textInput(['readonly'=>true])?>

    <?= $form->field($model, 'refund_tuitionfee_id')->textInput(['readonly'=>true]) ?>
	
	<?= $form->field($model, 'refund_description')->textInput(['readonly'=>true])?>
	
	<?= $form->field($model, 'refund_date')->textInput(['readonly'=>true])?>
	
    <?= $form->field($model, 'checked_by')->checkBox(['label'=> 'Checked By '.Yii::$app->user->identity->username])?>
	
	<?= $form->field($model, 'checked_remark')->textInput()?>
	
    <div class="form-group">
        <?= Html::submitButton('Update', ['check', 'id' => $model->refund_id], ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
