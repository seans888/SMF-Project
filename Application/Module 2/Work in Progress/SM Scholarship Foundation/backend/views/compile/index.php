<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\CompileSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Compiles';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="compile-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Compile', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'compile_scholar_id',
            'compile_scholar_firstName',
            'compile_scholar_lastName',
            'compile_scholar_middleName',
            'compile_school_name',
            'compile_school_area',
            'compile_pendingPaymentToSchool',
            'compile_pendingPaymentToStudent',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
