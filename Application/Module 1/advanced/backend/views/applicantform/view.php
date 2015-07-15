<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Applicantform */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Applicantforms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="applicantform-view">

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
            'last_name',
            'first_name',
            'middle_name',
            'city_address',
            'telephone_no',
            'email:email',
            'cellphone_no',
            'birthday',
            'status',
            'sex',
            'birth_place',
            'nationality',
            'height',
            'weight',
            'religion',
            'name_of_public_high_school_graduating_from',
            'section',
            'complete_address_of_school',
            'name_of_principal',
            'telephone_numbers',
            'org_1',
            'position_held1',
            'school_you_want_to_enroll_in',
            'course_you_plan_to_take',
        ],
    ]) ?>

</div>
