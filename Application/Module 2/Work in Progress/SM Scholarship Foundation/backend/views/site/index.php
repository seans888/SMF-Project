<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\grid\GridView;
$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <center><h1>Welcome Admin!</h1></center>

    <div class="body-content">
	
	          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3>Upload</h3>
				  <br><br>
                  <p>Upload Requirements</p>
                </div>
                <div class="icon">
                  <i class="fa fa-file-o"></i>
                </div>
                <a href="<?= Yii::$app->getUrlManager()->createUrl('/uploadedforms/create'); ?>" class="small-box-footer">Upload Now&nbsp&nbsp&nbsp<i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3>Report</h3>
				  <br><br>
                  <p>List of Reports</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="<?= Yii::$app->getUrlManager()->createUrl('/gpa_report/index'); ?>" class="small-box-footer">Select a Report to Create&nbsp&nbsp&nbsp<i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
			</div><!-- ./row -->
			<div class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3>Scholar</h3>
				  <br><br>
                  <p>Add scholar</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="<?= Yii::$app->getUrlManager()->createUrl('/scholars/create'); ?>" class="small-box-footer">Add a Scholar Record Now&nbsp&nbsp&nbsp<i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3>Calendar</h3>
				  <br><br>
                  <p>Check the Calendar of events</p>
                </div>
                <div class="icon">
                  <i class="fa fa-calendar"></i>
                </div>
                <a href="<?= Yii::$app->getUrlManager()->createUrl('/event/index'); ?>" class="small-box-footer">Check Calendar Now&nbsp&nbsp&nbsp<i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
          </div><!-- /.row -->
	
            </section><!-- /.Left col -->

    </div>
</div>
