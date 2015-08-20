<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Testimonials */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Testimonials', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="testimonials-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>

    </p>
	
			<?php	$roles = Yii::$app->user->identity->user_type;
			if ($roles == 'admin'){ ?>
			
	        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'testimonial_name',
            'testimonial_description',
        ],
    ]) ?>
	
	<?php	} else if ($roles == 'user'){ ?>
	
	        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
		
		<?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'testimonial_name',
            'testimonial_description',
        ],
    ]) ?>
	
	
	<?php }else{ ?>

	<?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
	
	
	<?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'testimonial_name',
            'testimonial_description',
        ],
    ]) ?>
		
		<?php } ?>
		
</div>
