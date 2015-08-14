<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Scholars */

$this->title = 'Create Scholars';
$this->params['breadcrumbs'][] = ['label' => 'Scholars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="scholars-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
