<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\ApprovedAllowance */

$this->title = $model->allowance_id;
$this->params['breadcrumbs'][] = ['label' => 'Approved Allowances', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="approved-allowance-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->allowance_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->allowance_id], [
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
            'allowance_id',
            'allowance_amount',
            'allowance_remark',
            'allowance_scholar_id',
            'allowance_school_id',
            'allowance_payStatus',
            'allowance_paidDate',
            'allowance_status',
            'approval_status',
            'approved_by',
            'approved_remark',
        ],
    ]) ?>

</div>
