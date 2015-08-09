<?php

use yii\helpers\Html;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\GradesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Grades';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="grades-index">
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'kartik\grid\SerialColumn'],
       		// 'grade_scholar_id',
        	// [
        		// 'attribute'=>'grade_scholar_firstName',
        		// 'value'=>'gradeScholar.scholar_firstName',	
    		// ],
        	// [
       			// 'attribute'=>'grade_scholar_lastName',
     			// 'value'=>'gradeScholar.scholar_lastName',
       		// ],
        	// [
       			// 'attribute'=>'grade_scholar_middleName',
     			// 'value'=>'gradeScholar.scholar_middleName',
       		// ],
        	// [
       			// 'attribute'=>'School_id',
     			// 'value'=>'gradeSchool.school_name',
       		// ],
            'grade_schoolYear',
            'grade_Term',
			'grade_subject',
			'grade_units',
            'grade_value',
			'grade_status',
			'uploaded_by',
			'checked_by',
			'updated_by',
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
