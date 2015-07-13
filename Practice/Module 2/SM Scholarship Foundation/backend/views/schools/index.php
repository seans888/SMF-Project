<?php
use yii\widgets\Pjax;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\SchoolsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Schools';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="schools-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Schools', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <br>
	<p><b><font color=orange>Orange</font> rows are schools from NCR Areas</p>
	<p><font color=blue>Blue</font> rows are schools from Provincial Areas</b>
	</p>
	<?php Pjax::begin(); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
    	'rowOptions'=>function($model){
    		if($model->school_area=='Provincial')
    		{
    			return['class'=>'alert-info'];
    		}
    		else if($model->school_area=='NCR')
    		{
    			return['class'=>'alert-warning'];
    		}
   		},
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'school_name',
            'school_area',
            'school_address',
            'school_contactEmail:email',
            'school_contactNumber',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
	<?php Pjax::end(); ?>
</div>
