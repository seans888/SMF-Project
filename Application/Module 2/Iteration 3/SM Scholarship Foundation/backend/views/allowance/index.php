<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\AllowanceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Allowances';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="allowance-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Allowance', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'allowance_area',
            'allowance_amount',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
