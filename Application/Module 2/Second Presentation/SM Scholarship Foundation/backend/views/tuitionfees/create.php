<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Tuitionfees */

$this->title = 'Create Tuitionfees';
$this->params['breadcrumbs'][] = ['label' => 'Tuitionfees', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tuitionfees-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
