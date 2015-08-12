<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\ApprovedGrades */

$this->title = 'Create Approved Grades';
$this->params['breadcrumbs'][] = ['label' => 'Approved Grades', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="approved-grades-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
