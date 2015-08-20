<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\TestimonialsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Testimonials';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="testimonials-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        
    </p>

	<?php	$roles = Yii::$app->user->identity->user_type;
			if ($roles == 'admin'){ ?>
	<?= Html::a('Create Testimonials', ['create'], ['class' => 'btn btn-success']) ?>
	
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'testimonial_name',
            'testimonial_description',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
	
	<?php	} else if ($roles == 'user'){ ?>
	<?= Html::a('Create Testimonials', ['create'], ['class' => 'btn btn-success']) ?>
	
	<?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'testimonial_name',
            'testimonial_description',

            ['class' => 'yii\grid\ActionColumn','template'=>'{view}'], 
            ['class' => 'yii\grid\ActionColumn','template'=>'{update}'],
        ],
    ]); ?>
	
	<?php }else{ ?>
	
	<?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'testimonial_name',
            'testimonial_description',

            ['class' => 'yii\grid\ActionColumn','template'=>'{view}'], 
        ],
    ]); ?>
	
	<?php } ?>

</div>
