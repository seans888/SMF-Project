<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Alumni */

$this->title = $model->alumni_lastname.',' .$model->alumni_firstname;
$this->params['breadcrumbs'][] = ['label' => 'Alumnis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="alumni-view">

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
            'alumni_id',
            'alumni_firstname',
            'alumni_lastname',
            'alumni_midinit',
            'alumni_gender',
            'alumni_address',
            'alumni_contactno',
            'alumni_remarks',
            'alumni_office_local_no',
            'alumni_email:email',
            'alumni_year_graduated',
            'alumni_course',
            'alumni_school',
            'alumni_company',
            'alumni_status',
            'alumni_area',
            'alumni_cur_work',
            'alumni_prev_work',
            'alumni_further_study',
            'alumni_achievements',
            'alumni_legends',
            'user_id',
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
            'alumni_id',
            'alumni_firstname',
            'alumni_lastname',
            'alumni_midinit',
            'alumni_gender',
            'alumni_address',
            'alumni_contactno',
            'alumni_remarks',
            'alumni_office_local_no',
            'alumni_email:email',
            'alumni_year_graduated',
            'alumni_course',
            'alumni_school',
            'alumni_company',
            'alumni_status',
            'alumni_area',
            'alumni_cur_work',
            'alumni_prev_work',
            'alumni_further_study',
            'alumni_achievements',
            'alumni_legends',
            'user_id',
        ],
    ]) ?>

	<?php }else{ ?>
	
	<?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
	
	<?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'alumni_id',
            'alumni_firstname',
            'alumni_lastname',
            'alumni_midinit',
            'alumni_gender',
            'alumni_address',
            'alumni_contactno',
            'alumni_remarks',
            'alumni_office_local_no',
            'alumni_email:email',
            'alumni_year_graduated',
            'alumni_course',
            'alumni_school',
            'alumni_company',
            'alumni_status',
            'alumni_area',
            'alumni_cur_work',
            'alumni_prev_work',
            'alumni_further_study',
            'alumni_achievements',
            'alumni_legends',
            'user_id',
        ],
    ]) ?>
	
	<?php } ?>
		

</div>
