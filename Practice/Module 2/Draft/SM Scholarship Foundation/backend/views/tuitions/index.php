<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\TuitionsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tuitions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tuitions-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tuitions', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
			
			'tuition_scholar_id',
            'tuition_full_amount',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
