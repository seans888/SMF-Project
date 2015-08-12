<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\jui\Tabs;
use common\models\User;
use common\models\Scholars;
use common\models\Schools;
use common\models\Grades;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\GradeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->params['breadcrumbs'][] = $this->title;
?>

<div class="grades-index">

    <h1 style="margin-top:100px;"><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

     <?= Tabs::widget([
    'items' => [
        [
            'label' => 'Grade Records',
            'content' =>  $this->render('index'),
            'active' => true
        ],
        [
            'label' => 'Past Stipend',
            'content' => $this->render('paststipendtab'),
            'active' => true
        ],
		 [
            'label' => 'Deductions',
            'content' => $this->render('deductions'),
            'active' => true
        ],
		 [
            'label' => 'Refunds',
            'content' => $this->render('refund'),
            'active' => true
        ],
    ],
    'options' => ['tag' => 'div'],
    'itemOptions' => ['tag' => 'div'],
    'headerOptions' => ['class' => 'my-class'],
    'clientOptions' => ['collapsible' => false],
	]); ?>

</div>
