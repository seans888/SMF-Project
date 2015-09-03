<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use kartik\tabs\TabsX;
use common\models\Allowance;
use common\models\Scholar;
use common\models\User;
use common\models\Incentive;
use common\models\IncentiveSearch;


/* @var $this yii\web\View */
/* @var $searchModel common\models\DeductionsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Deductions';
$this->params['breadcrumbs'][] = $this->title;
?>
<?php 
		$username=Yii::$app->user->identity->username;
		$users = User::find()->all();
		$scholars = Scholar::find()->all();
		$allowances= Allowance::find()->all();
		

?>
<div class="deductions-index">
	
	<?php 
	foreach($users as $user){
			foreach($scholars as $scholar){
				foreach($allowances as $allowance){
				if($user->username==$username&&$user->id==$scholar->scholar_user_id&&$allowance->allowance_area==$scholar->allowance_allowance_area){
					echo '<strong><h3 style="margin-top:150px">Current Allowance Received:  Php <strong>'.$allowance->allowance_amount.'</h3><strong><h3>Current School Location: <strong>'.$allowance->allowance_area.'</h3><br><br>';
				}
				}
			}
	}
	
	
	?>
	
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
<?php 
	ob_start();
			$model = new Incentive();
            $searchModel = new IncentiveSearch();
            $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
            echo $this->render('/incentive/index',[
                'model'=>$model,
                'dataProvider'=>$dataProvider,
                'searchModel'   =>$searchModel,
            ]);
 
	$TabContent=ob_get_clean();
	?>
	<?php

   $items = [
    [
        'label'=>'<i class="glyphicon glyphicon-thumbs-down"></i> Deduction Records',
        'content'=> GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
		'showOnEmpty' => false,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
			'deduction_date',
            'deduction_amount',
            'deduction_remark',
            
			
        ],
		
    ]), 
                   'active' => true,
       
    ],
	[
        'label'=>'<i class="glyphicon glyphicon-thumbs-up"></i> Incentive Records',
        'content'=> $TabContent, 
                   'active' => false,
       
    ],
	  
	];
	echo TabsX::widget([
    'items'=>$items,
    'position'=>TabsX::POS_ABOVE,
    'encodeLabels'=>false,

]);   
	?>
	
   

</div>
