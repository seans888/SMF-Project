<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Course */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="course-form">

    <?php $form = ActiveForm::begin(); ?>

    <table width=600px;>
	<tr> <td style ="padding-right:300px;">
    <?= $form->field($model, 'course_code')->dropDownList([ 'BEED' => 'BEED', 'BSE English-Fil. (Com. Arts)' => 'BSE English-Fil. (Com. Arts)', 'BSIT' => 'BSIT',
	'BSCE' => 'BSCE', 'BSE Biology' => 'BSE Biology', 'BSBAA' => 'BSBAA', 'BSE Biology' => 'BSE Biology', 'BS BA' => 'BS BA',
	'BS FMA' => 'BS FMA', 'BS Math' => 'BS Math', 'BSIM' => 'BSIM', 'BSE Physics-Math' => 'BSE Physics-Math', 'BSBAMA' => 'BSBAMA', 'BSC Mgt. Acctng' => 'BSC Mgt. Acctng',
	'BSA' => 'BSA', 'BSCSIT SSE' => 'BSCSIT SSE', 'BSE Math' => 'BSE Math', 'BSCS' => 'BSCS', 'BSE-English' => 'BSE-English', 'BSECE' => 'BSECE', 'BSMA / COMA' => 'BSMA / COMA',
    'BSCOE' => 'BSCOE'], ['prompt' => 'Select Course']) ?> </td>
	<tr> <td>
	<?= $form->field($model, 'course_name')->textInput() ?>
	</td>  </tr> 
	
	</table>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

<?php
$script = <<< JS


$('#course-course_code').change(function(){

var course_code = $(this).val();

alert(course_code);

if (course_code == "BEED"){
$('#course-course_name').attr('value','BS in Elementary Education');
}else if(course_code == "BSE English-Fil. (Com. Arts)"){
$('#course-course_name').attr('value','BS in Secondary Education major in English-Filipino');
}else if(course_code == "BSIT"){
$('#course-course_name').attr('value','BS in Information Technology');
}else if(course_code == "BSCE"){
$('#course-course_name').attr('value','BS in Civil Engineering');
}else if(course_code == "BSE Biology"){
$('#course-course_name').attr('value','BS in Secondary Education major in Biology');
}else if(course_code == "BSBAA"){
$('#course-course_name').attr('value','BS in Business Administration major in Accountancy');
}else if(course_code == "BSE Biology"){
$('#course-course_name').attr('value','BS in Secondary Education major in Biology');
}else if(course_code == "BS BA"){
$('#course-course_name').attr('value','BS in Business Administration');
}else if(course_code == "BS FMA"){
$('#course-course_name').attr('value','BS in Financial Management Accounting');
}else if(course_code == "BS Math"){
$('#course-course_name').attr('value','BS in Math');
}else if(course_code == "BSIM"){
$('#course-course_name').attr('value','BS in Information Management');
}else if(course_code == "BSE Physics-Math"){
$('#course-course_name').attr('value','BS in Secondary Education major in Physics-Math');
}else if(course_code == "BSBAMA"){
$('#course-course_name').attr('value','BS in Business Administration major in Management Accounting');
}else if(course_code == "BSC Mgt. Acctng"){
$('#course-course_name').attr('value','BS in Commerce major in Management Accounting');
}else if(course_code == "BSA"){
$('#course-course_name').attr('value','BS in Accountancy');
}else if(course_code == "BSCSIT SSE"){
$('#course-course_name').attr('value','BS in Computer Science and Information Technology with specialization in Systems Software Engineering');
}else if(course_code == "BSE Math"){
$('#course-course_name').attr('value','BS in Secondary Education major in Math');
}else if(course_code == "BSCS"){
$('#course-course_name').attr('value','BS in Computer Science');
}else if(course_code == "BSE-English"){
$('#course-course_name').attr('value','BS in Secondary Education major in English');
}else if(course_code == "BSECE"){
$('#course-course_name').attr('value','BS in Electronics and Communications Engineering');
}else if(course_code == "BSMA / COMA"){
$('#course-course_name').attr('value','BS in Management Accounting');
}else if(course_code == "BSCOE"){
$('#course-course_name').attr('value','BS in Computer Engineering');


}else {
$('#course-course_name').attr('value',' ');
}
});


JS;
$this->registerJs($script);
?> 
</div>
