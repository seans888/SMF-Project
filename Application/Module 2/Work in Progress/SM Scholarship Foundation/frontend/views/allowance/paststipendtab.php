<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\jui\Tabs;
use common\models\User;
use common\models\Scholars;
use common\models\Schools;
use common\models\Allowance;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\GradeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->params['breadcrumbs'][] = $this->title;
?>


<div class="grades-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
	<?php 
	echo'<table width=100% border=2><tr><td><h3><center>Allowance Amount</center></h3></td><td><h3><center>Remarks</center></h3></td><td><h3><center>Status</center></h3></td><td><h3><center>Date of Payment</center></h3></td></tr>';
$users = User::find()->all();
$allowances = Allowance::find()->all();
$scholars = Scholars::find()->all();

$username=Yii::$app->user->identity->username;

		foreach($users as $ctr){
		if($ctr->username==$username){
		foreach($scholars as $scholarctr){
				foreach($allowances as $allowance){
				if($scholarctr->scholar_user_id==$ctr->id && $allowance->allowance_scholar_id==$scholarctr->scholar_user_id&&$allowance->allowance_status == 'PAST'){
					
						
						echo'<tr><td><h4><center>'.$allowance->allowance_amount.'<br></center></h4></td><td><h4><center>'.$allowance->allowance_remark.'</center></h4></td><td><h4><center>'.$allowance->allowance_payStatus.'</center></h4></td><td><h4><center>'.$allowance->allowance_paidDate.'</center></h4></td></tr>';
					
				}
				}
				}
			}
		}
		echo '</table>';
?>
	


</div>
