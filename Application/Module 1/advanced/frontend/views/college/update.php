<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\College */

$this->title = 'Update College: ' . ' ' . $model->college_plan_id;
$this->params['breadcrumbs'][] = ['label' => 'Colleges', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->college_plan_id, 'url' => ['view', 'id' => $model->college_plan_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="college-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
