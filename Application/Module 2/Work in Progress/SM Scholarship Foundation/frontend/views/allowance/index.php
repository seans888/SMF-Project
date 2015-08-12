<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use yii\jui\Tabs;
use kartik\tabs\TabsX;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel common\models\AllowanceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Stipend and Benefits';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="allowance-index">

    <h1 style="margin-top:100px;"><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
 <?php 
   $items = [
    [
        'label'=>'<i class="glyphicon glyphicon-user"></i> Allowance Records',
        'content'=> GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
		'showOnEmpty' => false,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
			
			'allowance_date',
			'allowance_amount',
            'allowance_remark',
            'allowance_payStatus',
            'allowance_paidDate',
        ],
    ]), 
                   'active' => true,
       
    ],
    [
        'label'=>'<i class="glyphicon glyphicon-home"></i> Deductions',
		  'content'=>'',
		
    ],
     [
        'label'=>'<i class="glyphicon glyphicon-home"></i> Refunds',
        'content'=>'none',
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
