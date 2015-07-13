<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\GradesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Grades';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="grades-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Grades', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
       		'grade_scholar_id',
        	[
        		'attribute'=>'grade_scholar_firstName',
        		'value'=>'gradeScholar.scholar_firstName',	
    		],
        	[
       			'attribute'=>'grade_scholar_lastName',
     			'value'=>'gradeScholar.scholar_lastName',
       		],
        	[
       			'attribute'=>'grade_scholar_middleName',
     			'value'=>'gradeScholar.scholar_middleName',
       		],
            'grade_schoolYear',
            'grade_Term',
            'grade_value',
            'grade_grade_form',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
