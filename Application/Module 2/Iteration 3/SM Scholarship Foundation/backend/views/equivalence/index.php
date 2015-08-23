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

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Equivalence', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'kartik\grid\SerialColumn'],

            'equivalence_id',
            'school_school_id',
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
