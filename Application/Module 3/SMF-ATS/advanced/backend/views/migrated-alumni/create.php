<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\migratedalumni */

$this->title = 'Create Migratedalumni';
$this->params['breadcrumbs'][] = ['label' => 'Migratedalumnis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="migratedalumni-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
