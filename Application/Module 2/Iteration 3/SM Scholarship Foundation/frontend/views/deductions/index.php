<?php

use yii\helpers\Html;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\DeductionsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Deductions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="deductions-index">

    <center><h1 style="margin-top:100px"><?= Html::encode($this->title) ?></h1></center>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

      
            'deduction_date',
            'deduction_amount',
            'deduction_remark',
            
            // 'uploaded_by',
            // 'updated_by',
            // 'checked_by',
            // 'checked_remark',

          
        ],
    ]); ?>

</div>
