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
			'uploaded_by',
			'checked_by',
			'updated_by',
			'checked_remark',

            ['class' => 'kartik\grid\ActionColumn'],
        ],
    ]); ?>

</div>
