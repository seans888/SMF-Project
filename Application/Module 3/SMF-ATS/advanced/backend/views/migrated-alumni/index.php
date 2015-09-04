<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\MigratedAlumniSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Migratedalumnis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="migratedalumni-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Migratedalumni', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'migalu_id',
            'migalu_lastname',
            'migalu_firstname',
            'migalu_midinit',
            // 'migalu_address',
            // 'migalu_gender',
            // 'migalu_school',
            // 'migalu_course',
            // 'migalu_email:email',
            // 'migalu_contactno',
            // 'migalu_remarks',
            // 'migalu_area',
            // 'migalu_office_local_no',
            // 'migalu_year_graduated',
            // 'migalu_status',
            // 'migalu_cur_work',
            // 'migalu_prev_work',
            // 'migalu_achievements',
            // 'migalu_company',
            // 'migalu_legends',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
