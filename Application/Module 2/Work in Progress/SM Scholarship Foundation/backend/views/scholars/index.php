<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ScholarsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Scholars';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="scholars-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Scholars', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <br>
	<p><b><font color=orange>Orange</font> rows are scholars from NCR Areas</p>
	<p><font color=blue>Blue</font> rows are scholars from Provincial Areas</b>
	</p>
    
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
    	'rowOptions'=>function($model){
    		if($model->scholar_school_area=='Provincial')
    		{
    			return['class'=>'alert-info'];
    		}
    		else if($model->scholar_school_area=='NCR')
    		{
    			return['class'=>'alert-warning'];
    		}
    	},
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'scholar_id',
            'scholar_firstName',
            'scholar_lastName',
            'scholar_middleName',
            'scholar_gender',
            'scholar_address',
            [
            	'attribute'=>'scholar_school_id',
            	'value'=>'scholarSchool.school_name',
            ],
            'scholar_course',
            'scholar_yearLevel',
            'scholar_email:email',
            'scholar_contactNum',
            'scholar_cashCardNum',
			'scholar_sponsors',
   //       'scholar_school_area',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
