<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\models\User;
use common\models\Scholars;
use common\models\Uploadedforms;

/* @var $this yii\web\View */
/* @var $searchModel common\models\UploadedformsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Uploaded Forms';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="uploadedforms-index">
<center style="margin-top:100px;"><h1>Uploaded Forms</h1><br> <p>
        <?= Html::a('Upload a Form', ['create'], ['class' => 'btn btn-success']) ?>
    </p></center>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
		'showOnEmpty'=> false,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
			'fileName',
            'uploadedForm',
            // 'scholar_id',
			[
            'label'=>'Scanned Document',
            'format'=>'raw',
				'value' => function($model){
					$url = $model->uploadedForm;
					
					return Html::a(Html::img($url, ['width'=>'300']),$url);
				}
        ],

        ],
		

    ]); ?>

</div>
