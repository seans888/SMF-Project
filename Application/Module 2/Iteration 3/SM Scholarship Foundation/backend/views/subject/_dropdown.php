<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use yii\helpers\ArrayHelper;
use common\models\Subject;
/* @var $this yii\web\View */
/* @var $searchModel common\models\SubjectSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Subjects';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="subject-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'kartik\grid\SerialColumn'],
			
			[
				// 'class' => 'kartik\grid\EditableColumn',
				'attribute' => 'subject_term',
			],
			[
				// 'class' => 'kartik\grid\EditableColumn',
				'attribute' => 'subject_name',
				// 'editableOptions' => [
					// 'inputType' => '\kartik\select2\Select2',
					// 'options'=>
					// [
						// 'data' => ArrayHelper::map(Subject::find()->all(),'subject_id','subject_name'),
					// ],
				// ],
			],
			[
				// 'class' => 'kartik\grid\EditableColumn',
				'attribute' => 'subject_units',
			],
			[
				// 'class' => 'kartik\grid\EditableColumn',
				'attribute' => 'subject_taken_status',
				// 'editableOptions' => [
					// 'inputType' => 'dropDownList',
					// 'pluginOptions'=>['allowClear'=>true],
					// 'data' => ["Not Taken"=>"Not Taken","Taken"=>"Taken","Failed"=>"Failed"],
					// 'widgetClass'=> 'kartik\select2\Select2',
				// ],
			],
			[
				// 'class' => 'kartik\grid\EditableColumn',
				'attribute' => 'subject_approval_status',
				// 'editableOptions' => [
					// 'inputType' => 'dropDownList',
					// 'pluginOptions'=>['allowClear'=>true],
					// 'data' => ["Not Approved"=>"Not Approved","Approved"=>"Approved"],
					// 'widgetClass'=> 'kartik\select2\Select2',
				// ],
			],
            'subject_approved_by',

            ['class' => 'kartik\grid\ActionColumn'],
        ],
    ]); ?>

</div>
