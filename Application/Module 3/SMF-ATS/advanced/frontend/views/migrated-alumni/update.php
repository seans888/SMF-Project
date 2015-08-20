<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\MigratedAlumni */

$this->title = 'Update Migrated Alumni: ' . ' ' . $model->migalu_lastname. ',' .$model->migalu_firstname;
$this->params['breadcrumbs'][] = ['label' => 'Migrated Alumnis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="migrated-alumni-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
