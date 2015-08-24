<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Optionalwork */

$this->title = 'Create a Summer or Christmas Job Request';
$this->params['breadcrumbs'][] = ['label' => 'Optionalworks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="optionalwork-create">

    <h1 style="margin-top:150px;"><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
