<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\OptionalworkSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Optionalworks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="optionalwork-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Optionalwork', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'optionalwork_id',
            'scholar_scholar_id',
            'scholar_school_school_id',
            'optionalwork_location',
            'optionalwork_start_date',
            // 'optionalwork_end_date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
