<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Scholar */

$this->title = 'Records';
$this->params['breadcrumbs'][] = ['label' => 'Scholars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="scholar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
