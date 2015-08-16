<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use kartik\export\ExportMenu;
use common\models\GradeSearch;

// $exportedValues =
// [
            // 'school_id',
            // 'school_name',
            // 'school_area',
            // 'school_address',
            // 'school_contact_emails:email',
            // 'school_contact_numbers',
            // 'school_vendor_code',
// ];
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
					
					return Yii::$app->controller->renderPartial('_graderecords',[
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
// echo ExportMenu::widget([
		// 'dataProvider' => $dataProvider,
        // 'columns' => $exportedValues,
        // 'columnSelectorOptions'=>[
            // 'label' => 'Columns',
            // 'class' => 'btn btn-danger'
        // ],

        // 'fontAwesome' => true,
        // 'dropdownOptions' => [
            // 'label' => 'Export All',
            // 'class' => 'btn btn-success'
        // ]
	// ]);
/* @var $this yii\web\View */
/* @var $searchModel common\models\SchoolSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Grades';
$this->params['breadcrumbs'][] = $this->title;
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
        ['content'=>Html::a('Create Grade', ['create'], ['class' => 'btn btn-success'])
        ],
  //      '{export}',
        '{toggleData}',
    ],
    // set export properties
    // 'export'=>[
        // 'fontAwesome'=>true,
		// 'label' => 'Export',
    // ],
	'panel'=>[
        'type'=>GridView::TYPE_PRIMARY,
        'heading'=>'Grade List',
    ],
]); ?>
