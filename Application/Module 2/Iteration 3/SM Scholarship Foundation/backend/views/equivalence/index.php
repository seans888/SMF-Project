<?php

use yii\helpers\Html;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\EquivalenceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Equivalences';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="equivalence-index">
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'kartik\grid\SerialColumn'],

            'equivalence_id',
            'equivalence_numerical_grade',
            'equivalence_letter_grade',
            'equivalence_percentile_lower',
            'equivalence_percentile_upper',
            'equivalence_school_rating',
            'equivalence_foundation_rating',

            ['class' => 'kartik\grid\ActionColumn'],
        ],
    ]); ?>

</div>
