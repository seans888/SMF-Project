<?php

use yii\helpers\Html;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\TuitionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$gridColumn = 
[            
	['class' => 'yii\grid\SerialColumn'],
	'scholar_scholar_id',
	[
		'class' => 'kartik\grid\EditableColumn',
		'attribute' => 'tuition_term',
	],
	'tuition_school_year_start',
	'tuition_school_year_end',
	'tuition_enrollment_date',
	'tuition_amount',
	'tuition_paid_status',
	'tuition_payment_date',

	['class' => 'yii\grid\ActionColumn'],
];


$this->title = 'Tuitions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tuition-index">

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => $gridColumn,
		'toolbar'=> [
        [
			'content'=>Html::a('Create Tuition', ['create'], ['class' => 'btn btn-success'])
        ],
  //      '{export}',
        '{toggleData}',
		// $export
		],
    ]); ?>

</div>
