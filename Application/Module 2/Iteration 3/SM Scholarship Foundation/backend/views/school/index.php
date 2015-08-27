<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use kartik\export\ExportMenu;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;
/* @var $this yii\web\View */
/* @var $searchModel common\models\SchoolSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Schools';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="school-index">
<h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
<?php
$exportedValues = 
[            
	['class' => 'kartik\grid\SerialColumn'],
	'school_id',
	[
		'class' => 'kartik\grid\EditableColumn',
		'attribute' => 'school_name',
	],
	[
		'class' => 'kartik\grid\EditableColumn',
		'attribute' => 'school_area',
		'editableOptions' => [
			'inputType' => '\kartik\select2\Select2',
			'options'=>
			[
				'data' => ['NCR'=>'NCR','Provincial'=>'Provincial'],
			],
		],
	],
	[
		'class' => 'kartik\grid\EditableColumn',
		'attribute' => 'school_address',
	],
	[
		'class' => 'kartik\grid\EditableColumn',
		'attribute' => 'school_contact_emails',
	],
	[
		'class' => 'kartik\grid\EditableColumn',
		'attribute' => 'school_contact_numbers',
	],
	[
		'class' => 'kartik\grid\EditableColumn',
		'attribute' => 'school_vendor_code',
	],

	['class' => 'kartik\grid\ActionColumn'],
];
$gridColumns = 
[            
	['class' => 'kartik\grid\SerialColumn'],
	'school_id',
	[
		'class' => 'kartik\grid\EditableColumn',
		'attribute' => 'school_name',
	],
	[
		'class' => 'kartik\grid\EditableColumn',
		'attribute' => 'school_area',
		'editableOptions' => [
			'inputType' => '\kartik\select2\Select2',
			'options'=>
			[
				'data' => ['NCR'=>'NCR','Provincial'=>'Provincial'],
			],
		],
	],

	['class' => 'kartik\grid\ActionColumn'],
];

$export = ExportMenu::widget([
		'dataProvider' => $dataProvider,
        'columns' => $exportedValues,
		'noExportColumns'=>[8],
		'exportConfig'=>[
			'Excel5'=>false,
			'Excel2007'=>false,
		],
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

?>
	
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
		'pjax' => true,
		'pjaxSettings' => 
		[
			'neverTimeout' => true
		],
    	'rowOptions'=>function($model){
    		if(strcasecmp($model->school_area, 'NCR') != 0)
    		{
    			return['class'=>'provincial-row'];
    		}
    		else if(strcasecmp($model->school_area, 'NCR') == 0)
    		{
    			return['class'=>'ncr-row'];
    		}
    	},
        'columns' => $gridColumns,
		'toolbar'=> [
        ['content'=>Html::a('Create School', ['create'], ['class' => 'btn btn-success'])
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
    ],
    ]); ?>

</div>
