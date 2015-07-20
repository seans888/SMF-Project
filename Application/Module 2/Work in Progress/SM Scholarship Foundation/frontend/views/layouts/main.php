<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\DashboardAsset;
use frontend\widgets\Alert;
use frontend\controllers\EventController;

/* @var $this \yii\web\View */
/* @var $content string */

DashboardAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body id="page-top" class="index" >
	
    <nav class="navbar navbar-default navbar-fixed-top" style=" background-color: #005ab2;">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll" >
                <button type="button"   class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top"><font style="color:#fff">SM Foundation</font></a>
            </div>
			
		
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
					<li>
                        <a class="page-scroll" href="<?php echo 'index.php'?>"><font style="color:#e6e600">Home</font></a>
                    </li>
					 <li>
                        <a class="page-scroll" href="<?php echo 'index.php?r=compile/index'?>"><font style="color:#e6e600">Profile</font></a>
                    </li>
					 <li>
                        <a class="page-scroll" href="#records"><font style="color:#e6e600">Records</font></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#forms"><font style="color:#e6e600">Forms</font></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#calendar"><font style="color:#e6e600">Calendar</font></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact"><font style="color:#e6e600">Contact</font></a>
                    </li>
					<li>
					 <?php
					if (Yii::$app->user->isGuest) {
					$menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
					$menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
					} else {
					$menuItems[] = [
                    'label' => 'Logout ('. Yii::$app->user->identity->username.')',
                    'url' => ['/site/logout'],
                    'linkOptions' => ['data-method' => 'post']
					];
					}
					
					echo Nav::widget([
					'items' => $menuItems,
					'options' => ['class' => 'page-scroll'],
					]);
					?>
					</li>
					 
                   
                </ul>
            </div>
            <!-- /.navbar-collapse -->
		</div>
        <!-- /.container-fluid -->
    </nav>
	
    
     <div class="container">
			
            <?= $content ?>
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
                    <a href="<?php echo'index.php?r=grade/index'?>" class="portfolio-link" data-toggle="modal">
                        
                        <img src="img/portfolio/c.png" class="img-responsive" alt="" style="height:250px">
                    </a>
                    <div class="portfolio-caption">
                        <h4 style="color:black;">View Grades</h4>
						 <p class="text-muted" style="color:#005ab2;">Past-Present</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="<?php echo'index.php?r=tuition/index'?>" class="portfolio-link" data-toggle="modal" >
                        
                        <img src="img/portfolio/e.png" class="img-responsive" alt="" style="height:250px;width:400px;">
                    </a>
                    <div class="portfolio-caption">
                        <h4 style="color:black;">View Tuition Fees </h4>
						<p class="text-muted" style="color:#005ab2;">Actual Tuition and Shouldered by SM</p>
                    </div>
                </div>
				 <div class="col-md-4 col-sm-6 portfolio-item" >
                    <a href="<?php echo 'index.php?r=allowance/index';?>" class="portfolio-link" data-toggle="modal">
                   
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
                    <a href="<?php echo'index.php?r=compile/index'?>" class="portfolio-link" data-toggle="modal">
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
                    <a href="<?php echo 'index.php?r=tuition/update'?>" class="portfolio-link" data-toggle="modal" >
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
					<div style="float:right;margin-right:200px;">
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
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; SM Foundation 2015</span>
                </div>
             
            </div>
        </div>
    </footer>
	

    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
