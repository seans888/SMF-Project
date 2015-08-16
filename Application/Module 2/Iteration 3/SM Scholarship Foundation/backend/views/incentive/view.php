<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Incentive */

$this->title = $model->incentive_id;
$this->params['breadcrumbs'][] = ['label' => 'Incentives', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="incentive-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'incentive_id' => $model->incentive_id, 'scholar_scholar_id' => $model->scholar_scholar_id, 'scholar_school_school_id' => $model->scholar_school_school_id, 'scholar_allowance_allowance_area' => $model->scholar_allowance_allowance_area], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'incentive_id' => $model->incentive_id, 'scholar_scholar_id' => $model->scholar_scholar_id, 'scholar_school_school_id' => $model->scholar_school_school_id, 'scholar_allowance_allowance_area' => $model->scholar_allowance_allowance_area], [
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
            'incentive_id',
            'scholar_scholar_id',
            'scholar_school_school_id',
            'scholar_allowance_allowance_area',
            'incentive_amount',
            'incentive_remark',
            'incentive_date',
        ],
    ]) ?>

</div>
