<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Email */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="emails-form">
<div class="container">
        

								<?php $form = ActiveForm::begin(); ?>
								<p style="color:red"><i>NOTICE:If the computed grade/s is below 85% or below 70% (5.0 or 0.0), Please answer the question below to be directly submitted to SM Foundation</i>.</p><br>Please explain the reason for attaining low or fail grade/s. Explain the effect of the deficiency. Will this affect the length of time you graduate?. Explain how will you correct the deficiency.<br><br><?= $form->field($model2, 'email_scholar_id')->textarea(['rows' => 6]) ?><?= $form->field($model2, 'subject')->textarea(['rows' => 6]) ?><?= $form->field($model2, 'content')->textarea(['rows' => 6]) ?>
			<?= Html::submitButton($model2->isNewRecord ? 'Send Email' : 'Update', ['class' => $model2->isNewRecord ? 'btn btn-primary' : 'btn btn-primary']) ?><br><br><h5><i>The explanation will be reviewed by the SM Foundation. <br>We will inform you for any updates regarding the case. Thank You! </i></h5>
					

							<?php ActiveForm::end(); ?>

</div>

