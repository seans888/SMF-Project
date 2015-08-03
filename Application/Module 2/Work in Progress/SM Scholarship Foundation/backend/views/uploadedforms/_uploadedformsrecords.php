<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\UploadedformsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Uploadedforms';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="uploadedforms-index">

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
  //          'uploaded_scholar_id',
			// [
				// 'attribute'=>'scholar_lastName',
				// 'value'=>'scholar.scholar_lastName',
			// ],
			// [
				// 'attribute'=>'scholar_firstName',
				// 'value'=>'scholar.scholar_firstName',
			// ],
			// [
				// 'attribute'=>'scholar_middleName',
				// 'value'=>'scholar.scholar_middleName',
			// ],
[
        'attribute' => 'file',
        'format' => 'html',    
        'value' => function ($data) {
            return Html::img(Yii::getAlias('@web').'/'. $data['uploadedForm'],
                ['width' => '70px']);
        },
    ],
            'uploadedForm',
            'fileName',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
