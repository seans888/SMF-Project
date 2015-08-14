<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\AlumniSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Alumnae';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="alumni-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

   

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'alumni_id',
            'alumni_firstname',
            'alumni_lastname',
            'alumni_midname',
            'alumni_course',
            // 'alumni_school',
            // 'alumni_year_graduated',
            // 'alumni_status',
            // 'alumni_email:email',
            // 'alumni_cur_work',
            // 'alumni_prev_work',
            // 'alumni_further_study',
            // 'user_user_id',
            // 'user_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
