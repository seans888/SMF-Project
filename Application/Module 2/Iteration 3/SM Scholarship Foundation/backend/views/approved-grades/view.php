<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\ApprovedGrades */

$this->title = $model->grade_id;
$this->params['breadcrumbs'][] = ['label' => 'Approved Grades', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="approved-grades-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->grade_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->grade_id], [
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
            'grade_schoolYear',
            'grade_Term',
            'grade_scholar_id',
            'grade_subject',
            'grade_units',
            'grade_value',
            'equivalence_grade_rule',
            'School_id',
            'approval_status',
            'approved_by',
            'approved_remark',
        ],
    ]) ?>

</div>
