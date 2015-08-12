<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Compile */

$this->title = 'My Yii Application';
$this->params['breadcrumbs'][] = ['label' => 'Compiles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="compile-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
