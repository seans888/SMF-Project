<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Compile */

$this->title = $model->compile_id;
$this->params['breadcrumbs'][] = ['label' => 'Compiles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="compile-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->compile_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->compile_id], [
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
            'compile_id',
            'compile_scholar_id',
            'compile_school_id',
            'compile_tuitionfee_id',
            'compile_grade_id',
            'compile_scholar_firstName',
            'compile_scholar_lastName',
            'compile_scholar_middleName',
            'compile_school_name',
            'compile_school_area',
            'compile_pendingPaymentToSchool',
            'compile_pendingPaymentToStudent',
        ],
    ]) ?>

</div>
