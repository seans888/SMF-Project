<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Tuitions */

$this->title = $model->tuition_id;
$this->params['breadcrumbs'][] = ['label' => 'Tuitions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tuitions-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->tuition_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->tuition_id], [
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
            'tuition_full_amount',
            'tuition_scholar_id',
        ],
    ]) ?>

</div>
