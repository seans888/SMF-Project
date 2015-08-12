<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\jui\Tabs;
use common\models\User;
use common\models\Scholars;
use common\models\Schools;


/* @var $this yii\web\View */
/* @var $searchModel frontend\models\GradeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->params['breadcrumbs'][] = $this->title;
?>


<div class="grades-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
	<?php 
$username=Yii::$app->user->identity->username;
$users = User::find()->all();
$scholars = Scholars::find()->all();
$schools = Schools::find()->all();
foreach($users as $ctr){
	if($ctr->username==$username){
		foreach($scholars as $scholarctr){
			foreach($schools as $school){
				if($scholarctr->scholar_user_id==$ctr->id && $scholarctr->scholar_school_id==$school->School_id){
					echo '<center><img src="img/school.png" height=100px width=100px></img><h2><font color=#005ab2><strong>'.$school->school_name.'</strong></font></h2><h4>'.$school->school_address.'</h4></center><table border=2 width=100%><tr><td></td></tr></table><br><table border=1 width=100%><tr><td> <b><font color=#005ab2>School Area:</font></b><center> '.$school->school_area.'</center></td><td><b><font color=#005ab2>School Email:</font></b><center> '.$school->school_contactEmail.'</center></td><td><b><font color=#005ab2>School Contact Number:</font></b><center> '.$school->school_contactNumber.'</center></td></tr></table>'; 
						
				}
			}
		}
	}
}
?>

</div>
