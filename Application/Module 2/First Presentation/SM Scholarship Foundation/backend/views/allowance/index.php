<?php

use yii\helpers\Html;
use yii\grid\GridView;
use dosamigos\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $searchModel common\models\AllowanceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Allowances';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="allowance-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Allowance', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <br>
	<p><b><font color=red>Red</font> rows have unsettled payments</p>
	<p><font color=green>Green</font> rows have settled payments</b>
	</p>
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
            ['class' => 'yii\grid\SerialColumn'],

//          'allowance_id',
//          'allowance_school_id',
//          'allowance_payStatus',
//          'benefit_allowance_id',
//          'allowance_remark',
			'allowanceSchool.school_area',
            'allowance_amount',
            'allowance_scholar_id',
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
