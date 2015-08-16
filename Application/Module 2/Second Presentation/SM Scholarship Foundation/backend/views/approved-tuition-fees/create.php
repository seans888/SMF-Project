<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\ApprovedTuitionFees */

$this->title = 'Create Approved Tuition Fees';
$this->params['breadcrumbs'][] = ['label' => 'Approved Tuition Fees', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="approved-tuition-fees-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
