<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Deductions */

$this->title = 'Create Deductions';
$this->params['breadcrumbs'][] = ['label' => 'Deductions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="deductions-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
