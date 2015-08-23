<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Scholar */

$this->title = 'Update Scholar: ' . ' ' . $model->scholar_id;
$this->params['breadcrumbs'][] = ['label' => 'Scholars', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->scholar_id, 'url' => ['view', 'id' => $model->scholar_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="scholar-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
