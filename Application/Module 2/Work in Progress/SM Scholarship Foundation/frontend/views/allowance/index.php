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
					
				if($scholarctr->scholar_user_id==$ctr->id && $scholarctr->scholar_school_id==$school->School_id){
					$name=$scholarctr->scholar_firstName." ".$scholarctr->scholar_lastName;
					$schoolname=$school->school_name;
					$year=$scholarctr->scholar_yearLevel;
					$term=$scholarctr->scholar_school_area;
					$amount=$allowance->allowance_amount;
					$remark=$allowance->allowance_remark;
					$status=$allowance->allowance_payStatus;
					$date = $allowance->allowance_paidDate;
					
				
				
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
            'label' => 'Actual Stipend',
            'content' =>  $this->render('stipendtab'),
            'active' => true
        ],
        [
            'label' => 'Past Stipend',
            'content' => $this->render('paststipendtab'),
            'active' => true
        ],
		 [
            'label' => 'Deductions',
            'content' => $this->render('deductions'),
            'active' => true
        ],
		 [
            'label' => 'Refunds',
            'content' => $this->render('refund'),
            'active' => true
        ],
    ],
    'options' => ['tag' => 'div'],
    'itemOptions' => ['tag' => 'div'],
    'headerOptions' => ['class' => 'my-class'],
    'clientOptions' => ['collapsible' => false],
	]); ?>

</div>
