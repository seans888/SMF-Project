<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Compile */

$this->title = 'Update Compile: ' . ' ' . $model->compile_id;
$this->params['breadcrumbs'][] = ['label' => 'Compiles', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->compile_id, 'url' => ['view', 'id' => $model->compile_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="compile-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
