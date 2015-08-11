<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\jui\Tabs;

/* @var $this yii\web\View */
/* @var $searchModel common\models\GradesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Grades';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="grades-index">

    <h1 style="margin-top:100px;"><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

 <?= Tabs::widget([
    'items' => [
        [
            'label' => 'Grade Records',
            'content' => $this->render('gradestab'),
			'active'=>true
        ],
        [
            'label' => 'Low Grades',
            'content' => '<p style="color:red"><i>NOTICE:If the computed grade is below 85%, Please answer the question below to be directly submitted to SM Foundation</i>.</p><br>Please explain the reason for attaining a GPA/GWA of 2.5 or 85% below. Explain the effect of the deficiency. Will this affect the length of time you graduate?. Explain how will you correct the deficiency.<br><br><textarea></textarea>
			<button class="btn btn-success" style="margin-bottom:40px;">Submit</button><br><br><h5><i>The explanation will be reviewed by the SM Foundation. <br>We will inform you for any updates regarding the case. Thank You! </i></h5>'
            ,
        ],
    ],
    'options' => ['tag' => 'div'],
    'itemOptions' => ['tag' => 'div'],
    'headerOptions' => ['class' => 'my-class'],
    'clientOptions' => ['collapsible' => false],
	]); ?>

</div>
