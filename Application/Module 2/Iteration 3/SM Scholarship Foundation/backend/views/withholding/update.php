<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Withholding */

$this->title = 'Update Withholding: ' . ' ' . $model->withholding_id;
$this->params['breadcrumbs'][] = ['label' => 'Withholdings', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->withholding_id, 'url' => ['view', 'withholding_id' => $model->withholding_id, 'scholar_scholar_id' => $model->scholar_scholar_id, 'scholar_school_school_id' => $model->scholar_school_school_id, 'scholar_allowance_allowance_area' => $model->scholar_allowance_allowance_area]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="withholding-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
