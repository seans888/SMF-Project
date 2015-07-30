<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use common\models\DeductionsSearch;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\ScholarsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Deductions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="scholars-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Input Deductions', ['create'], ['class' => 'btn btn-primary']) ?>
    </p>
    <br>
	<p><b><font color=e7bd58>Orange</font> rows are scholars from NCR Areas</p>
	<p><font color=988db2>Purple</font> rows are scholars from Provincial Areas</b>
	</p>
    <?php Pjax::begin(['timeout'=>10000]); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
    	'rowOptions'=>function($model){
    		if($model->scholar_school_area=='Provincial')
    		{
    			return['class'=>'provincial-row'];
    		}
    		else if($model->scholar_school_area=='NCR')
    		{
    			return['class'=>'ncr-row'];
    		}
    	},
        'columns' => [
            [
				'class' => 'kartik\grid\ExpandRowColumn',
				'value' => function($model, $key, $index, $column){
					return GridView::ROW_COLLAPSED;
				},
				'detail' => function ($model, $key, $index, $column){
					$searchModel = new DeductionsSearch();
					$searchModel -> deduction_scholar_id = $model->scholar_id;
					$dataProvider = $searchModel->search(Yii::$app->request->queryParams);
					
					return Yii::$app->controller->renderPartial('_deductionrecords',[
						'searchModel' => $searchModel,
						'dataProvider' => $dataProvider,
					]);
				},
			],

            'scholar_id',
            'scholar_firstName',
            'scholar_lastName',
            'scholar_middleName',
            // 'scholar_gender',
            // 'scholar_address',
            [
            	'attribute'=>'scholar_school_id',
            	'value'=>'scholarSchool.school_name',
            ],
            'scholar_course',
            'scholar_yearLevel',
            // 'scholar_email:email',
            // 'scholar_contactNum',
            // 'scholar_cashCardNum',
         // 'scholar_school_area',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
