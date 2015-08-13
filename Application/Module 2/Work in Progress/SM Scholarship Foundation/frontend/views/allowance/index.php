<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use yii\jui\Tabs;
use kartik\tabs\TabsX;
use yii\helpers\Url;
use common\models\Deductions;
use common\models\DeductionsSearch;
use common\models\Refunds;
use common\models\RefundsSearch;

/* @var $this yii\web\View */
/* @var $searchModel common\models\AllowanceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Stipend and Benefits';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="allowance-index">

    <center><h1 style="margin-top:100px;"><?= Html::encode($this->title) ?></h1></center>
  
	
	 
<?php
   $items = [
    [
        'label'=>'<i class="glyphicon glyphicon-list-alt"></i> Allowance Records',
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
	  
	];
	echo TabsX::widget([
    'items'=>$items,
    'position'=>TabsX::POS_ABOVE,
    'encodeLabels'=>false,

]);   
	?>
	<?php 
	 
	ob_start();
			$model = new Deductions();
            $searchModel = new DeductionsSearch();
            $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
            echo $this->render('/deductions/index',[
                'model'=>$model,
                'dataProvider'=>$dataProvider,
                'searchModel'   =>$searchModel,
            ]);
 
	$TabContent=ob_get_clean();
	
	?>
	<?php 
	$items2 = [
	[
        'label'=>'<i class="glyphicon glyphicon-thumbs-down"></i> Deductions',
		  'content'=>$TabContent
			
	,
		   'active'=>true,
		
    ],
  
	];
		echo TabsX::widget([
    'items'=>$items2,
    'position'=>TabsX::POS_ABOVE,
    'encodeLabels'=>false,

]); 
	
	
	
	?>
	<?php 
	 
	ob_start();
			$model = new Refunds();
            $searchModel = new RefundsSearch();
            $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
            echo $this->render('/refunds/index',[
                'model'=>$model,
                'dataProvider'=>$dataProvider,
                'searchModel'   =>$searchModel,
            ]);
 
	$TabContent2=ob_get_clean();
	
	?>
	<?php 
	$items3 = [

     [
        'label'=>'<i class="glyphicon glyphicon-thumbs-up"></i> Refunds',
        'content'=>$TabContent2,
    ],
	];
	echo TabsX::widget([
    'items'=>$items3,
    'position'=>TabsX::POS_ABOVE,
    'encodeLabels'=>false,

	]); 
	
	
	
	?>
	
   
   

</div>

