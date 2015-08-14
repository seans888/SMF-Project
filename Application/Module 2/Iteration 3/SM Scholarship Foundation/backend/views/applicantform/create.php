<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Applicantform */

$this->title = 'Create Applicantform';
$this->params['breadcrumbs'][] = ['label' => 'Applicantforms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="applicantform-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
