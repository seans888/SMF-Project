<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use kartik\export\ExportMenu;

$gridColumns = [
		[
				'class' => 'kartik\grid\ExpandRowColumn',
				'value' => function($model, $key, $index, $column){
					return GridView::ROW_COLLAPSED;
				},
				'detail' => function ($model, $key, $index, $column){
					$searchModel2 = new GradeSearch();
					$searchModel2 -> subject_scholar_school_school_id = $model->school_id;
					$dataProvider2 = $searchModel2->search(Yii::$app->request->queryParams);
					
					return Yii::$app->controller->renderPartial('index',[
						'searchModel2' => $searchModel2,
						'dataProvider2' => $dataProvider2,
					]);
				},
		],
            'school_id',
            'school_name',
            'school_area',
            'school_address',
            'school_contact_emails:email',
            // 'school_contact_numbers',
            // 'school_vendor_code',

            ['class' => 'yii\grid\ActionColumn'],
];

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
	'school_name',
	'school_area',
	'school_address',
	'school_contact_emails:email',
	'school_contact_numbers',
	'school_vendor_code',

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
