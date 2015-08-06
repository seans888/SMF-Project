<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Family */

$this->title = 'Update Family: ' . ' ' . $model->fam_background_id;
$this->params['breadcrumbs'][] = ['label' => 'Families', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->fam_background_id, 'url' => ['view', 'id' => $model->fam_background_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="family-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
