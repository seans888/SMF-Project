<?php

use yii\helpers\Html;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\DeductionsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Deductions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="deductions-index">

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'kartik\grid\SerialColumn'],

//            'deduction_id',
            'deduction_date',
            'deduction_amount',
            'deduction_remark',
			'uploaded_by',
			'updated_by',
			'checked_by',
			'checked_remark',
//            'deduction_scholar_id',

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

</div>
