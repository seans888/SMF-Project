<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Grades */


?>
<div class="grades-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model2' => $model2,
    ]) ?>

</div>
