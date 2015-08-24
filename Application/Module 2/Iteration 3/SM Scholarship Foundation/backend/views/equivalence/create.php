<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Equivalence */

$this->title = 'Create Equivalence';
$this->params['breadcrumbs'][] = ['label' => 'Equivalences', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="equivalence-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
