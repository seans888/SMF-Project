<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use yii\jui\Tabs;
use kartik\tabs\TabsX;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\TuitionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tuitions';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="tuition-index">

    <center><h1 style="margin-top:100px;"><?= Html::encode($this->title) ?></h1></center><br>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
 <?php 
   $items = [
    [
        'label'=>'<i class="glyphicon glyphicon-list-alt"></i> Tuition Fee Records',
        'content'=> GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
		'showOnEmpty' => false,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'tuitionfee_amount',
            'tuitionfees_term',
            'tuitionfee_dateOfEnrollment',
            'tuitionfee_dateOfPayment',
			'tuitionfee_paidStatus',
        ],
    ]),
                   'active' => true,
       
    ],
  
    
];
// Ajax Tabs Above
echo TabsX::widget([
    'items'=>$items,
    'position'=>TabsX::POS_ABOVE,
	
    'encodeLabels'=>false
]);   
   
   ?>

</div>
