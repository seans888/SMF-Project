<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ApprovedRefundsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Approved Refunds';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="approved-refunds-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Approved Refunds', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'refund_id',
            'refund_amount',
            'refund_smShare',
            'refund_scholarShare',
            'refund_scholar_id',
            // 'refund_tuitionfee_id',
            // 'refund_description',
            // 'refund_date',
            // 'approval_status',
            // 'approved_by',
            // 'approved_remark',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
