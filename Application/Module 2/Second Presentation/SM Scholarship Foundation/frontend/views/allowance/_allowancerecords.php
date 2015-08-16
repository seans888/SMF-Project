<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use dosamigos\datepicker\DatePicker;
use common\models\DeductionsSearch;
/* @var $this yii\web\View */
/* @var $searchModel common\models\AllowanceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Allowances';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="allowance-index">

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
		['class' => 'kartik\grid\SerialColumn'],
//          'allowance_id',
//          'allowance_school_id',
//          'allowance_payStatus',
//          'benefit_allowance_id',
//          'allowance_remark',
//			'allowanceSchool.school_area',
            
//            'allowance_scholar_id',
        	// [
        		// 'attribute'=>'allowance_scholar_lastName',
        		// 'value'=>'allowanceScholar.scholar_lastName',
        	// ],
        	// [
        	// 'attribute'=>'allowance_scholar_firstName',
        	// 'value'=>'allowanceScholar.scholar_firstName',
        	// ],
        	// [
        	// 'attribute'=>'allowance_scholar_middleName',
        	// 'value'=>'allowanceScholar.scholar_middleName',
        	// ],
			'deduction_date',
			'deduction_amount',
			'deduction_remark',
        ],
    ]); ?>

</div>
