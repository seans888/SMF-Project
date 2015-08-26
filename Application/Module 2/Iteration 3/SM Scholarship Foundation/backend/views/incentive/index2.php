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
			'incentive_amount',
            'incentive_remark',
			'incentive_date',
		
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
