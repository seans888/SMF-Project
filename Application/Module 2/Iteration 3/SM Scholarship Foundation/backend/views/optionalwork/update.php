<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Optionalwork */

$this->title = 'Update Optionalwork: ' . ' ' . $model->optionalwork_id;
$this->params['breadcrumbs'][] = ['label' => 'Optionalworks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->optionalwork_id, 'url' => ['view', 'optionalwork_id' => $model->optionalwork_id, 'scholar_scholar_id' => $model->scholar_scholar_id, 'scholar_school_school_id' => $model->scholar_school_school_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="optionalwork-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
