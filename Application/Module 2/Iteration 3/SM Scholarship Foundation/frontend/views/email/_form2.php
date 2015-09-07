<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\User;
use common\models\Scholar;
use common\models\Email;

/* @var $this yii\web\View */
/* @var $model common\models\Email */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="emails-form">
<div class="container">
<center><font color=red><?= Yii::$app->session->getFlash('error'); ?></font></center>
      

								<?php $form = ActiveForm::begin(); ?>
								<p style="color:blue"><i>NOTICE:If the computed grade/s is below 85% or below 70% (5.0 or 0.0), Please answer the question below to be directly submitted to SM Foundation</i>.</p><br>Please explain the reason for attaining low or fail grade/s. Explain the effect of the deficiency. Will this affect the length of time you graduate?. Explain how will you correct the deficiency.<br><br><?= $form->field($model2, 'content')->textarea(['rows' => 6]) ?>
			<?= Html::submitButton($model2->isNewRecord ? 'Send Email' : 'Update', ['class' => $model2->isNewRecord ? 'btn btn-primary' : 'btn btn-primary']) ?><br><br><h5><i>The explanation will be reviewed by the SM Foundation. <br>We will inform you for any updates regarding the case. Thank You! </i></h5>
					

							<?php ActiveForm::end(); ?>
							  <?php
		$username=Yii::$app->user->identity->username;
		$users = User::find()->all();
		$scholars = Scholar::find()->all();
        $model2 = new Email();
		foreach($users as $user){
			foreach($scholars as $scholar){
				if($user->username==$username&&$user->id==$scholar->scholar_user_id){
					
					$model2->email_scholar_id=$scholar->scholar_id;
					$model2->subject="Low/Fail Grade";
					if ($model2->load(Yii::$app->request->post())) {
 								$to = "root@localhost.com"; 
								$subject = "Low/Fail Grade"; 
								$body = $model2->content."\nfrom:".$scholar->scholar_contact_email .PHP_EOL;			
								$headers = "from: root@localhost";  
								if (mail($to, $subject, $body, $headers)) 
								{
								\Yii::$app->getSession()->setFlash('error', 'The message is delivered');
					
								} else { 
								\Yii::$app->getSession()->setFlash('error', 'Message failed');	
								}								
							
					
					} 
					
			
				}
			}
		}
		
		?>

</div>

