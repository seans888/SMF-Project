<?php
/* @var $this yii\web\View */
$this->title = 'My Yii Application';
$username=Yii::$app->user->identity->username;
foreach($users as $ctr){
	if($ctr->username==$username){
		foreach($scholars as $scholarctr){
			foreach($schools as $school){
				
		if($scholarctr->scholar_user_id==$ctr->id && $scholarctr->scholar_school_id==$school->school_id ){
			echo '<div class="site-index">
			<header>
			<div class="container">
            <div class="intro-text">
			<img style="float:right;" src="http://www.sminvestments.com/sites/default/files/news/smfi1(1).jpg" ></img>
                <div class="intro-lead-in" style="color:#000000;">Welcome Scholar!</div>
                <div class="intro-heading" style="color:#000000;">'.$scholarctr->scholar_firstName." ".$scholarctr->scholar_lastName.'</h2><h3>'.$school->school_name.'<br>'.$scholarctr->scholar_email.'</div>
                <a href="#records" class="page-scroll btn btn-xl" style="margin-right:270px;">Get Started</a>
				</div>
				</div>
				</header>
			</div>
			
			
			';
		}
				
			}
		}
	}
}
?>

