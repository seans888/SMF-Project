<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use kartik\tabs\TabsX;
use yii\helpers\Url;


/* @var $this yii\web\View */
/* @var $searchModel common\models\GradeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Grades';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="grade-index">

    <center><h1 style="margin-top:100px;"><?= Html::encode($this->title) ?></h1></center><br>
  <?php 
   $items = [
    [
        'label'=>'<i class="glyphicon glyphicon-list-alt"></i> Grade Records',
        'content'=> GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
		'showOnEmpty' => false,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'grade_school_year_start',
            'grade_school_year_end',
         

            
        ],
    ]), 
                   'active' => true,
       
    ],
    [
        'label'=>'<i class="glyphicon glyphicon-thumbs-down"></i> Low Grade Explanation Form',
        'content'=>'<p style="color:red"><i>NOTICE:If the computed grade is below 85%, Please answer the question below to be directly submitted to SM Foundation</i>.</p><br>Please explain the reason for attaining a GPA/GWA of 2.5 or 85% below. Explain the effect of the deficiency. Will this affect the length of time you graduate?. Explain how will you correct the deficiency.<br><br><textarea rows=10 cols=150></textarea>
			<button class="btn btn-success" style="margin-bottom:40px;">Submit</button><br><br><h5><i>The explanation will be reviewed by the SM Foundation. <br>We will inform you for any updates regarding the case. Thank You! </i></h5>',
    ],
    
];
// Ajax Tabs Above
echo TabsX::widget([
    'items'=>$items,
    'position'=>TabsX::POS_ABOVE,
	
    'encodeLabels'=>false
]);   
   
   ?>