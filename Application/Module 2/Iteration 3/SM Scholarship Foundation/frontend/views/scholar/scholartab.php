<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\jui\Tabs;
use common\models\User;
use common\models\Scholar;



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
$scholars = Scholar::find()->all();

foreach($users as $ctr){
	if($ctr->username==$username){
		foreach($scholars as $scholarctr){
		
				if($scholarctr->scholar_user_id==$ctr->id){
					echo '<center><img src="img/student.png" height=100px width=100px></img><h2><font color=#005ab2><strong>'.$scholarctr->scholar_last_name.', '.$scholarctr->scholar_first_name.' '.$scholarctr->scholar_middle_name.'</strong></font></h2><h3>'.$scholarctr->scholar_address.'</h3><h4>'.$scholarctr->scholar_contact_email.' / '.$scholarctr->scholar_contact_number.'</center><table border=2 width=100%><tr><td></td></tr></table><br><table border=1 width=100%><tr><td> <b><font color=#005ab2> Gender:</font></b><center> '.$scholarctr->scholar_gender.'</center></td><td><b><font color=#005ab2>Course:</font></b><center> '.$scholarctr->scholar_course.'</center></td><td><b><font color=#005ab2>Scholar Type:</font></b><center> '.$scholarctr->scholar_type.'</center></td><td><b><font color=#005ab2>Status: </font></b><center> '.$scholarctr->scholar_graduate_status.'</center></td></tr><tr><td> <b><font color=#005ab2> Year Level: </font></b><center>'.$scholarctr->scholar_year_level.'</center></td><td> <b><font color=#005ab2>Cash Card No.: </font></b><center>'.$scholarctr->scholar_cash_card_number.'</center></td>';
					if($scholarctr->scholar_sponsor!=NULL){
						echo'<td><b><font color=#005ab2>Sponsors: </font></b><center>'.$scholarctr->scholar_sponsor.'</center></td></tr>';
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
