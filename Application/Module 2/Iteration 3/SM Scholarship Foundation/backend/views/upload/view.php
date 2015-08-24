<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Upload */

$this->title = $model->upload_id;
$this->params['breadcrumbs'][] = ['label' => 'Uploads', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="upload-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->upload_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->upload_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('View List', ['index', 'id' => $model->upload_id], ['class' => 'btn btn-success']) ?>
		<?= Html::a('View/Download', ['download','id' => $model->upload_id], ['class' => 'btn btn-alert']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'upload_id',
            'scholar_scholar_id',
            'scholar_school_school_id',
            'upload_form',
            'upload_file_name',
        ],
    ]) ?>

</div>
