<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\RefundsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Refunds';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="refunds-index">

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'refund_id',
            'refund_amount',
            'refund_smShare',
            'refund_scholarShare',
			'uploaded_by',
			'checked_by',
			'updated_by',
			'checked_remark',
            // 'refund_scholar_id',
            // 'refund_tuitionfee_id',
            // 'refund_description',
            // 'refund_date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
