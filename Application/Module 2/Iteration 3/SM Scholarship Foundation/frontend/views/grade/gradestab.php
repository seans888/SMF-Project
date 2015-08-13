<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\jui\Tabs;
use common\models\User;
use common\models\Scholars;
use common\models\Schools;
use common\models\Grades;
use kartik\tabs\TabsX;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\GradeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->params['breadcrumbs'][] = $this->title;
?>

<div class="grades-index">

    <h1 style="margin-top:100px;"><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
<?php 
   $items = [
    [
        'label'=>'<i class="glyphicon glyphicon-user"></i> Grade Records',
        'content'=>$this->render('index'),
        'active'=>true,
       
    ],
    [
        'label'=>'<i class="glyphicon glyphicon-home"></i> Low Grade Explanation Form',
        'content'=>'no',
        
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
