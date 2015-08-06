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
                <a class="navbar-brand page-scroll" href="<?php echo 'index.php'?>"><font style="color:#fff">SM Foundation</font></a>
            </div>
			
		
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
					
					 <li>
                        <a class="page-scroll" href="<?php echo 'index.php?r=compile/index'?>"><font style="color:#e6e600">Profile</font></a>
                    </li>
					 <li>
                        <a class="page-scroll" href="<?php echo 'index.php?r=grade/create'?>"><font style="color:#e6e600">Records</font></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="<?php echo 'index.php?r=allowance/create'?>"><font style="color:#e6e600">Forms</font></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="<?php echo 'index.php?r=compile/create'?>"><font style="color:#e6e600">Calendar</font></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="<?php echo 'index.php?r=event/create'?>"><font style="color:#e6e600">Contact</font></a>
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
	
	
     <section id="calendar" style="background-color:#fff">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading" style="color:black;">Calendar</h2>
                   
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
