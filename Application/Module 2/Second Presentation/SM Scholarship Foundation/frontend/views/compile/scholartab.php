<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\jui\Tabs;
use common\models\User;
use common\models\Scholars;



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

foreach($users as $ctr){
	if($ctr->username==$username){
		foreach($scholars as $scholarctr){
		
				if($scholarctr->scholar_user_id==$ctr->id){
					echo '<center><img src="img/student.png" height=100px width=100px></img><h2><font color=#005ab2><strong>'.$scholarctr->scholar_lastName.', '.$scholarctr->scholar_firstName.' '.$scholarctr->scholar_middleName.'</strong></font></h2><h3>'.$scholarctr->scholar_address.'</h3><h4>'.$scholarctr->scholar_email.' / '.$scholarctr->scholar_contactNum.'</center><table border=2 width=100%><tr><td></td></tr></table><br><table border=1 width=100%><tr><td> <b><font color=#005ab2> Gender:</font></b><center> '.$scholarctr->scholar_gender.'</center></td><td><b><font color=#005ab2>Course:</font></b><center> '.$scholarctr->scholar_course.'</center></td><td><b><font color=#005ab2>Course Type:</font></b><center> '.$scholarctr->scholars_courseType.'</center></td><td><b><font color=#005ab2>Status: </font></b><center> '.$scholarctr->scholars_gradStatus.'</center></td></tr><tr><td> <b><font color=#005ab2> Year Level: </font></b><center>'.$scholarctr->scholar_yearLevel.'</center></td><td> <b><font color=#005ab2>Cash Card No.: </font></b><center>'.$scholarctr->scholar_cashCardNum.'</center></td><td><b><font color=#005ab2>Allowance Status: </font></b><center>'.$scholarctr->scholars_allowanceStatus.'</center></td>';
					if($scholarctr->scholar_sponsors!=NULL){
						echo'<td><b><font color=#005ab2>Sponsors: </font></b><center>'.$scholarctr->scholar_sponsors.'</center></td></tr>';
					}else{
						echo'<td><b><font color=#005ab2>Sponsors: </font></b><center><i>None</i></center></td></tr>';
					}
					
					echo'</table>'; 
						
				
			}
		}
	}
}
?>

</div>
