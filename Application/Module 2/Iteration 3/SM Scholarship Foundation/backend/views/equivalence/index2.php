<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use kartik\export\ExportMenu;
$exportedValues = 
[            
	['class' => 'kartik\grid\SerialColumn'],

	'equivalence_id',
	'equivalence_numerical_grade',
	'equivalence_letter_grade',
	'equivalence_percentile_lower',
	'equivalence_percentile_upper',
	'equivalence_school_rating',
	'equivalence_foundation_rating',

	['class' => 'kartik\grid\ActionColumn'],
];

$export = ExportMenu::widget([
		'dataProvider' => $dataProvider,
        'columns' => $exportedValues,
		// 'noExportColumns'=>[11],
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

/* @var $this yii\web\View */
/* @var $searchModel common\models\EquivalenceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Equivalences';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="equivalence-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
<?= Html::a('Group By School', ['index'], ['class' => 'btn btn-success']) ?>
<?= Html::a('Show Only Equivalences', ['index2'], ['class' => 'btn btn-success']) ?>

	<?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [

        ],
		'toolbar'=> [
        ['content'=>Html::a('Create Equivalence Rule', ['create'], ['class' => 'btn btn-success'])
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
		]
    ]); ?>

</div>
