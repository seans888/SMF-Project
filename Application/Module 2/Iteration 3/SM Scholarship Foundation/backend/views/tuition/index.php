<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\TuitionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tuitions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tuition-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tuition', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'tuition_id',
            'scholar_scholar_id',
            'scholar_school_school_id',
            'tuition_term',
            'tuition_school_year_start',
            // 'tuition_school_year_end',
            // 'tuition_enrollment_date',
            // 'tuition_amount',
            // 'tuition_paid_status',
            // 'tuition_payment_date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>