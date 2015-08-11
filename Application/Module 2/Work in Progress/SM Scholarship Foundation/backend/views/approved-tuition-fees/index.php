<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ApprovedTuitionFeesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Approved Tuition Fees';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="approved-tuition-fees-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Approved Tuition Fees', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'tuitionfee_id',
            'tuitionfee_scholar_id',
            'tuitionfee_term',
            'tuitionfee_amount',
            'tuitionfee_dateOfEnrollment',
            // 'tuitionfee_dateOfPayment',
            // 'tuitionfee_paidStatus',
            // 'approval_status',
            // 'approved_by',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
