<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\ApprovedAllowance */

$this->title = 'Create Approved Allowance';
$this->params['breadcrumbs'][] = ['label' => 'Approved Allowances', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="approved-allowance-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
