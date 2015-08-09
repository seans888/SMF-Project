<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\jui\Tabs;
use common\models\User;
use common\models\Scholars;
use common\models\Schools;
use common\models\Grades;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\GradeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->params['breadcrumbs'][] = $this->title;
?>


<div class="grades-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
	<?php 
	echo'<table width=100% border=2><tr><td><h3><center>Grade Subject</center></h3></td><td><h3><center>Grade Value</center></h3></td><td><h3><center>No.of Units</center></h3></td><td><h3><center>School Year</center></h3></td><td><h3><center>Term</center></h3></td></tr>';
$users = User::find()->all();
$grades = Grades::find()->all();
$scholars = Scholars::find()->all();
$gpa1=0;$gpa2=0;
$username=Yii::$app->user->identity->username;

		foreach($users as $ctr){
		if($ctr->username==$username){
		foreach($scholars as $scholarctr){
				foreach($grades as $grade){
				if($scholarctr->scholar_user_id==$ctr->id && $grade->grade_scholar_id==$scholarctr->scholar_user_id){
					if ($grade->grade_status == 'PRESENT'){
						$present=$grade;
						echo'<tr><td><h4><center>'.$present->grade_subject.'<br></center></h4></td><td><h4><center>'.$present->grade_value.'</center></h4></td><td><h4><center>'.$present->grade_units.'</center></h4></td><td><h4><center>'.$present->grade_schoolYear.'</center></h4></td><td><h4><center>'.$present->grade_Term.'</center></h4></td></tr>';
						$gpa1 += $present->grade_value * $present->grade_units ;
						$gpa2 += $present->grade_units;
						
						
					
					}
					
				}
				}
				}
			}
		}
		echo '<tr><td><h3>GPA/GWA = <font color=red>'.$gpa1/$gpa2.'</font></h3></td></tr></table>';
?>
	


</div>
