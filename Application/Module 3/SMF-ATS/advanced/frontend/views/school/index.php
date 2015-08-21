<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\SchoolSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Schools';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="school-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create School', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
	
	<?php	$roles = Yii::$app->user->identity->user_type;
			if ($roles == 'admin'){ ?>
	

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'school_name',
            'school_area',
            'school_address',
            'school_email:email',
            // 'school_contact',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
	
	<?php	} else if ($roles == 'user'){ ?>
	
	 <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'school_name',
            'school_area',
            'school_address',
            'school_email:email',
            // 'school_contact',

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
            'school_name',
            'school_area',
            'school_address',
            'school_email:email',
            // 'school_contact',

            ['class' => 'yii\grid\ActionColumn','template'=>'{view}'],
        ],
    ]); ?>
	
	<?php } ?>

</div>
