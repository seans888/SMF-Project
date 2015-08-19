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
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
        <br>
	<p><h3><span style="background-color: #e7bd58"><b>Orange</b> rows are schools from NCR Areas</p></span>
	<p><h3><span style="background-color: #57dbee"><b>Blue</b> rows are schools from Provincial Areas</span></h3>
	</p>

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
				'data' => ['NCR'=>'NCR','Davao'=>'Davao'],
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

$export = ExportMenu::widget([
		'dataProvider' => $dataProvider,
        'columns' => $exportedValues,
		'noExportColumns'=>[8],
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
        'columns' => $exportedValues,
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
