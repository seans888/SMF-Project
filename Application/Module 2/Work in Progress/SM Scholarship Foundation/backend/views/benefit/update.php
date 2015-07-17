<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Benefit */

$this->title = 'Update Benefit: ' . ' ' . $model->benefit_id;
$this->params['breadcrumbs'][] = ['label' => 'Benefits', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->benefit_id, 'url' => ['view', 'id' => $model->benefit_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="benefit-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
