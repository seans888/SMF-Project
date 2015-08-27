<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use kartik\export\ExportMenu;
use common\models\Scholar;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $searchModel common\models\TuitionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
$gridColumns = 
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
$exportedValues = 
[            
	['class' => 'kartik\grid\SerialColumn'],

	'scholar_scholar_id',
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
		'attribute' => 'schoolName',
		'value' => 'schoolSchool.school_name'
	],
	'tuition_term',
	'tuition_school_year_start',
	'tuition_school_year_end',
	'tuition_enrollment_date',
	'tuition_amount',
	'tuition_paid_status',
	'tuition_payment_date',

	['class' => 'kartik\grid\ActionColumn'],
];

$export = ExportMenu::widget([
		'dataProvider' => $dataProvider,
        'columns' => $exportedValues,
		'exportConfig'=>[
			'Excel5'=>false,
			'Excel2007'=>false,
		],
		'noExportColumns'=>[13],
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

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
<?= Html::a('Group By School', ['index'], ['class' => 'btn btn-success']) ?>
<?= Html::a('Show Only Tuition Records', ['index2'], ['class' => 'btn btn-success']) ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
		'pjax' => true,
		'pjaxSettings' => ['neverTimeout' => true],
        'columns' => $gridColumns,
		'toolbar'=> [
        ['content'=>Html::a('Create Tuition', ['groupcreate'], ['class' => 'btn btn-success'])
        ],
  //      '{export}',
        '{toggleData}',
		$export
		],
    // set export properties
    // 'export'=>[
        // 'fontAwesome'=>true,
		// 'label' => 'Export',
		// 'target' => '_blank'
    // ],
		'panel'=>[
        'type'=>GridView::TYPE_PRIMARY,
        'heading'=>'School List',
		]
    ]); ?>

</div>
