<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\WithholdingSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Withholdings';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="withholding-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Withholding', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'withholding_id',
            'scholar_scholar_id',
            'scholar_school_school_id',
            'scholar_allowance_allowance_area',
            'withholding_start_date',
            // 'withholding_end_date',
            // 'withholding_remark',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
