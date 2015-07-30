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
			<section id="records" class="bg-light-gray" style="background-color:#fff">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading" style="color:black;">Records</h2>
                    <h3 class="section-subheading text-muted" style="color:#005ab2;">*Please review the documents submitted to know if you are qualified for the scholarship</h3>
                </div>
            </div>
             <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="';echo'index.php?r=grade/index"';echo'class="portfolio-link" data-toggle="modal">
                        
                        <img src="img/portfolio/c.png" class="img-responsive" alt="" style="height:250px">
                    </a>
                    <div class="portfolio-caption">
                        <h4 style="color:black;">View Grades</h4>
						 <p class="text-muted" style="color:#005ab2;">Past-Present</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="'; echo'index.php?r=tuition/index"';echo' class="portfolio-link" data-toggle="modal" >
                        
                        <img src="img/portfolio/e.png" class="img-responsive" alt="" style="height:250px;width:400px;">
                    </a>
                    <div class="portfolio-caption">
                        <h4 style="color:black;">View Tuition Fees </h4>
						<p class="text-muted" style="color:#005ab2;">Actual Tuition and Shouldered by SM</p>
                    </div>
                </div>
				 <div class="col-md-4 col-sm-6 portfolio-item" >
                    <a href="'; echo 'index.php?r=allowance/index"';echo' class="portfolio-link" data-toggle="modal">
                   
                        <img src="img/portfolio/f.png" class="img-responsive" alt="" style="height:250px;width:400px;">
                    </a>
                    <div class="portfolio-caption">
                        <h4 style="color:black;">View Stipend and Benefits</h4>
                        <p class="text-muted" style="color:#005ab2;">Past-Present</p>
                    </div>
                </div>
				 <div class="col-md-4 col-sm-6 portfolio-item">
                   
                </div>

               </div>
    </section>
		
   <section id="forms" class="bg-light-gray" style="background-color:#fff">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading" style="color:black;">Forms</h2>
                    <h3 class="section-subheading text-muted" style="color:#005ab2;">*this section lets you upload and edit documents that will be needed for maintaining the scholarship.<br> Please be advised that forms should also be submitted through SM Foundation itself.</h3>
                </div>
            </div>
             <div class="row" >
                <div class="col-md-4 col-sm-6 portfolio-item" style="margin-left:160px;">
                    <a href="';echo'index.php?r=compile/index"';echo' class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <center><i class="fa fa-plus fa-3x"></i></center>
                            </div>
                        </div>
                        <img src="img/portfolio/parttime.jpg" class="img-responsive" alt="" style="height:250px">
                    </a>
                    <div class="portfolio-caption">
                        <h4 style="color:black;">Part Time Jobs</h4>
                        <p class="text-muted" style="color:#005ab2;">Fill Up Form</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item" style="margin-left:80px;">
                    <a href="';echo 'index.php?r=uploadedforms/create"';echo' class="portfolio-link" data-toggle="modal" >
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <center><i class="fa fa-plus fa-3x"></i></center>
                            </div>
                        </div>
                        <img src="img/portfolio/upload.png" class="img-responsive" alt="" style="height:250px;width:400px;">
                    </a>
                    <div class="portfolio-caption">
                        <h4 style="color:black;">Upload </h4>
                        <p class="text-muted" style="color:#005ab2;">Files to be Submitted for Requirements</p>
                    </div>
                </div>
               
               </div>
    </section>
	
    <!-- About Section -->
    <section id="calendar" style="background-color:#fff">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading" style="color:black;">Calendar</h2>
                    <h3 class="section-subheading text-muted" style="color:#005ab2;">View your schedules for submitting forms and grades to SM Foundation</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <img src="img/portfolio/calendarnew.jpg" style="float:left;height:500px;width:500px;"></img>
					<div style="float:right;margin-right:230px;">
						<a href="index.php?r=event/index" class="btn btn-primary" style="margin-top:50px;">Show Calendar</a>
						
					</div><br><br><br><br><br>
					<p style="color:#005ab2; text-align:center;">In this calendar, you could see different schedules of form submissions to the SM Foundation. You could upload your Grade Sheet and Registration Form here but notice that it will only be used as a record and backup only. It will not be verified until the hard copy of the forms were submitted. </p>
					
                </div>
            </div>
        </div>
    </section>
    <section id="contact" style="background-color:#fff">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
				
                    <h2 class="section-heading" style="color:black;">Contact Us</h2>
                   
					<img  src="img/portfolio/icon.jpg" style="height:110px;width:110px;" ></img>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-primary">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
			
			
			';
		}
				
			}
		}
	}
}
?>

