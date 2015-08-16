<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\IncentiveSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Incentives';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="incentive-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Incentive', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'incentive_id',
            'scholar_scholar_id',
            'scholar_school_school_id',
            'scholar_allowance_allowance_area',
            'incentive_amount',
            // 'incentive_remark',
            // 'incentive_date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
