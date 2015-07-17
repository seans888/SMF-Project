<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Failures */

$this->title = 'Update Failures: ' . ' ' . $model->fail_id;
$this->params['breadcrumbs'][] = ['label' => 'Failures', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->fail_id, 'url' => ['view', 'id' => $model->fail_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="failures-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
