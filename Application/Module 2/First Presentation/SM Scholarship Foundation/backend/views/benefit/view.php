<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Benefit */

$this->title = $model->benefit_id;
$this->params['breadcrumbs'][] = ['label' => 'Benefits', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="benefit-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->benefit_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->benefit_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
		<?= Html::a('View List', ['index'],['class' => 'btn btn-success']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'benefit_id',
            'benefit_amount',
            'benefit_scholarShare',
            'benefit_tuitionfee_id',
            'benefit_scholar_id',
            'benefit_school_id',
            'benefitScholar.scholar_lastName',
            'benefitScholar.scholar_firstName',
            'benefitScholar.scholar_middleName',
        ],
    ]) ?>

</div>
