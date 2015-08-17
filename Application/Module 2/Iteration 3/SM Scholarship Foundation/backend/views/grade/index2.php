<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use kartik\export\ExportMenu;

$exportedValues =
[
	['class' => 'kartik\grid\SerialColumn'],
	[
		'attribute'=>'grade_id',
		'pageSummary'=>'Total'
	],
	'subject_subject_id',
	[
		'attribute'=>'subject_scholar_scholar_id',
		'pageSummary'=>true
	],
	'subject_scholar_school_school_id',
	'grade_school_year_start',
	'grade_school_year_end',
	'grade_raw_grade',
	'grade_approval_status',
	'grade_approved_by',
	['class' => 'kartik\grid\ActionColumn']
];

$export = ExportMenu::widget([
		'dataProvider' => $dataProvider,
        'columns' => $exportedValues,
		'noExportColumns' => [10],
		'target' => '_blank',
        'columnSelectorOptions'=>[
            'label' => 'Columns',
            'class' => 'btn btn-danger'
        ],

        'fontAwesome' => true,
        'dropdownOptions' => [
            'label' => 'Export All',
            'class' => 'btn btn-success'
        ]
	]);
/* @var $this yii\web\View */
/* @var $searchModel common\models\SchoolSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Schools';
$this->params['breadcrumbs'][] = $this->title;
?>
<?= Html::a('Group By School', ['index'], ['class' => 'btn btn-success']) ?>
<?= Html::a('Show Only Grade Records', ['index2'], ['class' => 'btn btn-success']) ?>
<div class="school-index">
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => $exportedValues,
		'toolbar'=> [
			['content'=>Html::a('Create Grade', ['create'], ['class' => 'btn btn-success'])
			],
			//'{export}',
			'{toggleData}',
			$export
		],
    // set export properties
		'export'=>[
			'fontAwesome'=>true,
			'label' => 'Export All',
			'target' => '_blank'
		],
		'panel'=>[
        'type'=>GridView::TYPE_PRIMARY,
        'heading'=>'Grade List',
    ],
    ]); ?>
</div>