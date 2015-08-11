<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Emails */

$this->title = 'Create Emails';
$this->params['breadcrumbs'][] = ['label' => 'Emails', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="emails-create">

    <h1 style="margin-top:100px"></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
