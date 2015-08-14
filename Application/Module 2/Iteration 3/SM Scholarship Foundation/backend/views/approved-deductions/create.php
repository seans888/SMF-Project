<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\ApprovedDeductions */

$this->title = 'Create Approved Deductions';
$this->params['breadcrumbs'][] = ['label' => 'Approved Deductions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="approved-deductions-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
