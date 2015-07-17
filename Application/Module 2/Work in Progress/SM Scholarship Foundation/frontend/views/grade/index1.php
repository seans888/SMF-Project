<?php
/* @var $this yii\web\View */
$this->title = 'My Yii Application';
$username=Yii::$app->user->identity->username;

?>
	<section id="records" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Records</h2>
                    <h3 class="section-subheading text-muted" style="color:red;">*Please review the documents submitted to know if you are qualified for the scholarship</h3>
                </div>
            </div>
             <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="<?php echo'index.php?r=grade/index'?>" class="portfolio-link" data-toggle="modal">
                        
                        <img src="img/portfolio/d.png" class="img-responsive" alt="" style="height:250px">
                    </a>
                    <div class="portfolio-caption">
                        <h4>View Grades</h4>
						 <p class="text-muted">Past-Present</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="<?php echo'index.php?r=tuition/index'?>" class="portfolio-link" data-toggle="modal" >
                        
                        <img src="img/portfolio/e.png" class="img-responsive" alt="" style="height:250px;width:400px;">
                    </a>
                    <div class="portfolio-caption">
                        <h4>View Tuition Fees </h4>
						<p class="text-muted">Actual Tuition and Shouldered by SM</p>
                    </div>
                </div>
				 <div class="col-md-4 col-sm-6 portfolio-item" >
                    <a href="<?php echo 'index.php?r=allowance/index';?>" class="portfolio-link" data-toggle="modal">
                   
                        <img src="img/portfolio/f.png" class="img-responsive" alt="" style="height:250px;width:400px;">
                    </a>
                    <div class="portfolio-caption">
                        <h4>View Stipend and Benefits</h4>
                        <p class="text-muted">Past-Present</p>
                    </div>
                </div>
				 <div class="col-md-4 col-sm-6 portfolio-item">
                   
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                       
                        <img src="img/portfolio/g.png" class="img-responsive" alt="" style="height:250px;width:400px;">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Part Time Jobs</h4>
						<p class="text-muted">New Jobs - Taken</p>
                    </div>
                </div>
				
               </div>
    </section>
		

