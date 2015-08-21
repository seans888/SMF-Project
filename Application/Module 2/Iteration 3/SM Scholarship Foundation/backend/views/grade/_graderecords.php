<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use kartik\export\ExportMenu;
$exportedValues2 =
[
	['class' => 'kartik\grid\SerialColumn'],
	// [
		// 'attribute'=>'grade_id',
		// 'pageSummary'=>'Total'
	// ],
	[
		'attribute'=>'subject_scholar_scholar_id',
	],
	[
		'attribute'=>'firstName',
		'value'=>'scholarScholar.scholar_first_name'
	],
	[
		'attribute'=>'middleName',
		'value'=>'scholarScholar.scholar_middle_name'
	],
	[
		'attribute'=>'lastName',
		'value'=>'scholarScholar.scholar_last_name'
	],
	[
		'attribute'=>'subject_subject_id',
		'value'=>'subjectSubject.subject_name',
	],
	'grade_school_year_start',
	'grade_school_year_end',
	'grade_raw_grade',
	'grade_approval_status',
	'grade_approved_by',
];

// echo ExportMenu::widget([
		// 'dataProvider' => $dataProvider2,
        // 'columns' => $exportedValues2,
		// 'disabledColumns'=>[0],
        // 'columnSelectorOptions'=>[
            // 'label' => 'Columns',
            // 'class' => 'btn btn-danger'
        // ],

        // 'fontAwesome' => true,
        // 'dropdownOptions' => [
            // 'label' => 'Export',
            // 'class' => 'btn btn-success'
        // ]
	// ]);
/* @var $this yii\web\View */
/* @var $searchModel common\models\GradeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Grades';
$this->params['breadcrumbs'][] = $this->title;
?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider2,
        'filterModel' => $searchModel2,
		'pjax' => true,
		'pjaxSettings' => ['neverTimeout' => true],
        'columns' => $exportedValues2,
		'showPageSummary'=>true
    ]); ?>
