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
                        <a class="page-scroll" href="<?php echo 'index.php?r=scholar/index'?>"><font style="color:#e6e600">Profile</font></a>
                    </li>
					 <li>
                        <a class="page-scroll" href="<?php echo 'index.php?r=scholar/create'?>"><font style="color:#e6e600">Subject List</font></a>
                    </li>
					 <li>
                        <a class="page-scroll" href="<?php echo 'index.php?r=scholar/create'?>"><font style="color:#e6e600">Records</font></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="<?php echo 'index.php?r=allowance/create'?>"><font style="color:#e6e600">Forms</font></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="<?php echo 'index.php?r=email/create'?>"><font style="color:#e6e600">Contact</font></a>
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
		
    
     <section id="records" class="bg-light-gray" style="background-color:#fff">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading" style="color:black;">Records</h2>
                    
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
                    <a href="<?php echo 'index.php?r=deductions/index';?>" class="portfolio-link" data-toggle="modal">
                   
                        <img src="img/portfolio/f.png" class="img-responsive" alt="" style="height:250px;width:400px;">
                    </a>
                    <div class="portfolio-caption">
                        <h4 style="color:black;">View Allowance, Deductions, and Incentives</h4>
                        <p class="text-muted" style="color:#005ab2;">Past-Present</p>
                    </div>
                </div>
				 <div class="col-md-4 col-sm-6 portfolio-item">
                   
                </div>

               </div>
    </section>
         
		
   
	

    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
