<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Alumni */

$this->title = $model->alumni_id;
$this->params['breadcrumbs'][] = ['label' => 'Alumnis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="alumni-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->alumni_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->alumni_id], [
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
            'alumni_id',
            'alumni_firstname',
            'alumni_lastname',
            'alumni_midname',
            'alumni_course',
            'alumni_school',
            'alumni_year_graduated',
            'alumni_status',
            'alumni_email:email',
            'alumni_cur_work',
            'alumni_prev_work',
            'alumni_further_study',
            'user_user_id',
            'user_id',
        ],
    ]) ?>

</div>
