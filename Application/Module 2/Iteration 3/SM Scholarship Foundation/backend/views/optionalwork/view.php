<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Optionalwork */

$this->title = $model->optionalwork_id;
$this->params['breadcrumbs'][] = ['label' => 'Optionalworks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="optionalwork-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'optionalwork_id' => $model->optionalwork_id, 'scholar_scholar_id' => $model->scholar_scholar_id, 'scholar_school_school_id' => $model->scholar_school_school_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'optionalwork_id' => $model->optionalwork_id, 'scholar_scholar_id' => $model->scholar_scholar_id, 'scholar_school_school_id' => $model->scholar_school_school_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
		<?= Html::a('View List', ['index'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'optionalwork_id',
            'scholar_scholar_id',
            'scholar_school_school_id',
            'optionalwork_location',
            'optionalwork_start_date',
            'optionalwork_end_date',
        ],
    ]) ?>

</div>
