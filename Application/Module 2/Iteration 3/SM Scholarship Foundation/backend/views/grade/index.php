<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use kartik\export\ExportMenu;
use common\models\GradeSearch;

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
            'school_name',
            'school_area',
];
$exportedValues =
[
	['class' => 'kartik\grid\SerialColumn'],
	[
		'attribute'=>'grade_id',
		'pageSummary'=>'Total'
	],
	'subject_subject_id',
	[
		'attribute'=>'subject_scholar_scholar_id',
		'pageSummary'=>true
	],
	'subject_scholar_school_school_id',
	'grade_school_year_start',
	'grade_school_year_end',
	'grade_raw_grade',
	'grade_approval_status',
	'grade_approved_by',
];
$searchModel3 = new GradeSearch();
$dataProvider3 = $searchModel3->search(Yii::$app->request->queryParams);
$export = ExportMenu::widget([
		'dataProvider' => $dataProvider3,
        'columns' => $exportedValues,
        'columnSelectorOptions'=>[
            'label' => 'Columns',
            'class' => 'btn btn-danger'
        ],

        'fontAwesome' => true,
        'dropdownOptions' => [
            'label' => 'Export All',
            'class' => 'btn btn-success'
        ]
	]);
/* @var $this yii\web\View */
/* @var $searchModel common\models\SchoolSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Grades';
$this->params['breadcrumbs'][] = $this->title;
?>
<?= Html::a('Group By School', ['index'], ['class' => 'btn btn-success']) ?>
<?= Html::a('Show Only Grade Records', ['index2'], ['class' => 'btn btn-success']) ?>
	<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
	'pjax' => true,
	'pjaxSettings' => ['neverTimeout' => true],
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
        ['content'=>Html::a('Create Grade', ['groupcreate'], ['class' => 'btn btn-success'])
        ],
        //'{export}',
        '{toggleData}',
		$export
		],
    // set export properties
    'export'=>[
        'fontAwesome'=>true,
		'label' => 'Export All',
		'target' => '_blank'
    ],
		'panel'=>[
        'type'=>GridView::TYPE_PRIMARY,
        'heading'=>'Grade List',
    ],
]); ?>
