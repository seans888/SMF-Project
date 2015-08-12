<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\ApprovedUploadedforms */

$this->title = 'Create Approved Uploadedforms';
$this->params['breadcrumbs'][] = ['label' => 'Approved Uploadedforms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="approved-uploadedforms-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
