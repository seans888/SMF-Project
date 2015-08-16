<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Deduction */

$this->title = 'Create Deduction';
$this->params['breadcrumbs'][] = ['label' => 'Deductions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="deduction-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
