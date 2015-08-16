<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Deduction */

$this->title = 'Update Deduction: ' . ' ' . $model->deduction_id;
$this->params['breadcrumbs'][] = ['label' => 'Deductions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->deduction_id, 'url' => ['view', 'deduction_id' => $model->deduction_id, 'scholar_scholar_id' => $model->scholar_scholar_id, 'scholar_school_school_id' => $model->scholar_school_school_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="deduction-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
