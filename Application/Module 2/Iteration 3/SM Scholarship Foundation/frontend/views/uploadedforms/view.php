<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Uploadedforms */

$this->title = 'Updates';
?>
<div class="uploadedforms-view">

    <h1 style="margin-top:100px;"><?= Html::encode($this->title) ?></h1>
	
	<p style="margin-top:50px;">
	
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            
            'uploadedForm',
            
            'fileName',
        ],
    ]) ?>
</p>
</div>