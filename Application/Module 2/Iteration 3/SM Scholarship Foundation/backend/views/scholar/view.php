<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Scholar */

$this->title = $model->scholar_id;
$this->params['breadcrumbs'][] = ['label' => 'Scholars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="scholar-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'scholar_id' => $model->scholar_id, 'school_school_id' => $model->school_school_id, 'allowance_allowance_area' => $model->allowance_allowance_area], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'scholar_id' => $model->scholar_id, 'school_school_id' => $model->school_school_id, 'allowance_allowance_area' => $model->allowance_allowance_area], [
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
            'scholar_id',
            'school_school_id',
            'scholar_first_name',
            'scholar_middle_name',
            'scholar_last_name',
            'scholar_gender',
            'scholar_address',
            'scholar_course',
            'scholar_graduate_status',
            'scholar_year_level',
            'scholar_contact_email:email',
            'scholar_contact_number',
            'scholar_allowance_status',
            'scholar_cash_card_number',
            'scholar_type',
            'scholar_sponsor',
            'allowance_allowance_area',
        ],
    ]) ?>

</div>
