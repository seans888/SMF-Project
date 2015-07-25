<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Refunds */

$this->title = 'Create Refunds';
$this->params['breadcrumbs'][] = ['label' => 'Refunds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="refunds-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
