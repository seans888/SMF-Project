<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Allowance */

$this->title = 'Update Allowance: ' . ' ' . $model->allowance_area;
$this->params['breadcrumbs'][] = ['label' => 'Allowances', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->allowance_area, 'url' => ['view', 'id' => $model->allowance_area]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="allowance-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
