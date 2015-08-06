<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\jui\Tabs;

/* @var $this yii\web\View */
/* @var $searchModel common\models\CompileSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Profile';
$this->params['breadcrumbs'][] = $this->title;
?>
<?php 
$username=Yii::$app->user->identity->username;
foreach($users as $ctr){
	if($ctr->username==$username){
		foreach($scholars as $scholarctr){
			foreach($schools as $school){
				foreach($allowances as $allowance){
					
						foreach($grades as $grade){
						if($scholarctr->scholar_user_id==$ctr->id && $scholarctr->scholar_school_id==$school->School_id){
						$name=$scholarctr->scholar_firstName." ".$scholarctr->scholar_middleName." ".$scholarctr->scholar_lastName;
						$gender=$scholarctr->scholar_gender;
						$address=$scholarctr->scholar_address;
						$course=$scholarctr->scholar_course;
						$yearlevel=$scholarctr->scholar_yearLevel;
						$year=$grade->grade_schoolYear;
						$term=$grade->grade_Term;
						$contact=$scholarctr->scholar_contactNum;
						$cashcard =$scholarctr->scholar_cashCardNum;
						$schoolarea=$scholarctr->scholar_school_area;
						$schoolname=$school->school_name;
						$schooladdress=$school->school_address;
						$schoolcontact=$school->school_contactEmail;
						$schoolnum=$school->school_contactNumber;
						
					
				
						}
					}
				}
			}
		}
	}
}
?>
<div class="compile-index">

    <h1 style="margin-top:100px;"><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

   
     <?= Tabs::widget([
    'items' => [
        [
            'label' => 'Scholar Details',
            'content' => '<table><tr><td>Full Name: <b>'.$name.'</b><br><br>Address: <b>'.$address.'</b><br><br>Gender: <b>'.$gender.'</b><br><br>Course: <b>'.$course.'</b><br><br>Year Level:<b> '.$yearlevel.'</b><br><br>Contact Number: <b>'.$contact.'</b><br><br>Cash Card No.: <b>'.$cashcard.'</b></td><td><a href="index.php?r=grade/index" class="btn btn-primary">View Grades</a><br><br><a href="index.php?r=tuition/index" class="btn btn-primary">View Tuition Fees</a><br><br><a href="index.php?r=allowance/index" class="btn btn-primary">View Benefits and Stipend</a></td></tr></table>',
        ],
        [
            'label' => 'School Details',
            'content' => 'School Year: <b>'.$year.'</b><br>Term: <b>'.$term.'</b><br><br>School Name: <b>'.$schoolname.'</b><br><br>Area: <b>'.$schoolarea.'</b><br><br>Address: <b>'.$schooladdress.'</b><br><br>Email: <b>'.$schoolcontact.'</b><br><br>Contact Number: <b>'.$schoolnum.'</b>',
        ],
    ],
    'options' => ['tag' => 'div'],
    'itemOptions' => ['tag' => 'div'],
    'headerOptions' => ['class' => 'my-class'],
    'clientOptions' => ['collapsible' => false],
	]); ?>

</div>
