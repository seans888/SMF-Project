<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use common\models\Scholar;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $searchModel common\models\TuitionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$gridColumn = 
[            
	['class' => 'kartik\grid\SerialColumn'],
	[
		'class' => 'kartik\grid\EditableColumn',
		'attribute'=>'scholar_scholar_id',
		'editableOptions' => [
			'inputType' => '\kartik\select2\Select2',
			'options'=>
			[
				'data' => ArrayHelper::map(Scholar::find()->all(),'scholar_id','scholar_last_name','scholar_id'),
			],
		],
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
		'class' => 'kartik\grid\EditableColumn',
		'attribute' => 'tuition_term',
	],
	// [
		// 'class' => 'kartik\grid\EditableColumn',
		// 'attribute' => 'tuition_school_year_start',
	// ],
	// [
		// 'class' => 'kartik\grid\EditableColumn',
		// 'attribute' => 'tuition_school_year_end',
	// ],
	[
		'class' => 'kartik\grid\EditableColumn',
		'attribute' => 'tuition_enrollment_date',
	],
	[
		'class' => 'kartik\grid\EditableColumn',
		'attribute' => 'tuition_amount',
		'pageSummary' => true
	],
	[
		'class' => 'kartik\grid\EditableColumn',
		'attribute' => 'tuition_paid_status',
		'editableOptions' => [
			'inputType' => 'dropDownList',
			'pluginOptions'=>['allowClear'=>true],
			'data' => ["Not Paid"=>"Not Paid","Paid"=>"Paid"],
			'widgetClass'=> 'kartik\select2\Select2',
		],
	],
	// [
		// 'class' => 'kartik\grid\EditableColumn',
		// 'attribute' => 'tuition_payment_date',
		// 'pageSummary' => true
	// ],

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
			'content'=>Html::a('Create Tuition', ['groupcreate'], ['class' => 'btn btn-success'])
        ],
  //      '{export}',
        '{toggleData}',
		// $export
		],
		'showPageSummary' => true
    ]); ?>

</div>
