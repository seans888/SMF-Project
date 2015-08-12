<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\jui\Tabs;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\TuitionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tuitions';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="tuition-index">

    <center><h1 style="margin-top:100px;"><?= Html::encode($this->title) ?></h1></center><br>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

 <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
		'showOnEmpty' => false,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'tuitionfee_amount',
            'tuitionfees_term',
            'tuitionfee_dateOfEnrollment',
            'tuitionfee_dateOfPayment',
			'tuitionfee_paidStatus',
        ],
    ]); ?>
</div>
