<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Uploadedforms */

$this->title = 'Updates';
?>
<div class="uploadedforms-view">

    <h1 style="margin-top:100px;"><?= Html::encode($this->title) ?></h1>
	<?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
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