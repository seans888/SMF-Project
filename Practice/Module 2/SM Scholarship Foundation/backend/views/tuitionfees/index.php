<?php

use yii\helpers\ArrayHelper;
use common\models\Tuitionfees;
use yii\widgets\Pjax;
use yii\helpers\Html;
use yii\grid\GridView;
use dosamigos\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $searchModel common\models\TuitionfeesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tuitionfees';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tuitionfees-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tuitionfees', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
	
	<?php Pjax::begin(); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'tuitionfee_scholar_id',
            [
				'attribute'=>'tuitionfee_scholar_lastName',
				'value'=>'tuitionfeeScholar.scholar_lastName',
			],
            [
				'attribute'=>'tuitionfee_scholar_firstName',
				'value'=>'tuitionfeeScholar.scholar_firstName',
			],
            [
				'attribute'=>'tuitionfee_scholar_middleName',
				'value'=>'tuitionfeeScholar.scholar_middleName',
			],
            'tuitionfee_amount',
            [
				'attribute'=>'tuitionfee_dateOfEnrollment',
				'value'=>'tuitionfee_dateOfEnrollment',
				'format'=>'raw',
				'filter'=>DatePicker::widget([
					'model' => $searchModel,
					'attribute' => 'tuitionfee_dateOfEnrollment',
						'clientOptions' => [
							'autoclose' => true,
							'format' => 'dd-M-yyyy',
						]
				]),
			],
             [
				'attribute'=>'tuitionfee_dateOfPayment',
				'value'=>'tuitionfee_dateOfPayment',
				'format'=>'raw',
				'filter'=>DatePicker::widget([
					'model' => $searchModel,
					'attribute' => 'tuitionfee_dateOfPayment',
						'clientOptions' => [
							'autoclose' => true,
							'format' => 'dd-M-yyyy',
						]
				]),
			],
			'tuitionfee_paidStatus',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
	<?php Pjax::end(); ?>
</div>
