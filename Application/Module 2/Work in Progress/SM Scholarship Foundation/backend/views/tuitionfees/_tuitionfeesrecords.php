<?php

use yii\helpers\ArrayHelper;
use common\models\Tuitionfees;
use yii\widgets\Pjax;
use yii\helpers\Html;
use kartik\grid\GridView;
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
	<?php Pjax::begin(['timeout'=>10000]); ?>
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
            ['class' => 'kartik\grid\SerialColumn'],

         //   'tuitionfee_scholar_id',
            // [
				// 'attribute'=>'tuitionfee_scholar_lastName',
				// 'value'=>'tuitionfeeScholar.scholar_lastName',
			// ],
            // [
				// 'attribute'=>'tuitionfee_scholar_firstName',
				// 'value'=>'tuitionfeeScholar.scholar_firstName',
			// ],
            // [
				// 'attribute'=>'tuitionfee_scholar_middleName',
				// 'value'=>'tuitionfeeScholar.scholar_middleName',
			// ],
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
			'tuitionfee_status',
			'uploaded_by',
			'checked_by',
			'checked_remark',
			'tuitionfee_paidStatus',
                        ['class' => 'kartik\grid\ActionColumn',
                          'template'=>'{view} {update} {check} {delete}',
                            'buttons'=>[
                              'update' => function ($url, $model) {     
                                return Html::a('<span class="glyphicon glyphicon-pencil"></span>', $url, [
                                        'title' => Yii::t('yii', 'Update'),
                                ]);                                
            
                              },
							  'check' => function ($url, $model) {     
                                return Html::a('<span class="glyphicon glyphicon-check"></span>', $url, [
                                        'title' => Yii::t('yii', 'Check'),
                                ]);                                
            
                              },
							  'delete' => function ($url, $model) {     
                                return Html::a('<span class="glyphicon glyphicon-trash"></span>', $url, [
                                        'title' => Yii::t('yii', 'Delete'),
										'data-confirm' => Yii::t('kvgrid', 'Are you sure to delete this item?'),
										'data-method' => 'post',
										'data-pjax' => '0'
                                ]);                                
            
                              },
                          ]                            
                            ],
        ],
    ]); ?>
	<?php Pjax::end(); ?>
</div>
