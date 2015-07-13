<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Tuition */

$this->title = 'Update Tuition: '
$this->params['breadcrumbs'][] = ['label' => 'Tuitions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tuitionfee_id, 'url' => ['view', 'id' => $model->tuitionfee_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tuition-update">

    <h1 style="margin-top:100px;"><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
