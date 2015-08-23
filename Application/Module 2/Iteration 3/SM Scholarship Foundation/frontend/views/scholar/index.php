<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\jui\Tabs;
use kartik\tabs\TabsX;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel common\models\CompileSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */


$this->title = 'Profile';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="compile-index">

    <center><h1 style="margin-top:100px;"><?= Html::encode($this->title) ?></h1></center><br>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

   <?php 
   $items = [
    [
        'label'=>'<i class="glyphicon glyphicon-user"></i> Scholar Details',
        'content'=>$this->render('scholartab'),
        'active'=>true,
       
    ],
    [
        'label'=>'<i class="glyphicon glyphicon-home"></i> School Details',
        'content'=>$this->render('schooltab'),
        
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
