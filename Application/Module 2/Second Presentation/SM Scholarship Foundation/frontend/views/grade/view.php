<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Grades */


$this->params['breadcrumbs'][] = ['label' => 'Grades', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="grades-view">

    <h1 style="margin-top:120px;"><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->grade_id], ['class' => 'btn btn-primary']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
		'grade_scholar_lastName',
            'grade_scholar_firstName',
            'grade_scholar_middleName',
            'grade_schoolYear',
            'grade_Term',
			'grade_value',
            'grade_grade_form',
            
            
        ],
    ]) ?>

</div>
