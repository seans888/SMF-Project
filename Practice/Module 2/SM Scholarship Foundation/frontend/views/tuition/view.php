<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Tuition */

$this->title = $model->tuitionfee_id;
$this->params['breadcrumbs'][] = ['label' => 'Tuitions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tuition-view">

    <h1 style="margin-top:100px;"><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->tuitionfee_id], ['class' => 'btn btn-primary']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'tuitionfee_scholar_lastName',
            'tuitionfee_scholar_firstName',
            'tuitionfee_scholar_middleName',
            'tuitionfee_amount',
            'tuitionfee_dateOfEnrollment',
            'tuitionfee_dateOfPayment',
          
            'tuitionfee_registrationForm',
        
        ],
    ]) ?>

</div>
