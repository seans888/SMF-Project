<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\jui\Tabs;
use common\models\User;
use common\models\Scholars;
use common\models\Schools;
use common\models\Tuitionfees;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\GradeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->params['breadcrumbs'][] = $this->title;
?>


<div class="grades-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
	<?php 
	echo'<table width=100% border=2><tr><td><h3><center>Tuition Fee Amount</center></h3></td><td><h3><center>Term No.</center></h3></td><td><h3><center>Date of Enrollment</center></h3></td><td><h3><center>Date of Payment</center></h3></td><td><h3><center>Status</center></h3></td></tr>';
$users = User::find()->all();
$scholars = Scholars::find()->all();
$tuitions = Tuitionfees::find()->all();
$username=Yii::$app->user->identity->username;

		foreach($users as $ctr){
		if($ctr->username==$username){
		foreach($scholars as $scholarctr){
				foreach($tuitions as $tuition){
				if($scholarctr->scholar_user_id==$ctr->id && $tuition->tuitionfee_scholar_id==$scholarctr->scholar_user_id){
						echo'<tr><td><h4><center>'.$tuition->tuitionfee_amount.'<br></center></h4></td><td><h4><center>'.$tuition->tuitionfees_term.'<br></center></h4></td><td><h4><center>'.$tuition->tuitionfee_dateOfEnrollment.'</center></h4></td><td><h4><center>'.$tuition->tuitionfee_dateOfPayment.'</center></h4></td><td><h4><center>'.$tuition->tuitionfee_paidStatus.'</center></h4></td></tr>';
						
						
					
					
					
				}
				
				}
				}
			}
		}
		echo '</table>';
?>
	


</div>
