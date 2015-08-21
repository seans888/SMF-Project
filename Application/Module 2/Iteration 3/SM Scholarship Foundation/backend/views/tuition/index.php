<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use kartik\export\ExportMenu;
/* @var $this yii\web\View */
/* @var $searchModel common\models\TuitionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$exportedValues = 
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

$export = ExportMenu::widget([
		'dataProvider' => $dataProvider,
        'columns' => $exportedValues,
		'noExportColumns'=>[11],
        'columnSelectorOptions'=>[
            'label' => 'Columns',
            'class' => 'btn btn-danger'
        ],
		'target' => '_blank',
        'fontAwesome' => true,
        'dropdownOptions' => [
            'label' => 'Export',
            'class' => 'btn btn-success'
        ]
	]);

$this->title = 'Tuitions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tuition-index">

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => $exportedValues,
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
