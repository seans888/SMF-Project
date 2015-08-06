<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Family */

$this->title = $model->fam_background_id;
$this->params['breadcrumbs'][] = ['label' => 'Families', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="family-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->fam_background_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->fam_background_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
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
        ],
    ]) ?>

</div>
