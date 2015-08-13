<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Parttimejobs */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Parttimejobs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="parttimejobs-view">

    <h1 style="margin-top:100px;"><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
            'job_location',
            'job_startDate',
            'job_endDate',
            'job_description:ntext',
        ],
    ]) ?>

</div>
