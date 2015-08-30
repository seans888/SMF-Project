<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use kartik\export\ExportMenu;

/* @var $this yii\web\View */
/* @var $searchModel common\models\IncentiveSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Incentives';
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
			'attribute' => 'incentive_amount',
		],
		[
			'class' => 'kartik\grid\EditableColumn',
			'attribute' => 'incentive_remark',
		],
		[
				'class' => 'kartik\grid\EditableColumn',
            	'attribute'=>'incentive_date',
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
			'exportConfig'=>[
			'Excel5'=>false,
			'Excel2007'=>false,
		],
			'noExportColumns' => [4],
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
<?= Html::a('Show Only Incentive Records', ['index2'], ['class' => 'btn btn-success']) ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
		'pjax' => true,
		'pjaxSettings' => 
		[
			'neverTimeout' => true
		],
        'columns' => $exportedValues,
		'toolbar'=> [
		[
			'content'=>html::a('Create Incetives', ['create'], ['class' => 'btn btn-success'])
		],
		
		'{toggleData}',
		$export
		],
		'panel'=>
		[
			'type'=>GridView::TYPE_PRIMARY,
			'heading'=>'Incentives Table',
		]
    ]); 
	?>

</div>
