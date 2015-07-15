<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Benefit */

$this->title = 'Create Benefit';
$this->params['breadcrumbs'][] = ['label' => 'Benefits', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="benefit-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
