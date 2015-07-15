<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ApplicantformSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Applicantforms';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="applicantform-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Applicantform', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'last_name',
            'first_name',
            'middle_name',
            'city_address',
            // 'telephone_no',
            // 'email:email',
            // 'cellphone_no',
            // 'birthday',
            // 'status',
            // 'sex',
            // 'birth_place',
            // 'nationality',
            // 'height',
            // 'weight',
            // 'religion',
            // 'name_of_public_high_school_graduating_from',
            // 'section',
            // 'complete_address_of_school',
            // 'name_of_principal',
            // 'telephone_numbers',
            // 'org_1',
            // 'position_held1',
            // 'school_you_want_to_enroll_in',
            // 'course_you_plan_to_take',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
