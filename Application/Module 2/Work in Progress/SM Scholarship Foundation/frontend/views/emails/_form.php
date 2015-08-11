<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Emails */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="emails-form">
<div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
						<img  src="img/portfolio/icon.jpg" style="height:110px;width:110px;" ></img>
                    <h2 class="section-heading" style="color:black;">Contact Us</h2>
                   
				
                </div>
            </div>

								<?php $form = ActiveForm::begin(); ?>
								<table width=48% align=left><tr><td>
								<?= $form->field($model, 'receiver_name')->textInput(['maxlength' => true]) ?>

								<?= $form->field($model, 'receiver_email')->textInput(['maxlength' => true]) ?>

								<?= $form->field($model, 'subject')->textInput(['maxlength' => true]) ?>
								</td></tr><table><table width=48% align=right><tr><td>
								<?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>

								</td></tr></table>
								<center><?= Html::submitButton($model->isNewRecord ? 'Send Email' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-primary' : 'btn btn-primary']) ?></center>
							</div>

							<?php ActiveForm::end(); ?>

</div>
