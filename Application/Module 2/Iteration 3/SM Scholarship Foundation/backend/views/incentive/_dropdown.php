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
		['class' => 'kartik\grid\SerialColumn'],
		
		[
			// 'class' => 'kartik\grid\EditableColumn',
			'attribute' => 'incentive_amount',
		],
		[
			// 'class' => 'kartik\grid\EditableColumn',
			'attribute' => 'incentive_remark',
		],
		[
				// 'class' => 'kartik\grid\EditableColumn',
            	'attribute'=>'incentive_date',
				// 'editableOptions' => [
					// 'inputType' => 'widget',
					// 'options'=>
					// [
						// 'model' => $searchModel,

							// 'clientOptions' => [
								// 'autoclose' => true,
								// 'format' => 'yyyy-mm-dd',
							// ]
					// ],
					// 'widgetClass'=>'dosamigos\datepicker\DatePicker'
				// ],
            ],
		
		['class' => 'kartik\grid\ActionColumn'],
	];
	
	$export = ExportMenu::widget([
			'dataProvider' => $dataProvider,
			'columns' => $exportedValues,
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
				
<div class="incentive-index">

	<?php ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
		'pjax' => true,
		'pjaxSettings' => 
		[
			'neverTimeout' => true
		],
        'columns' => $exportedValues,
		// 'toolbar'=> [
		// [
			// 'content'=>html::a('Create Incentive', ['create'], ['class' => 'btn btn-success'])
		// ],
		
		// '{toggleData}',
		// $export
		// ],
		// 'panel'=>
		// [
			// 'type'=>GridView::TYPE_PRIMARY,
			// 'heading'=>'Incentive Table',
		// ]
    ]); 
	?>

</div>
