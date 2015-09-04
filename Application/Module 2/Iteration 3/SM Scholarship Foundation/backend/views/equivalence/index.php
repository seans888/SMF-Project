<?php

use yii\helpers\Html;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\EquivalenceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Equivalences';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="equivalence-index">
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'kartik\grid\SerialColumn'],

            // 'equivalence_id',
			// [
				// 'attribute' => 'school_school_id',
				// 'value' => 'schoolSchool.school_name'
			// ],
			[
				// 'class' => 'kartik\grid\EditableColumn',
				'attribute' => 'equivalence_numerical_grade',
			],
			[
				// 'class' => 'kartik\grid\EditableColumn',
				'attribute' => 'equivalence_letter_grade',
			],
			[
				// 'class' => 'kartik\grid\EditableColumn',
				'attribute' => 'equivalence_percentile_lower',
			],
			[
				// 'class' => 'kartik\grid\EditableColumn',
				'attribute' => 'equivalence_percentile_upper',
			],
			[
				// 'class' => 'kartik\grid\EditableColumn',
				'attribute' => 'equivalence_school_rating',
			],
			[
				// 'class' => 'kartik\grid\EditableColumn',
				'attribute' => 'equivalence_foundation_rating',
				// 'editableOptions' => [
					// 'inputType' => 'dropDownList',
					// 'pluginOptions'=>['allowClear'=>true],
					// 'data' => ["PASS"=>"PASS","FAIL"=>"FAIL"],
					// 'widgetClass'=> 'kartik\select2\Select2',
				// ],
			],

            ['class' => 'kartik\grid\ActionColumn'],
        ],
    ]); ?>

</div>
