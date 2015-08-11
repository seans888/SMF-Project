<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ApprovedAllowanceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Approved Allowances';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="approved-allowance-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Approved Allowance', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'allowance_id',
            'allowance_amount',
            'allowance_remark',
            'allowance_scholar_id',
            'allowance_school_id',
            // 'allowance_payStatus',
            // 'allowance_paidDate',
            // 'allowance_status',
            // 'approval_status',
            // 'approved_by',
            // 'approved_remark',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
