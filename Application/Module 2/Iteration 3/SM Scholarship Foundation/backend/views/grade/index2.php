<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use kartik\export\ExportMenu;
use yii\helpers\ArrayHelper;
use common\models\Scholar;
use common\models\School;
use common\models\Subject;
$exportedValues =
[
	['class' => 'kartik\grid\SerialColumn'],
	[
		'class' => 'kartik\grid\EditableColumn',
		'attribute'=>'subject_scholar_school_school_id',
		'editableOptions' => [
			'inputType' => '\kartik\select2\Select2',
			'options'=>
			[
				'data' => ArrayHelper::map(Subject::find()->all(),'subject_id','subject_name'),
			],
		],
		'value'=>'subjectSubject.subject_name',
	],
	[
		'class' => 'kartik\grid\EditableColumn',
		'attribute'=>'subject_scholar_scholar_id',
		'editableOptions' => [
			'inputType' => '\kartik\select2\Select2',
			'options'=>
			[
				'data' => ArrayHelper::map(Scholar::find()->all(),'scholar_id','scholar_last_name','scholar_id'),
			],
		],
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
		'class' => 'kartik\grid\EditableColumn',
		'attribute'=>'subject_scholar_school_school_id',
		'editableOptions' => [
			'inputType' => '\kartik\select2\Select2',
			'options'=>
			[
				'data' => ArrayHelper::map(School::find()->all(),'school_id','school_name'),
			],
		],
		'value'=>'schoolSchool.school_name',
	],
	[
		'class' => 'kartik\grid\EditableColumn',
		'attribute'=>'grade_school_year_start',
	],
	[
		'class' => 'kartik\grid\EditableColumn',
		'attribute'=>'grade_school_year_end',
	],
	[
		'class' => 'kartik\grid\EditableColumn',
		'attribute'=>'grade_raw_grade',
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
	[
		'class' => 'kartik\grid\EditableColumn',
		'attribute'=>'grade_approved_by',
	],
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
		'pjax' => true,
		'pjaxSettings' => ['neverTimeout' => true],
        'columns' => $exportedValues,
		'toolbar'=> [
			['content'=>Html::a('Create Grade', ['groupcreate'], ['class' => 'btn btn-success'])
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