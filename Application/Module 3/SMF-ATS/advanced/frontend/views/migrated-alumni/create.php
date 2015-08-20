<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\MigratedAlumni */

$this->title = 'Create Migrated Alumni';
$this->params['breadcrumbs'][] = ['label' => 'Migrated Alumnis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="migrated-alumni-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
