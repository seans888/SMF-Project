<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\AlumniSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Alumni';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="alumni-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Alumni', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
	
	<?php	$roles = Yii::$app->user->identity->user_type;
			if ($roles == 'admin'){ ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'alumni_id',
            'alumni_firstname',
            'alumni_lastname',
            'alumni_midinit',
            // 'alumni_gender',
            // 'alumni_address',
            // 'alumni_contactno',
            // 'alumni_remarks',
            // 'alumni_office_local_no',
            // 'alumni_email:email',
            // 'alumni_year_graduated',
            // 'alumni_course',
            // 'alumni_school',
            // 'alumni_company',
            // 'alumni_status',
            // 'alumni_area',
            // 'alumni_cur_work',
            // 'alumni_prev_work',
            // 'alumni_further_study',
            // 'alumni_achievements',
            // 'alumni_legends',
            // 'user_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
	
		<?php	} else if ($roles == 'user'){ ?>
		
		<?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'alumni_id',
            'alumni_firstname',
            'alumni_lastname',
            'alumni_midinit',

            ['class' => 'yii\grid\ActionColumn','template'=>'{view}'], 
            ['class' => 'yii\grid\ActionColumn','template'=>'{update}'],
        ],
    ]); ?>
	
		<?php }else{ ?>
		
		<?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'alumni_id',
            'alumni_firstname',
            'alumni_lastname',
            'alumni_midinit',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
		
			<?php } ?>
		

</div>
