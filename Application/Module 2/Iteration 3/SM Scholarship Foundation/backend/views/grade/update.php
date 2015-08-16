<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Grade */

$this->title = 'Update Grade: ' . ' ' . $model->grade_id;
$this->params['breadcrumbs'][] = ['label' => 'Grades', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->grade_id, 'url' => ['view', 'grade_id' => $model->grade_id, 'subject_subject_id' => $model->subject_subject_id, 'subject_scholar_scholar_id' => $model->subject_scholar_scholar_id, 'subject_scholar_school_school_id' => $model->subject_scholar_school_school_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="grade-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
