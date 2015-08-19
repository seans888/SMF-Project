<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use kartik\export\ExportMenu;

$exportedValues = 
[            
	['class' => 'kartik\grid\SerialColumn'],

		'scholar_id',
		'school_school_id',
		'scholar_first_name',
		'scholar_middle_name',
		'scholar_last_name',
		'scholar_gender',
		// 'scholar_address',
		'scholar_course',
		'scholar_graduate_status',
		'scholar_year_level',
		// 'scholar_contact_email:email',
		// 'scholar_contact_number',
		'scholar_allowance_status',
		// 'scholar_cash_card_number',
		'scholar_type',
		// 'scholar_sponsor',
		'allowance_allowance_area',

	['class' => 'kartik\grid\ActionColumn'],
];

$export = ExportMenu::widget([
		'dataProvider' => $dataProvider,
        'columns' => $exportedValues,
		'noExportColumns'=>[18],
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
/* @var $searchModel common\models\ScholarSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Scholars';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="scholar-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Scholar', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => $exportedValues,
		'toolbar'=> [
			[
				'content'=>Html::a('Create Scholar', ['create'], ['class' => 'btn btn-success'])
			],
  //      	'{export}',
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
        'heading'=>'Scholar List',
    ],
    ]); 
	?>

</div>
