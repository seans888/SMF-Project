<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\UploadedformsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Uploaded Forms';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="uploadedforms-index">

    <center><h1 style="margin-top:100px;"><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Uploadedforms', ['create'], ['class' => 'btn btn-success']) ?>
    </p></center>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'uploadedForm',
            // 'scholar_id',

        ],
    ]); ?>

</div>
