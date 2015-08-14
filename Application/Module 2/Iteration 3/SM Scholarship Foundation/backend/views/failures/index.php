<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\FailuresSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Failures';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="failures-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Failures', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'fail_id',
            'fail_subject',
            'fail_units',
            'fail_scholar_id',
            'fail_school_id',
            // 'failures_scholar_lastName',
            // 'failures_scholar_firstName',
            // 'failures_scholar_middleName',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
