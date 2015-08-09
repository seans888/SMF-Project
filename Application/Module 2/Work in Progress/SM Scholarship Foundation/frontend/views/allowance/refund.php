<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\jui\Tabs;
use common\models\User;
use common\models\Scholars;
use common\models\Schools;
use common\models\Refunds;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\GradeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->params['breadcrumbs'][] = $this->title;
?>


<div class="grades-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
	<?php 
	echo'<table width=100% border=2><tr><td><h3><center>Refund Amount</center></h3></td><td><h3><center>SM Share</center></h3></td><td><h3><center>Scholar Share</center></h3></td><td><h3><center>Description</center></h3></td><td><h3><center>Refund Date</center></h3></td></tr>';
$users = User::find()->all();
$refunds = Refunds::find()->all();
$scholars = Scholars::find()->all();

$username=Yii::$app->user->identity->username;

		foreach($users as $ctr){
		if($ctr->username==$username){
		foreach($scholars as $scholarctr){
				foreach($refunds as $refund){
				if($scholarctr->scholar_user_id==$ctr->id && $refund->refund_scholar_id==$scholarctr->scholar_user_id){
					
						
						echo'<tr><td><h4><center>'.$refund->refund_amount.'<br></center></h4></td><td><h4><center>'.$refund->refund_smShare.'</center></h4></td><td><h4><center>'.$refund->refund_scholarShare.'</center></h4></td><td><h4><center>'.$refund->refund_description.'</center></h4></td><td><h4><center>'.$refund->refund_date.'</center></h4></td></tr>';
					
						
						
					
					
					
				}
				
				}
				}
			}
		}
		echo '</table>';
?>
	


</div>