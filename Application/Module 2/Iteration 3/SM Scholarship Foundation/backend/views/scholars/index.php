<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use yii\helpers\ArrayHelper;
use common\models\Schools;
/* @var $this yii\web\View */
/* @var $searchModel common\models\ScholarsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Scholars';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="scholars-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Scholars', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
        <br>
	<p><h3><span style="background-color: #e7bd58"><b>Orange</b> rows are schools from NCR Areas</p></span>
	<p><h3><span style="background-color: #57dbee"><b>Blue</b> rows are schools from Provincial Areas</span></h3>
	</p>
    
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
		'pjax'=>true,
		'export'=>false,
    	'rowOptions'=>function($model){
    		if(strcasecmp($model->scholar_school_area, 'NCR') != 0)
    		{
    			return['class'=>'provincial-row'];
    		}
    		else if(strcasecmp($model->scholar_school_area, 'NCR') == 0)
    		{
    			return['class'=>'ncr-row'];
    		}
    	},
        'columns' => [
			['class' => 'kartik\grid\SerialColumn'],
            'scholar_id',
            [
				'class' => 'kartik\grid\EditableColumn',
				'attribute' => 'scholar_firstName',
			],
            [
				'class' => 'kartik\grid\EditableColumn',
				'attribute' => 'scholar_lastName',
			],
            [
				'class' => 'kartik\grid\EditableColumn',
				'attribute' => 'scholar_middleName',
			],
            [
				'class' => 'kartik\grid\EditableColumn',
				'attribute' => 'scholar_gender',
				'editableOptions' => [
					'inputType' => 'dropDownList',
					'pluginOptions'=>['allowClear'=>true],
					'data' => ["Male"=>"Male","Female"=>"Female"],
					'widgetClass'=> 'kartik\select2\Select2',
				],
			],
            [
				'class' => 'kartik\grid\EditableColumn',
            	'attribute'=>'scholar_school_id',
				'editableOptions' => [
					'inputType' => '\kartik\select2\Select2',
					'options'=>
					[
						'data' => ArrayHelper::map(Schools::find()->all(),'School_id','school_name'),
					],
				],
            	'value'=>'scholarSchool.school_name',
            ],
            [
				'class' => 'kartik\grid\EditableColumn',
				'attribute' => 'scholar_course',
			],
            [
				'class' => 'kartik\grid\EditableColumn',
				'attribute' => 'scholar_yearLevel',
			],
			[
				'class' => 'kartik\grid\EditableColumn',
				'attribute' => 'scholar_email',
			],
			[
				'class' => 'kartik\grid\EditableColumn',
				'attribute' => 'scholar_contactNum',
			],
   //       'scholar_school_area',

            ['class' => 'kartik\grid\ActionColumn'],
        ],
    ]); ?>

</div>
