<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Incentive */

$this->title = 'Create Incentive';
$this->params['breadcrumbs'][] = ['label' => 'Incentives', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="incentive-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
