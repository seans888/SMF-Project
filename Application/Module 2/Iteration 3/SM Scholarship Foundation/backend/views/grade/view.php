<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Grade */

$this->title = $model->grade_id;
$this->params['breadcrumbs'][] = ['label' => 'Grades', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="grade-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'grade_id' => $model->grade_id, 'subject_subject_id' => $model->subject_subject_id, 'subject_scholar_scholar_id' => $model->subject_scholar_scholar_id, 'subject_scholar_school_school_id' => $model->subject_scholar_school_school_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'grade_id' => $model->grade_id, 'subject_subject_id' => $model->subject_subject_id, 'subject_scholar_scholar_id' => $model->subject_scholar_scholar_id, 'subject_scholar_school_school_id' => $model->subject_scholar_school_school_id], [
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
            'grade_id',
            'subject_subject_id',
            'subject_scholar_scholar_id',
            'subject_scholar_school_school_id',
            'grade_school_year_start',
            'grade_school_year_end',
            'grade_raw_grade',
            'grade_approval_status',
            'grade_approved_by',
        ],
    ]) ?>

</div>
