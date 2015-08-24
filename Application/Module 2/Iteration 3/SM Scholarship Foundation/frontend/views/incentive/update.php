<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Incentive */

$this->title = 'Update Incentive: ' . ' ' . $model->incentive_id;
$this->params['breadcrumbs'][] = ['label' => 'Incentives', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->incentive_id, 'url' => ['view', 'id' => $model->incentive_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="incentive-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
