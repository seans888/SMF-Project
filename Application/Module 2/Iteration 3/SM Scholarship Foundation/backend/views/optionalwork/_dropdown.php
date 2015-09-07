<?php

use yii\helpers\Html;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\OptionalworkSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Optionalworks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="optionalwork-index">

    <?= GridView::widget([
	//only optional work stuff here
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
			
			/*
            'scholar_scholar_id',
            'scholar_school_school_id',
			//my edit
			[
				
				'attribute' => 'firstName',
				'value' => 'scholarScholar.scholar_first_name'
			],
			[
				'attribute' => 'middleName',
				'value' => 'scholarScholar.scholar_middle_name'
			],
			[
				'attribute' => 'lastName',
				'value' => 'scholarScholar.scholar_last_name'
			],
			//my edit
			*/
			[
				// 'class' => 'kartik\grid\EditableColumn',
				'attribute' => 'optional_work_company_name',
			],
			[
				// 'class' => 'kartik\grid\EditableColumn',
				'attribute' => 'optionalwork_location',
			],
            [
				// 'class' => 'kartik\grid\EditableColumn',
            	'attribute'=>'optionalwork_start_date',
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
            [
				// 'class' => 'kartik\grid\EditableColumn',
            	'attribute'=>'optionalwork_end_date',
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
			
	//this is the edit column
	['class' => 'yii\grid\ActionColumn'],

        ],
    ]); ?>

</div>