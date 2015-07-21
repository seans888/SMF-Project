<?php

use yii\helpers\ArrayHelper;
use common\models\Tuitionfees;
use yii\widgets\Pjax;
use yii\helpers\Html;
use yii\grid\GridView;
use dosamigos\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $searchModel common\models\TuitionfeesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tuitionfees';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tuitionfees-index">
	<br>
	<p><b><font color=red>Red</font> rows have unsettled tuition fee payments</p>
	<p><font color=green>Green</font> rows have paid tuition fees</b>
	</p>
	<?php Pjax::begin(); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
		'rowOptions'=>function($model){
			if($model->tuitionfee_paidStatus=='not paid')
			{
				return['class'=>'danger'];
			}
			else if($model->tuitionfee_paidStatus=='paid')
			{
				return['class'=>'success'];
			}
		},
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'tuitionfee_scholar_id',
            [
				'attribute'=>'tuitionfee_scholar_lastName',
				'value'=>'tuitionfeeScholar.scholar_lastName',
			],
            [
				'attribute'=>'tuitionfee_scholar_firstName',
				'value'=>'tuitionfeeScholar.scholar_firstName',
			],
            [
				'attribute'=>'tuitionfee_scholar_middleName',
				'value'=>'tuitionfeeScholar.scholar_middleName',
			],
            'tuitionfee_amount',
            [
				'attribute'=>'tuitionfee_dateOfEnrollment',
				'value'=>'tuitionfee_dateOfEnrollment',
				'format'=>'raw',
				'filter'=>DatePicker::widget([
					'model' => $searchModel,
					'attribute' => 'tuitionfee_dateOfEnrollment',
						'clientOptions' => [
							'autoclose' => true,
							'format' => 'yyyy-mm-dd',
						]
				]),
			],
             [
				'attribute'=>'tuitionfee_dateOfPayment',
				'value'=>'tuitionfee_dateOfPayment',
				'format'=>'raw',
				'filter'=>DatePicker::widget([
					'model' => $searchModel,
					'attribute' => 'tuitionfee_dateOfPayment',
						'clientOptions' => [
							'autoclose' => true,
							'format' => 'yyyy-mm-dd',
						]
				]),
			],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
	<?php Pjax::end(); ?>
</div>
