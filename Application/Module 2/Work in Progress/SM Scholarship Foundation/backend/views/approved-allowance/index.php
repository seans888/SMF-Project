<?php

use yii\helpers\Html;
use kartik\grid\GridView;

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
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'kartik\grid\SerialColumn'],
			'allowance_scholar_id',
            'allowance_amount',
            'allowance_remark',
            'allowance_payStatus',
            'allowance_paidDate',
            'approval_status',
            'approved_by',
            'approved_remark',

            ['class' => 'kartik\grid\ActionColumn'],
        ],
    ]); ?>

</div>
