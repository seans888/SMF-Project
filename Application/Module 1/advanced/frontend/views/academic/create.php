<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Academic */

$this->title = 'Create Academic';
$this->params['breadcrumbs'][] = ['label' => 'Academic Background', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="academic-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
