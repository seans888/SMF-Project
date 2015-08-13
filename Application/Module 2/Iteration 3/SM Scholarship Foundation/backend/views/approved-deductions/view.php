<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\ApprovedDeductions */

$this->title = $model->deduction_id;
$this->params['breadcrumbs'][] = ['label' => 'Approved Deductions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="approved-deductions-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->deduction_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->deduction_id], [
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
            'deduction_id',
            'deduction_date',
            'deduction_amount',
            'deduction_remark',
            'deduction_scholar_id',
            'approval_status',
            'approved_by',
            'approved_remark',
        ],
    ]) ?>

</div>
