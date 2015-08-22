<?php

use yii\helpers\Html;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\TuitionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$gridColumn = 
[            
	['class' => 'kartik\grid\SerialColumn'],
	[
		'attribute' => 'scholar_scholar_id',
		'pageSummary' => 'Total'
	],
	[
		'attribute' => 'firstName',
		'value' => 'scholarScholar.scholar_first_name'
	],
	[
		'attribute' => 'middleName',
		'value' => 'scholarScholar.scholar_middle_name'
	],
	[
		'attribute' => 'lastName',
		'value' => 'scholarScholar.scholar_last_name'
	],
	[
		'attribute' => 'tuition_term',
	],
	'tuition_school_year_start',
	'tuition_school_year_end',
	'tuition_enrollment_date',
	[
		'attribute' => 'tuition_amount',
		'pageSummary' => true
	],
	'tuition_paid_status',
	'tuition_payment_date',

	['class' => 'kartik\grid\ActionColumn'],
];


$this->title = 'Tuitions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tuition-index">

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
		'pjax' => true,
		'pjaxSettings' => ['neverTimeout' => true],
        'columns' => $gridColumn,
		'toolbar'=> [
        [
			'content'=>Html::a('Create Tuition', ['create'], ['class' => 'btn btn-success'])
        ],
  //      '{export}',
        '{toggleData}',
		// $export
		],
		'showPageSummary' => true
    ]); ?>

</div>
