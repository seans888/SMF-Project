<?php
use backend\assets\DashboardAsset;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;

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
<body class="skin-blue sidebar-mini">
    <?php $this->beginBody() ?>
    <div class="wrapper">
<header class="main-header">
        <!-- Logo -->
        <a href="index.php" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>SM</b>F</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>SM</b>Foundation</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Notifications: style can be found in dropdown.less -->
              <li class="dropdown notifications-menu">
                <ul class="dropdown-menu">
                </ul>
              </li>
              <!-- Tasks: style can be found in dropdown.less -->
              <li class="dropdown tasks-menu">
                <ul class="dropdown-menu">
                </ul>
              </li>
			  						<a href="<?php
						if(!\Yii::$app->user->isGuest)
						{
							echo Yii::$app->getUrlManager()->createUrl('/site/logout');
						}

						?>" class="btn btn-default btn-primary">Sign Out</a>
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <span class="hidden-xs"><?= Yii::$app->user->identity->username ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="dist/img/avatar5.png" class="img-circle" alt="User Image" />
                    <p>
                      <?= Yii::$app->user->identity->username ?>
                    </p>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
						<a href="<?php
						if(!\Yii::$app->user->isGuest)
						{
							echo Yii::$app->getUrlManager()->createUrl('/site/logout');
						}

						?>" class="btn btn-default btn-flat">Sign Out</a>
					</form>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
            </ul>
          </div>
        </nav>
</header>
	        <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>

			<li class="treeview">
              <a href="<?= Yii::$app->getUrlManager()->createUrl('/scholar/index'); ?>">
                <i class="fa fa-group"></i> <span>Scholars</span></i>
              </a>
            </li>
			<li class="treeview">
              <a href="<?= Yii::$app->getUrlManager()->createUrl('/school/index'); ?>">
                <i class="fa fa-institution"></i> <span>Schools</span>
              </a> 
            </li>
			<li class="treeview">
              <a href="<?= Yii::$app->getUrlManager()->createUrl('/tuition/index'); ?>">
                <i class="fa fa-money"></i> <span>Tuition</span>
              </a> 
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-credit-card"></i> <span>Grade Records</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
				<li><a href="<?= Yii::$app->getUrlManager()->createUrl('/grade/index'); ?>"><i class="fa fa-graduation-cap"></i> Grades</a></li>
				<li><a href="<?= Yii::$app->getUrlManager()->createUrl('/equivalence/index'); ?>"><i class="fa fa-pie-chart"></i> Grading Equivalence</a></li>
				<li><a href="<?= Yii::$app->getUrlManager()->createUrl('/subject/index'); ?>"><i class="fa fa-book"></i> Subject Records</a></li>
				</ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-list-ol"></i> <span>Stipend Records</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
				<li><a href="<?= Yii::$app->getUrlManager()->createUrl('/allowance/index'); ?>"><i class="fa fa-credit-card"></i> Allowance Reference Table</a></li>
				<li><a href="<?= Yii::$app->getUrlManager()->createUrl('/incentive/index'); ?>"><i class="fa fa-thumbs-up"></i> Incentives</a></li>
				<li><a href="<?= Yii::$app->getUrlManager()->createUrl('/deduction/index'); ?>"><i class="fa fa-thumbs-down"></i> Deductions</a></li>
				</ul>
            </li>
			<li class="treeview">
              <a href="<?= Yii::$app->getUrlManager()->createUrl('/optionalwork/index'); ?>">
                <i class="fa fa-desktop"></i> <span>Optional Work</span>
              </a> 
            </li>
			<li class="treeview">
              <a href="<?= Yii::$app->getUrlManager()->createUrl('/upload/index'); ?>">
                <i class="fa fa-upload"></i> <span>Upload Forms</span>
              </a> 
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-edit"></i> <span>Reports</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?= Yii::$app->getUrlManager()->createUrl('/grade_report/index'); ?>"><i class="fa fa-file-text-o"></i> Grade Report</a></li>
              </ul>
			  <ul class="treeview-menu">
                <li><a href="<?= Yii::$app->getUrlManager()->createUrl('/gpa_report/index'); ?>"><i class="fa fa-bar-chart"></i> GPA Report</a></li>
              </ul>
			  <ul class="treeview-menu">
                <li><a href="<?= Yii::$app->getUrlManager()->createUrl('/gender_summary/index'); ?>"><i class="fa fa-bar-chart"></i> Gender Demographics</a></li>
              </ul>
			  <ul class="treeview-menu">
                <li><a href="<?= Yii::$app->getUrlManager()->createUrl('/passfail_report/index'); ?>"><i class="fa fa-bar-chart"></i>Pass/Fail Report</a></li>
              </ul>
			  <ul class="treeview-menu">
                <li><a href="<?= Yii::$app->getUrlManager()->createUrl('/summary_report/index'); ?>"><i class="fa fa-bar-chart"></i>Scholars Per School</a></li>
              </ul>
			  <ul class="treeview-menu">
                <li><a href="<?= Yii::$app->getUrlManager()->createUrl('/allowance_report/index'); ?>"><i class="fa fa-bar-chart"></i>Allowance Report</a></li>
              </ul>
			  <ul class="treeview-menu">
                <li><a href="<?= Yii::$app->getUrlManager()->createUrl('/deduction_report/index'); ?>"><i class="fa fa-bar-chart"></i>Deduction Report</a></li>
              </ul>
			  <ul class="treeview-menu">
                <li><a href="<?= Yii::$app->getUrlManager()->createUrl('/graduates_report/index'); ?>"><i class="fa fa-bar-chart"></i>Graduates Report</a></li>
              </ul>
			  <ul class="treeview-menu">
                <li><a href="<?= Yii::$app->getUrlManager()->createUrl('/masterlist_of_scholars/index'); ?>"><i class="fa fa-bar-chart"></i>Masterlist of Scholars</a></li>
              </ul>
			  <ul class="treeview-menu">
                <li><a href="<?= Yii::$app->getUrlManager()->createUrl('/tuitionfee_report/index'); ?>"><i class="fa fa-bar-chart"></i>Tuition Fees Report</a></li>
              </ul>
            </li>
            <li>
              <a href="<?= Yii::$app->getUrlManager()->createUrl('/event/index'); ?>">
                <i class="fa fa-calendar"></i> <span>Calendar</span>
              </a>
            </li>
            <li><a href="documentation/index.html"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
            <li class="header">Area(legend)</li>
            <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>NCR</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Provincial</span></a></li>
            <li class="header">Payment(legend)</li>
            <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Unpayed</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-green"></i> <span>Payed</span></a></li>
			<li></li>
			<li><</li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
               <!-- Content Header (Page header) -->
		<div class="content-wrapper">
        <section class="content-header">
          <h1>
            Dashboard
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
        <?= $content ?>
		</section>
        </div>
    </div>
	
    <footer class="footer">
        <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>
        <p class="pull-right"><?= Yii::powered() ?></p>
        </div>
    </footer>
    
    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
