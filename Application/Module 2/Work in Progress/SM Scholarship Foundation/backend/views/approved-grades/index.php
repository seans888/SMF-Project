<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ApprovedGradesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Approved Grades';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="approved-grades-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Approved Grades', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'grade_id',
            'grade_schoolYear',
            'grade_Term',
            'grade_scholar_id',
            'grade_subject',
            // 'grade_units',
            // 'grade_value',
            // 'equivalence_grade_rule',
            // 'School_id',
            // 'approval_status',
            // 'approved_by',
            // 'approved_remark',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
