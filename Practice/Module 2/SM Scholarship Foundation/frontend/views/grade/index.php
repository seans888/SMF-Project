<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\jui\Tabs;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\GradeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Grades';
$this->params['breadcrumbs'][] = $this->title;
?>
<?php 
$username=Yii::$app->user->identity->username;
foreach($users as $ctr){
	if($ctr->username==$username){
		foreach($scholars as $scholarctr){
			foreach($schools as $school){
				foreach($grades as $grade){
				if($scholarctr->scholar_user_id==$ctr->id && $scholarctr->scholar_school_id==$school->school_id && $grade->grade_scholar_id==$scholarctr->scholar_user_id){
					$name=$scholarctr->scholar_firstName." ".$scholarctr->scholar_lastName;
					$year=$grade->grade_schoolYear;
					$term=$grade->grade_Term;
					$gradeval = $grade->grade_value;
					$gradefile=$grade->grade_grade_form;
				}
				}
			}
		}
	}
}
?>
<div class="grades-index">

    <h1 style="margin-top:100px;"><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


    <?= 
	
	Tabs::widget([
	
    'items' => [
        [
            'label' => 'Current Grades',
            'content' => 'Name:<b> '.$name.'</b><br><br>School Year:<b> '.$year.'</b><br><br>Term:<b> '.$term.'</b><br><br>Grade Value (GPA/GWA):<b> '.$gradeval.'</b><div style="float:right;">Uploaded Grade Sheet (filename):<b> '.$gradefile.'</b></div>'
        ],
        [
            'label' => 'Approved Grades',
            'content' => 'No data to be seen yet',
            
        ],
        [
            'label' => 'Low Grades',
            'content' => 'Grade Value (GPA/GWA): <b>'.$gradeval.'</b><br><br><p style="color:red"><i>NOTICE:If the computed grade is below 85%, Please answer the question below to be directly submitted to SM Foundation</i>.</p><br>Please explain the reason for attaining a GPA/GWA of 2.5 or 85% below. Explain the effect of the deficiency. Will this affect the length of time you graduate?. Explain how will you correct the deficiency.<br><br><input id="deficiency" style="height:350px;width:500px;" class="textbox"/>
			<button class="btn btn-success" style="margin-left:250px;">Submit</button><br><br><h5><i>The explanation will be reviewed by the SM Foundation. <br>We will inform you for any updates regarding the case. Thank You! </i></h5>'
            ,
        ],
    
    ],
    'options' => ['tag' => 'div'],
    'itemOptions' => ['tag' => 'div'],
    'headerOptions' => ['class' => 'my-class'],
    'clientOptions' => ['collapsible' => false],
]); ?>

</div>
