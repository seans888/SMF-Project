<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\jui\Tabs;

/* @var $this yii\web\View */
/* @var $searchModel common\models\CompileSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */


$this->title = 'Profile';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="compile-index">

    <h1 style="margin-top:100px;"><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

   
     <?= Tabs::widget([
    'items' => [
        [
            'label' => 'Scholar Details',
            'content' => $this->render('scholartab'),
			'active'=>true
        ],
        [
            'label' => 'School Details',
            'content' => $this->render('schooltab'),
			'active'=>true
        ],
    ],
    'options' => ['tag' => 'div'],
    'itemOptions' => ['tag' => 'div'],
    'headerOptions' => ['class' => 'my-class'],
    'clientOptions' => ['collapsible' => false],
	]); ?>

</div>
