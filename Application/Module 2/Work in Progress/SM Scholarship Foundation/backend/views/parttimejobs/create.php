<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Parttimejobs */

$this->title = 'Job Request Form';
$this->params['breadcrumbs'][] = ['label' => 'Parttimejobs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="parttimejobs-create">

    <h1 style="margin-top:100px;"><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
