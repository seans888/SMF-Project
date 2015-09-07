<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Event */

$this->title = $model->event_title;
$this->params['breadcrumbs'][] = ['label' => 'Events', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="event-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        
    </p>
	
	<?php	$roles = Yii::$app->user->identity->user_type;
			if ($roles == 'admin'){ ?>
			
	<?= Html::a('Update', ['update', 'id' => $model->event_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->event_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'event_id',
            'event_title',
            'event_descript',
            'event_date',
            'event_place',
            //'employee_employee_id',
        ],
    ]) ?>
	
	<?php	} else if ($roles == 'user'){ ?>
	
	<?= Html::a('Update', ['update', 'id' => $model->event_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->event_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
		
	<?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'event_id',
            'event_title',
            'event_descript',
            'event_date',
            'event_place',
            'employee_employee_id',
        ],
    ]) ?>
	
	
	<?php }else{ ?>
	
	<?= Html::a('Update', ['update', 'id' => $model->event_id], ['class' => 'btn btn-primary']) ?>
	
	<?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'event_id',
            'event_title',
            'event_descript',
            'event_date',
            'event_place',
            'employee_employee_id',
        ],
    ]) ?>
	
	<?php } ?>
</div>
