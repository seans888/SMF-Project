<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Failures */

$this->title = 'Create Failures';
$this->params['breadcrumbs'][] = ['label' => 'Failures', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="failures-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
