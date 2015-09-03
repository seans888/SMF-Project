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
        'content'=>'<p style="color:red"><i>NOTICE:If the computed grade/s is below 85% or below 70% (5.0 or 0.0), Please answer the question below to be directly submitted to SM Foundation</i>.</p><br>Please explain the reason for attaining low or fail grade/s. Explain the effect of the deficiency. Will this affect the length of time you graduate?. Explain how will you correct the deficiency.<br><br><textarea rows=10 cols=150></textarea>
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

</div>
