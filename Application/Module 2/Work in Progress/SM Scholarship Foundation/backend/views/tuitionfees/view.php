<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Tuitionfees */

$this->title = $model->tuitionfee_id;
$this->params['breadcrumbs'][] = ['label' => 'Tuitionfees', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tuitionfees-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->tuitionfee_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->tuitionfee_id], [
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
            'tuitionfee_id',
            'tuitionfee_scholar_id',
            'tuitionfeeScholar.scholar_lastName',
            'tuitionfeeScholar.scholar_firstName',
            'tuitionfeeScholar.scholar_middleName',
            'tuitionfee_amount',
            'tuitionfee_dateOfEnrollment',
            'tuitionfee_dateOfPayment',
            'tuitionfee_paidStatus',
        ],
    ]) ?>

</div>
