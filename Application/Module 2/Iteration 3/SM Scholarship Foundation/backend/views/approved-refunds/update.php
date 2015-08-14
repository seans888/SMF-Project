<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\ApprovedRefunds */

$this->title = 'Update Approved Refunds: ' . ' ' . $model->refund_id;
$this->params['breadcrumbs'][] = ['label' => 'Approved Refunds', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->refund_id, 'url' => ['view', 'id' => $model->refund_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="approved-refunds-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
