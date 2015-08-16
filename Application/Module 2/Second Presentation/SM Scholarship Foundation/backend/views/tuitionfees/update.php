<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Tuitionfees */

$this->title = 'Update Tuitionfees: ' . ' ' . $model->tuitionfee_id;
$this->params['breadcrumbs'][] = ['label' => 'Tuitionfees', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tuitionfee_id, 'url' => ['view', 'id' => $model->tuitionfee_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tuitionfees-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
