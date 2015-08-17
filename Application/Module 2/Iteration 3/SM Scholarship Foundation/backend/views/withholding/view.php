<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Withholding */

$this->title = $model->withholding_id;
$this->params['breadcrumbs'][] = ['label' => 'Withholdings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="withholding-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'withholding_id' => $model->withholding_id, 'scholar_scholar_id' => $model->scholar_scholar_id, 'scholar_school_school_id' => $model->scholar_school_school_id, 'scholar_allowance_allowance_area' => $model->scholar_allowance_allowance_area], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'withholding_id' => $model->withholding_id, 'scholar_scholar_id' => $model->scholar_scholar_id, 'scholar_school_school_id' => $model->scholar_school_school_id, 'scholar_allowance_allowance_area' => $model->scholar_allowance_allowance_area], [
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
            'withholding_id',
            'scholar_scholar_id',
            'scholar_school_school_id',
            'scholar_allowance_allowance_area',
            'withholding_start_date',
            'withholding_end_date',
            'withholding_remark',
        ],
    ]) ?>

</div>