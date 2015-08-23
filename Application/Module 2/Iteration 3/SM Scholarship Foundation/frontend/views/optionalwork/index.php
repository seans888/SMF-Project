<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ParttimejobsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Optional Jobs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="parttimejobs-index">
	<center style="margin-top:100px;"><h1>Optional Job Request History</h1><br> <p>
        <?= Html::a('Create Job Request', ['create'], ['class' => 'btn btn-success']) ?>
    </p></center>
	
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
		'showOnEmpty' => false,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'job_location',
            'job_startDate',
            'job_endDate',
            'job_description:ntext',

            
        ],
    ]); ?>

</div>
