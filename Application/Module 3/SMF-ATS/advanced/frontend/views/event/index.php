<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\EventSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Events';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="event-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        
    </p>
	
		<?php	$roles = Yii::$app->user->identity->user_type;
			if ($roles == 'admin'){ ?>
			
	<?= Html::a('Create Event', ['create'], ['class' => 'btn btn-success']) ?>
	<?= Html::a('View Event', ['calendar'], ['class' => 'btn btn-success']) ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'event_id',
            'event_title',
            'event_descript',
            'event_date',
            'event_place',
            // 'employee_employee_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
	
	<?php	} else if ($roles == 'user'){ ?>
	<?= Html::a('Create Event', ['create'], ['class' => 'btn btn-success']) ?>
	<?= Html::a('View Event', ['calendar'], ['class' => 'btn btn-success']) ?>
	
	<?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'event_id',
            'event_title',
            'event_descript',
            'event_date',
            'event_place',
            // 'employee_employee_id',

           	['class' => 'yii\grid\ActionColumn','template'=>'{view}'], 
            ['class' => 'yii\grid\ActionColumn','template'=>'{update}'],
        ],
    ]); ?>
	
	<?php }else{ ?>
	<?= Html::a('View Event', ['calendar'], ['class' => 'btn btn-success']) ?>
	<?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'event_id',
            'event_title',
            'event_descript',
            'event_date',
            'event_place',
            // 'employee_employee_id',

           	['class' => 'yii\grid\ActionColumn','template'=>'{view}'], 
        ],
    ]); ?>
	
	
	
	<?php } ?>
	

</div>
