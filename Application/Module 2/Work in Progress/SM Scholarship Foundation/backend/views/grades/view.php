<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Grades */

$this->title = $model->grade_id;
$this->params['breadcrumbs'][] = ['label' => 'Grades', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="grades-view">

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
        <?= Html::a('View List', ['index'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Check', ['check', 'id' => $model->grade_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Send for Approval', ['send', 'id' => $model->grade_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to send this for approval?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'grade_id',
			'gradeSchool.school_name',
            'grade_schoolYear',
            'grade_Term',
            'grade_scholar_id',
            'gradeScholar.scholar_lastName',
            'gradeScholar.scholar_firstName',
            'gradeScholar.scholar_middleName',
			'grade_subject',
			'grade_units',
            'grade_value',
			'equivalence_grade_rule',
            'uploaded_by',
            'updated_by',
            'checked_by',
            'checked_remark',
        ],
    ]) ?>

</div>
