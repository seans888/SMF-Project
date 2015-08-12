<?php

use yii\helpers\Html;
use kartik\grid\GridView;

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

    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'kartik\grid\SerialColumn'],
			'grade_scholar_id',
            'grade_schoolYear',
            'grade_Term',
            'grade_subject',
            'grade_units',
            'grade_value',
        //    'school.school_name',
            'approval_status',
            'approved_by',
            'approved_remark',

            ['class' => 'kartik\grid\ActionColumn'],
        ],
    ]); ?>

</div>
