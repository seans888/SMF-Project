<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Schools */

$this->title = 'Update Schools: ' . ' ' . $model->School_id;
$this->params['breadcrumbs'][] = ['label' => 'Schools', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->School_id, 'url' => ['view', 'id' => $model->School_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="schools-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
