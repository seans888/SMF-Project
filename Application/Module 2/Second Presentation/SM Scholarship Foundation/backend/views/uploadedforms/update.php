<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Uploadedforms */

$this->title = 'Update Uploadedforms: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Uploadedforms', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="uploadedforms-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
