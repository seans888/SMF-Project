<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\jui\Tabs;

/* @var $this yii\web\View */
/* @var $searchModel common\models\AllowanceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Stipend and Benefits';
$this->params['breadcrumbs'][] = $this->title;
?>
<?php 
$username=Yii::$app->user->identity->username;
foreach($users as $ctr){
	if($ctr->username==$username){
		foreach($scholars as $scholarctr){
			foreach($schools as $school){
				foreach($allowances as $allowance){
					foreach($benefits as $benefit){
				if($scholarctr->scholar_user_id==$ctr->id && $scholarctr->scholar_school_id==$school->school_id && $allowance->allowance_scholar_id == $benefit->benefit_scholar_id &&$benefit->benefit_scholar_id==$scholarctr->scholar_user_id){
					$name=$scholarctr->scholar_firstName." ".$scholarctr->scholar_lastName;
					$schoolname=$school->school_name;
					$year=$scholarctr->scholar_yearLevel;
					$term=$scholarctr->scholar_school_area;
					$amount=$allowance->allowance_amount;
					$remark=$allowance->allowance_remark;
					$status=$allowance->allowance_payStatus;
					$date = $allowance->allowance_paidDate;
					$ben = $benefit->benefit_amount;
					$share = $benefit->benefit_scholarShare;
					
				}
					}
				}
			}
		}
	}
}
?>
<div class="allowance-index">

    <h1 style="margin-top:100px;"><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

     <?= Tabs::widget([
    'items' => [
        [
            'label' => 'Actual Stipend and Benefits',
            'content' => '<table><tr><td width=40% >STIPEND:<br><br><br></td></tr><tr><td>Name:<b> '.$name.'</b><br><br>School:<b> '.$schoolname.'</b><br><br>School Year Level:<b> '.$year.'</b><br><br>School Area:<b> '.$term.'</b><br><br>Allowance Amount:<b> '.$amount.'</b></td><td style="text-align:right;">Remark:<b> '.$remark.'</b><br><br>Allowance Status:<b> '.$status.'</b><br><br>Allowance Payment Date:<b> '.$date.'</b><br><br><br>BENEFITS<br><br>Benefit Amount: <b>'.$ben.'</b><br><br>Scholar Share:<b> '.$share.'</td></tr></table>',
        ],
        [
            'label' => 'Past Stipend and Benefits',
            'content' => 'No data received.',
        ],
    ],
    'options' => ['tag' => 'div'],
    'itemOptions' => ['tag' => 'div'],
    'headerOptions' => ['class' => 'my-class'],
    'clientOptions' => ['collapsible' => false],
	]); ?>

</div>
