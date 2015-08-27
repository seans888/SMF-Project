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
				'attribute' => 'subject_term',
			],
			[
				'class' => 'kartik\grid\EditableColumn',
				'attribute' => 'subject_name',
				'editableOptions' => [
					'inputType' => '\kartik\select2\Select2',
					'options'=>
					[
						'data' => ArrayHelper::map(Subject::find()->all(),'subject_id','subject_name'),
					],
				],
			],
			[
				'class' => 'kartik\grid\EditableColumn',
				'attribute' => 'subject_units',
			],
			[
				'class' => 'kartik\grid\EditableColumn',
				'attribute' => 'subject_taken_status',
				'editableOptions' => [
					'inputType' => 'dropDownList',
					'pluginOptions'=>['allowClear'=>true],
					'data' => ["Not Taken"=>"Not Taken","Taken"=>"Taken","Failed"=>"Failed"],
					'widgetClass'=> 'kartik\select2\Select2',
				],
			],
			[
				'class' => 'kartik\grid\EditableColumn',
				'attribute' => 'subject_approval_status',
				'editableOptions' => [
					'inputType' => 'dropDownList',
					'pluginOptions'=>['allowClear'=>true],
					'data' => ["Not Approved"=>"Not Approved","Approved"=>"Approved"],
					'widgetClass'=> 'kartik\select2\Select2',
				],
			],
            'subject_approved_by',

            ['class' => 'kartik\grid\ActionColumn'],
        ];

$export = ExportMenu::widget([
		'dataProvider' => $dataProvider,
        'columns' => $exportedValues,
		'noExportColumns' => [7],
		'exportConfig'=>[
			'Excel5'=>false,
			'Excel2007'=>false,
		],
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

$this->title = 'Subject';
$this->params['breadcrumbs'][] = $this->title;
?>
<h1><?= Html::encode($this->title) ?></h1>
<?= Html::a('Group By School', ['index'], ['class' => 'btn btn-success']) ?>
<?= Html::a('Show Only Subject Records', ['index2'], ['class' => 'btn btn-success']) ?>
<div class="school-index">
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
		'pjax' => true,
		'pjaxSettings' => ['neverTimeout' => true],
        'columns' => $exportedValues,
		'toolbar'=> [
			['content'=>Html::a('Create Subject', ['create'], ['class' => 'btn btn-success'])
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