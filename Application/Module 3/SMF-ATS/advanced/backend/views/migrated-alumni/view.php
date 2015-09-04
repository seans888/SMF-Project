<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\migratedalumni */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Migratedalumnis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="migratedalumni-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'migalu_id',
            'migalu_lastname',
            'migalu_firstname',
            'migalu_midinit',
            'migalu_address',
            'migalu_gender',
            'migalu_school',
            'migalu_course',
            'migalu_email:email',
            'migalu_contactno',
            'migalu_remarks',
            'migalu_area',
            'migalu_office_local_no',
            'migalu_year_graduated',
            'migalu_status',
            'migalu_cur_work',
            'migalu_prev_work',
            'migalu_achievements',
            'migalu_company',
            'migalu_legends',
        ],
    ]) ?>

</div>
