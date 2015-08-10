<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use yii\helpers\ArrayHelper;
use common\models\Grades;
use kartik\select2\Select2;
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
	<p><b><font color=#e7bd58>Orange</font> rows are schools from NCR Areas</p>
	<p><font color=#988db2>Purple</font> rows are schools from Provincial Areas</b>
	</p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
    	'rowOptions'=>function($model){
    		if(strcasecmp($model->school_area, 'NCR') != 0)
    		{
    			return['class'=>'provincial-row'];
    		}
    		else if(strcasecmp($model->school_area, 'NCR') == 0)
    		{
    			return['class'=>'ncr-row'];
    		}
    	},
        'columns' => [
			['class' => 'kartik\grid\SerialColumn'],
 //           'School_id',
			[
				'class' => 'kartik\grid\EditableColumn',
				'attribute' => 'school_name',
			],
			[
				'class' => 'kartik\grid\EditableColumn',
				'attribute' => 'school_area',
				'editableOptions' => [
					'inputType' => '\kartik\select2\Select2',
					'options'=>
					[
						'data' => ['NCR'=>'NCR','Davao'=>'Davao'],
					],
				],
			],
			[
				'class' => 'kartik\grid\EditableColumn',
				'attribute' => 'school_address',
			],
            'school_contactEmail:email',
            // 'school_contactNumber',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
