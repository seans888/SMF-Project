<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\DeductionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Deductions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="deduction-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Deduction', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'deduction_id',
            'scholar_scholar_id',
            'scholar_school_school_id',
            'deduction_date',
            'deduction_amount',
            // 'deduction_remark',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
