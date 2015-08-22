<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use kartik\export\ExportMenu;

/* @var $this yii\web\View */
/* @var $searchModel common\models\AllowanceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Allowances';
$this->params['breadcrumbs'][] = $this->title;
?>
<?php // echo $this->render('_search', ['model' => $searchModel]);
$exportedValues =
	[
		['class' => 'yii\grid\SerialColumn'],
		
		'allowance_area',
		'allowance_amount',
		
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
				
<div class="allowance-index">
	
	<h1><?= Html::encode($this->title) ?></h1>
	<?php ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => $exportedValues,
		'toolbar'=> [
		[
			'content'=>html::a('Create Allowance', ['create'], ['class' => 'btn btn-success'])
		],
		
		'{toggleData}',
		$export
		],
		'panel'=>
		[
			'type'=>GridView::TYPE_PRIMARY,
			'heading'=>'Allowance Table',
		]
    ]); 
	?>

</div>
