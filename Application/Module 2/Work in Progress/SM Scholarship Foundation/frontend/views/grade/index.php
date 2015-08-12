<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use yii\jui\Tabs;
use common\models\GradesSearch;

/* @var $this yii\web\View */
/* @var $searchModel common\models\GradesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Grade Records';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="grades-index">

    <center><h1 style="margin-top:100px;"><?= Html::encode($this->title) ?></h1></center><br>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

 <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
		'showOnEmpty' => false,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'grade_schoolYear',
            'grade_Term',
            'grade_subject',
            'grade_units',
			'grade_value',

            
        ],
    ]); ?>



</div>
