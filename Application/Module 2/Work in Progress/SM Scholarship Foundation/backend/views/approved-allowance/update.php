<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\ApprovedAllowance */

$this->title = 'Update Approved Allowance: ' . ' ' . $model->allowance_id;
$this->params['breadcrumbs'][] = ['label' => 'Approved Allowances', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->allowance_id, 'url' => ['view', 'id' => $model->allowance_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="approved-allowance-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
