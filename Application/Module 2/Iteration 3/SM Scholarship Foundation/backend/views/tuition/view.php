<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Tuition */

$this->title = $model->tuition_id;
$this->params['breadcrumbs'][] = ['label' => 'Tuitions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tuition-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'tuition_id' => $model->tuition_id, 'scholar_scholar_id' => $model->scholar_scholar_id, 'scholar_school_school_id' => $model->scholar_school_school_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'tuition_id' => $model->tuition_id, 'scholar_scholar_id' => $model->scholar_scholar_id, 'scholar_school_school_id' => $model->scholar_school_school_id], [
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
            'tuition_id',
            'scholar_scholar_id',
            'scholar_school_school_id',
            'tuition_term',
            'tuition_school_year_start',
            'tuition_school_year_end',
            'tuition_enrollment_date',
            'tuition_amount',
            'tuition_paid_status',
            'tuition_payment_date',
        ],
    ]) ?>

</div>
