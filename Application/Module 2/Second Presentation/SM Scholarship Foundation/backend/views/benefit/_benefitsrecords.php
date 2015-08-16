<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\BenefitSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Benefits';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="benefit-index">

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

  //          'benefit_scholar_id',
        		// [
        		// 'attribute'=>'benefit_scholar_lastName',
        		// 'value'=>'benefitScholar.scholar_lastName',
        		// ],
        		// [
        		// 'attribute'=>'benefit_scholar_firstName',
        		// 'value'=>'benefitScholar.scholar_firstName',
        		// ],
        		// [
        		// 'attribute'=>'benefit_scholar_middleName',
        		// 'value'=>'benefitScholar.scholar_middleName',
        		// ],        
            'benefit_amount',
            'benefit_scholarShare',
			'benefit_description',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
