<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\jui\Tabs;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\TuitionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tuitions';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="tuition-index">

    <h1 style="margin-top:100px;"><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
	<?= Tabs::widget([
		'items' => [
        [
            'label' => 'Actual Tuition Fees',
            'content' => $this->render('tuitiontab'),
            'active' => true
        ],
        [
            'label' => 'Past Tuition Fees',
            'content' =>$this->render('pasttuitiontab'),
            'active' => true
        ],
        [
            'label' => 'Fees Shouldered by SM',
            'content' => 'No Details of this yet.'
            ,
        ],
    
    ],
    'options' => ['tag' => 'div'],
    'itemOptions' => ['tag' => 'div'],
    'headerOptions' => ['class' => 'my-class'],
    'clientOptions' => ['collapsible' => false],
]); ?>
</div>
