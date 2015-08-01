<?php
/* @var $this yii\web\View */
$this->title = 'My Yii Application';
$username=Yii::$app->user->identity->username;
foreach($users as $ctr){
	if($ctr->username==$username){
		foreach($scholars as $scholarctr){
			foreach($schools as $school){
				
		if($scholarctr->scholar_user_id==$ctr->id && $scholarctr->scholar_school_id==$school->School_id ){
			echo '
			<img style="float:right;margin-right:430px; margin-top:150px;" src="img/portfolio/logo.jpg" ></img>
			<div class="site-index">
			<header>
			<div class="container">
            <div class="intro-text">
				
                <div class="intro-lead-in" style="color:#000000;margin-top:100px;">Welcome Scholar!</div>
                <div class="intro-heading" style="color:#000000;">'.$scholarctr->scholar_firstName." ".$scholarctr->scholar_lastName.'</h2><h3>'.$school->school_name.'<br>'.$scholarctr->scholar_email.'</div>
                
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

