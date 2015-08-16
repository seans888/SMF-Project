<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\jui\Tabs;
use common\models\User;
use common\models\Scholars;
use common\models\Schools;
use common\models\Deductions;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\GradeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->params['breadcrumbs'][] = $this->title;
?>


<div class="grades-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
	<?php 
	echo'<table width=100% border=2><tr><td><h3><center>Date</center></h3></td><td><h3><center>Deduction Amount</center></h3></td><td><h3><center>Remark</center></h3></td></tr>';
$users = User::find()->all();
$deductions = Deductions::find()->all();
$scholars = Scholars::find()->all();

$username=Yii::$app->user->identity->username;

		foreach($users as $ctr){
		if($ctr->username==$username){
		foreach($scholars as $scholarctr){
				foreach($deductions as $deduction){
				if($scholarctr->scholar_user_id==$ctr->id && $deduction->deduction_scholar_id==$scholarctr->scholar_user_id){
					
						
						echo'<tr><td><h4><center>'.$deduction->deduction_date.'<br></center></h4></td><td><h4><center>'.$deduction->deduction_amount.'</center></h4></td><td><h4><center>'.$deduction->deduction_remark.'</center></h4></td></tr>';
					
						
						
					
					
					
				}
				
				}
				}
			}
		}
		echo '</table>';
?>
	


</div>
