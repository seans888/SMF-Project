<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use kartik\export\ExportMenu;

/* @var $this yii\web\View */
/* @var $searchModel common\models\IncentiveSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Optional Work';
$this->params['breadcrumbs'][] = $this->title;
?>
<?php // echo $this->render('_search', ['model' => $searchModel]);
$exportedValues =
	[
		['class' => 'yii\grid\SerialColumn'],
		
		[
			'class' => 'kartik\grid\EditableColumn',
			'attribute' => 'scholar_scholar_id',
		],
		[
			'class' => 'kartik\grid\EditableColumn',
			'attribute' => 'scholar_school_school_id',
		],
		[
			'class' => 'kartik\grid\EditableColumn',
			'attribute' => 'optional_work_company_name',
		],
		[
			'class' => 'kartik\grid\EditableColumn',
			'attribute' => 'optionalwork_location',
		],
		[
			'class' => 'kartik\grid\EditableColumn',
			'attribute'=>'optionalwork_start_date',
			'editableOptions' => [
				'inputType' => 'widget',
				'options'=>
				[
					'model' => $searchModel,

						'clientOptions' => [
							'autoclose' => true,
							'format' => 'yyyy-mm-dd',
						]
				],
				'widgetClass'=>'dosamigos\datepicker\DatePicker'
			],
		],
		[
			'class' => 'kartik\grid\EditableColumn',
			'attribute'=>'optionalwork_end_date',
			'editableOptions' => [
				'inputType' => 'widget',
				'options'=>
				[
					'model' => $searchModel,

						'clientOptions' => [
							'autoclose' => true,
							'format' => 'yyyy-mm-dd',
						]
				],
				'widgetClass'=>'dosamigos\datepicker\DatePicker'
			],
		],
		
		['class' => 'yii\grid\ActionColumn'],
	];
	
	$export = ExportMenu::widget([
			'dataProvider' => $dataProvider,
			'columns' => $exportedValues,
			'noExportColumns' => [0,3],
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
				
<div class="deduction-index">
	
	<h1><?= Html::encode($this->title) ?></h1>
	<?php ?>
<?= Html::a('Group By Scholar', ['index'], ['class' => 'btn btn-success']) ?>
<?= Html::a('Show Only Optional Work Records', ['index2'], ['class' => 'btn btn-success']) ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => $exportedValues,
		'toolbar'=> [
		[
			'content'=>html::a('Create Optional Work', ['create'], ['class' => 'btn btn-success'])
		],
		
		'{toggleData}',
		$export
		],
		'panel'=>
		[
			'type'=>GridView::TYPE_PRIMARY,
			'heading'=>'Optional Work Table',
		]
    ]); 
	?>

</div>
