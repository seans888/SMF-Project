<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Tuition */

$this->title = 'Update Registration Form and Tuition Details: '

?>
<div class="tuition-update">

    <h1 style="margin-top:100px;"><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
