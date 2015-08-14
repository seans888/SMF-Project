<?php

use yii\helpers\Html;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\RefundsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Refunds';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="refunds-index">

    <center><h1 style="margin-top:100px"><?= Html::encode($this->title) ?></h1></center>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

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
            // 'uploaded_by',
            // 'checked_by',
            // 'checked_remark',
            // 'updated_by',

            
        ],
    ]); ?>

</div>
