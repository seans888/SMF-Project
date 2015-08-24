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
	'subject_scholar_scholar_id',
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
	[
		'class' => 'kartik\grid\EditableColumn',
		'attribute' => 'takenStatus',
		'editableOptions' => [
			'inputType' => 'dropDownList',
			'pluginOptions'=>['allowClear'=>true],
			'data' => ["Not Taken"=>"Not Taken","Taken"=>"Taken","Failed"=>"Failed"],
			'widgetClass'=> 'kartik\select2\Select2',
		],
	],
	[
		'class' => 'kartik\grid\EditableColumn',
		'attribute' => 'grade_approval_status',
		'editableOptions' => [
			'inputType' => 'dropDownList',
			'pluginOptions'=>['allowClear'=>true],
			'data' => ["Not Approved"=>"Not Approved","Approved"=>"Approved"],
			'widgetClass'=> 'kartik\select2\Select2',
		],
	],
	'grade_approved_by',
	['class' => 'kartik\grid\ActionColumn',
				  'template'=>'{view} {update} {check} {delete}',
					'buttons'=>[
					  'update' => function ($url, $model) {     
						return Html::a('<span class="glyphicon glyphicon-pencil"></span>', $url, [
								'title' => Yii::t('yii', 'Update'),
						]);                                
	
					  },
					  'check' => function ($url, $model) {     
						return Html::a('<span class="glyphicon glyphicon-check"></span>', $url, [
								'title' => Yii::t('yii', 'Check'),
						]);                                
	
					  },
					  'delete' => function ($url, $model) {     
						return Html::a('<span class="glyphicon glyphicon-trash"></span>', $url, [
								'title' => Yii::t('yii', 'Delete'),
								'data-confirm' => Yii::t('kvgrid', 'Are you sure to delete this item?'),
								'data-method' => 'post',
								'data-pjax' => '0'
						]);                                
	
					  },
				  ]                            
	],
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
