<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Tuition */

$this->title = 'Update Tuition: ' . ' ' . $model->tuition_id;
$this->params['breadcrumbs'][] = ['label' => 'Tuitions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tuition_id, 'url' => ['view', 'tuition_id' => $model->tuition_id, 'scholar_scholar_id' => $model->scholar_scholar_id, 'scholar_school_school_id' => $model->scholar_school_school_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tuition-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
