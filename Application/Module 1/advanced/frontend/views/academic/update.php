<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Academic */

$this->title = 'Update Academic: ' . ' ' . $model->academic_id;
$this->params['breadcrumbs'][] = ['label' => 'Academics', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->academic_id, 'url' => ['view', 'id' => $model->academic_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="academic-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
