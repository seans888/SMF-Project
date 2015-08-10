<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Allowance */

$this->title = $model->allowance_id;
$this->params['breadcrumbs'][] = ['label' => 'Allowances', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="allowance-view">

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
        <?= Html::a('View List', ['index'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'allowance_amount',
            'allowance_scholar_id',
            'allowance_school_id',
			'allowanceScholar.scholar_lastName',
			'allowanceScholar.scholar_firstName',
			'allowanceScholar.scholar_middleName',
            'allowance_payStatus',
			'allowance_status',
            'allowance_paidDate',
			'uploaded_by',
			'updated_by',
			'checked_by',
			'checked_remark',
        ],
    ]) ?>

</div>
