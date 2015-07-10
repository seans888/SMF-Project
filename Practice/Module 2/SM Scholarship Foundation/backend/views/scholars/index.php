<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ScholarsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Scholars';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="scholars-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Scholars', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'scholar_id',
            'scholar_firstName',
            'scholar_lastName',
            'scholar_middleName',
            'scholar_gender',
            'scholar_address',
            'scholar_school_id',
            'scholar_course',
            'scholar_yearLevel',
            'scholar_email:email',
            'scholar_contactNum',
            'scholar_cashCardNum',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
