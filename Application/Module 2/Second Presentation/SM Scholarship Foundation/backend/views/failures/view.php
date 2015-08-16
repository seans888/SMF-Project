<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Failures */

$this->title = $model->fail_id;
$this->params['breadcrumbs'][] = ['label' => 'Failures', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="failures-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->fail_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->fail_id], [
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
            'fail_id',
            'fail_subject',
            'fail_units',
            'fail_scholar_id',
            'fail_school_id',
            'failures_scholar_lastName',
            'failures_scholar_firstName',
            'failures_scholar_middleName',
        ],
    ]) ?>

</div>
