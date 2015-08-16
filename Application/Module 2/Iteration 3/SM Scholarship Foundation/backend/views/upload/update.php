<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Upload */

$this->title = 'Update Upload: ' . ' ' . $model->upload_id;
$this->params['breadcrumbs'][] = ['label' => 'Uploads', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->upload_id, 'url' => ['view', 'upload_id' => $model->upload_id, 'scholar_scholar_id' => $model->scholar_scholar_id, 'scholar_school_school_id' => $model->scholar_school_school_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="upload-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
