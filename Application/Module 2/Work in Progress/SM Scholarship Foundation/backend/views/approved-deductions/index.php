<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ApprovedDeductionsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Approved Deductions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="approved-deductions-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Approved Deductions', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'deduction_id',
            'deduction_date',
            'deduction_amount',
            'deduction_remark',
            'deduction_scholar_id',
            // 'approval_status',
            // 'approved_by',
            // 'approved_remark',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
