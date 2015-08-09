<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\AcademicSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Academics';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="academic-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Academic', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Public_high_school_graduating_from',
            'complete_school_address',
            'principal_fullname',
            'section_no',
            'organization:ntext',
            'position_held:ntext',
            'academic_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
