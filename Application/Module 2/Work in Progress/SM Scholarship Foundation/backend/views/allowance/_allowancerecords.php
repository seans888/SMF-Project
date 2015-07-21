<?php

use yii\helpers\Html;
use yii\grid\GridView;
use dosamigos\datepicker\DatePicker;
use common\models\ScholarsSearch;
/* @var $this yii\web\View */
/* @var $searchModel common\models\AllowanceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Allowances';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="allowance-index">
<font color=red>Red</font> means the allowance is unsettled<br>
<font color=Blue>Blue</font> means the allowance is settled
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
    	'rowOptions'=>function($model){
    		if($model->allowance_payStatus=='not paid')
    		{
    			return['class'=>'danger'];
    		}
    		else if($model->allowance_payStatus=='paid')
    		{
    			return['class'=>'success'];
    		}
    	},
        'columns' => [

//          'allowance_id',
//          'allowance_school_id',
//          'allowance_payStatus',
//          'benefit_allowance_id',
//          'allowance_remark',
//			'allowanceSchool.school_area',
            'allowance_amount',
//            'allowance_scholar_id',
        	[
        		'attribute'=>'allowance_scholar_lastName',
        		'value'=>'allowanceScholar.scholar_lastName',
        	],
        	[
        	'attribute'=>'allowance_scholar_firstName',
        	'value'=>'allowanceScholar.scholar_firstName',
        	],
        	[
        	'attribute'=>'allowance_scholar_middleName',
        	'value'=>'allowanceScholar.scholar_middleName',
        	],     		
[
				'attribute'=>'allowance_paidDate',
				'value'=>'allowance_paidDate',
				'format'=>'raw',
				'filter'=>DatePicker::widget([
					'model' => $searchModel,
					'attribute' => 'allowance_paidDate',
						'clientOptions' => [
							'autoclose' => true,
							'format' => 'yyyy-mm-dd',
						]
				]),
			],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
