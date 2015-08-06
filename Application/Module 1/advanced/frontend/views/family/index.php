<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\FamilySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Families';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="family-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Family', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'fam_background_id',
            'name_of_father',
            'father_occupation',
            'father_company_address:ntext',
            'father_phonenum',
            'father_birthdate',
            'name_of_mother',
            'mother_occupation',
            'mother_company_address:ntext',
            'mother_phonenum',
            'mother_birthdate',
            'sibling1_name',
            'sibling1_age',
            'sibling1_school',
            'sibling1_grade_or_year',
            'sibling1_employed',
            'sibling1_married',
            'sibling2_name',
            'sibling2_age',
            'sibling2_school',
            'sibling2_grade_or_year',
            'sibling2_employed',
            'sibling2_married',
            'income_per_year',
            'income_per_year_in_words',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
