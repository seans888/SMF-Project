<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use kartik\tabs\TabsX;
use common\models\Grade;

/* @var $this yii\web\View */
/* @var $searchModel common\models\SubjectSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Subjects';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="subject-index">

    <h1 style="margin-top:100px;text-align:center"><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
	<font color=red><?= Yii::$app->session->getFlash('error'); ?></font>
    <?php 
	
   $items = [
   
    
    [
        'label'=>'<i class="glyphicon glyphicon-list-alt"></i> Grade Records',
        'content'=> GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            
            
            'subject_term',
            'subject_name',
			'subject_units',
			[
		'attribute'=>'rawGrade',
		'value'=>'grades.grade_raw_grade'
	],
	
            // 'subject_units',
            // 'subject_taken_status',
            // 'subject_approval_status',
            // 'subject_approved_by',

          [

            'class' => 'yii\grid\ActionColumn',
            'header'=>'Action',
            'headerOptions' => ['width' => '80'],
            'template' => '{update}',
			
			
        ],

        ],
    ]),
                   'active' => true,
       
    ],
	[
        'label'=>'<i class="glyphicon glyphicon-pencil"></i> Input Grades',
        'content'=>$this->render('groupcreate'),
    ],
    [
        'label'=>'<i class="glyphicon glyphicon-thumbs-down"></i> Low/Fail Grade Explanation Form',
        'content'=>$TabContent,
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
