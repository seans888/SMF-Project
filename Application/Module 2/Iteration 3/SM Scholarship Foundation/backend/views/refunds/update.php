<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Refunds */

$this->title = 'Update Refunds: ' . ' ' . $model->refund_id;
$this->params['breadcrumbs'][] = ['label' => 'Refunds', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->refund_id, 'url' => ['view', 'id' => $model->refund_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="refunds-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
