<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Incentive */

$this->title = 'Update Incentive: ' . ' ' . $model->incentive_id;
$this->params['breadcrumbs'][] = ['label' => 'Incentives', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->incentive_id, 'url' => ['view', 'incentive_id' => $model->incentive_id, 'scholar_scholar_id' => $model->scholar_scholar_id, 'scholar_school_school_id' => $model->scholar_school_school_id, 'scholar_allowance_allowance_area' => $model->scholar_allowance_allowance_area]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="incentive-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
