<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Grades */

$this->title = 'Upload your Grade Sheet';
$this->params['breadcrumbs'][] = ['label' => 'Grades', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="grades-create">

    <h1 style ="margin-top:100px;"><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
