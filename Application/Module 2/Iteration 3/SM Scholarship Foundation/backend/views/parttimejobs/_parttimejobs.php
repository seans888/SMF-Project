<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ParttimejobsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Part Time Jobs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="parttimejobs-index">
	
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
		'showOnEmpty' => false,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
		//	'job_scholar_id',
            'job_location',
            'job_startDate',
            'job_endDate',
            'job_description:ntext',

            
        ],
    ]); ?>

</div>
