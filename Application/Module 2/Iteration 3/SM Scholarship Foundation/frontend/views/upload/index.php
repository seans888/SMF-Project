<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\web\UploadedFile;

/* @var $this yii\web\View */
/* @var $searchModel common\models\UploadSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Uploads';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="upload-index">

    <h1 style="margin-top:100px;text-align:center;"><?= Html::encode($this->title) ?></h1><br>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p align=center>
        <?= Html::a('Create Upload', ['create'], ['class' => 'btn btn-success']) ?>
    </p><br>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
		
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
			'upload_form',
            'upload_file_name',
			[
            'label'=>'Scanned Document',
            'format'=>'raw',
				'value' => function($model){
					$url = $model->upload_form;
					
					return Html::a(Html::img($url, ['width'=>'300']),$url);
				}
        ],
		[

            'class' => 'yii\grid\ActionColumn',
            'header'=>'Action',
            'headerOptions' => ['width' => '80'],
            'template' => '{update} {delete}',
        ],


        ],
		

    ]); ?>

</div>
