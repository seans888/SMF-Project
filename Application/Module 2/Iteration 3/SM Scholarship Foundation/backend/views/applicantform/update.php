<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Applicantform */

$this->title = 'Update Applicantform: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Applicantforms', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="applicantform-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
