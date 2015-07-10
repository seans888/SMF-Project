<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\GradesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Grades';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="grades-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Grades', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'grade_schoolYear',
            'grade_Term',
            'grade_scholar_id',
            'grade_scholar_lastName',
            'grade_scholar_firstName',
            'grade_scholar_middleName',
            'grade_value',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
