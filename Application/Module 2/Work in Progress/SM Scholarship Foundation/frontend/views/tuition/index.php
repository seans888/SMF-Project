<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\jui\Tabs;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\TuitionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tuitions';
$this->params['breadcrumbs'][] = $this->title;
?>
<?php 
$username=Yii::$app->user->identity->username;
foreach($users as $ctr){
	if($ctr->username==$username){
		foreach($scholars as $scholarctr){
			foreach($schools as $school){
				foreach($tuitions as $tuition){
					foreach($grades as $grade){
				if($scholarctr->scholar_user_id==$ctr->id && $scholarctr->scholar_school_id==$school->School_id && $tuition->tuitionfee_scholar_id == $grade->grade_scholar_id &&$grade->grade_scholar_id==$scholarctr->scholar_user_id){
					$name=$scholarctr->scholar_firstName." ".$scholarctr->scholar_lastName;
					$schoolname=$school->school_name;
					$year=$grade->grade_schoolYear;
					$term=$grade->grade_Term;
					$tuitionamount = $tuition->tuitionfee_amount;
					$tuitionenrol=$tuition->tuitionfee_dateOfEnrollment;
					$tuitionpay=$tuition->tuitionfee_dateOfPayment;
					
				}
					}
				}
			}
		}
	}
}
?>
<div class="tuition-index">

    <h1 style="margin-top:100px;"><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
	<?= Tabs::widget([
		'items' => [
        [
            'label' => 'Actual Tuition Fees',
            'content' => '<table><tr><td width=50%>Name:<b> '.$name.'</b><br><br>School:<b> '.$schoolname.'</b><br><br>School Year:<b> '.$year.'</b><br><br>Term:<b> '.$term.'</b><br><br>Total Tuition Fee for Term No. '.$term.':<b> '.$tuitionamount.'</b></td><td>Date of Enrollment:<b> '.$tuitionenrol.'</b><br><br>Date of Payment:<b> '.$tuitionpay.'</b></td></tr></table>',
        ],
        [
            'label' => 'Past Tuition Fees',
            'content' => 'No Past Transactions are recorded.',
            
        ],
        [
            'label' => 'Fees Shouldered by SM',
            'content' => 'No Details of this yet.'
            ,
        ],
    
    ],
    'options' => ['tag' => 'div'],
    'itemOptions' => ['tag' => 'div'],
    'headerOptions' => ['class' => 'my-class'],
    'clientOptions' => ['collapsible' => false],
]); ?>
</div>
