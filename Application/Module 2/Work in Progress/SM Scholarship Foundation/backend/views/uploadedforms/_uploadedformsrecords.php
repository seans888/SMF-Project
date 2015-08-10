<?php

use yii\helpers\Html;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\UploadedformsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Uploadedforms';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="uploadedforms-index">

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'kartik\grid\SerialColumn'],
  //          'uploaded_scholar_id',
			// [
				// 'attribute'=>'scholar_lastName',
				// 'value'=>'scholar.scholar_lastName',
			// ],
			// [
				// 'attribute'=>'scholar_firstName',
				// 'value'=>'scholar.scholar_firstName',
			// ],
			// [
				// 'attribute'=>'scholar_middleName',
				// 'value'=>'scholar.scholar_middleName',
			// ],
	[
        'attribute' => 'file',
        'format' => 'html',    
        'value' => function ($data) {
            return Html::img(Yii::getAlias('@web').'/'. $data['uploadedForm'],
                ['width' => '70px']);
        },
    ],
            'uploadedForm',
            'fileName',
			'uploaded_by',
			'updated_by',
			'checked_by',
			'checked_remark',

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
