<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Equivalence */

$this->title = $model->equivalence_id;
$this->params['breadcrumbs'][] = ['label' => 'Equivalences', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="equivalence-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->equivalence_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->equivalence_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
		<?= Html::a('View List', ['index'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'equivalence_id',
            'school_school_id',
            'equivalence_numerical_grade',
            'equivalence_letter_grade',
            'equivalence_percentile_lower',
            'equivalence_percentile_upper',
            'equivalence_school_rating',
            'equivalence_foundation_rating',
        ],
    ]) ?>

</div>
