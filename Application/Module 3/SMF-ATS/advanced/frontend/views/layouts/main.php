<?php


use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use frontend\widgets\Alert;
use frontend\models\Alumni;
use yii\helpers\ArrayHelper;
use frontend\models\User;
use frontend\models\Employee;
//use frontend\models\Alumni;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
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
<body>
    <?php $this->beginBody() ?>
    <div class="wrap">
	
        <?php
            NavBar::begin([
                'brandLabel' => 'SM Foundation',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top',
                ],
            ]);
            $menuItems = [
                ['label' => 'Home', 'url' => ['/site/index']],
                ['label' => 'About', 'url' => ['/site/about']],
                ['label' => 'Contact', 'url' => ['/site/contact']],
				
				
            ];
            if (Yii::$app->user->isGuest) {
               // $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
                $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
            } else {


			$roles = Yii::$app->user->identity->user_type;
			if ($roles == 'admin'){
			
			 $menuItems =[
				['label' => 'Home', 'url' => ['/site/index']],
				['label' => 'Alumni', 'url' => ['/alumni/index']],
				//['label' => 'Course', 'url' => ['/course/index']],
				//['label' => 'School', 'url' => ['/school/index']],
				['label' => 'Employee', 'url' => ['/employee/index']],
                ['label' => 'Event', 'url' => ['/event/index']],
				//['label' => 'Logs', 'url' => ['/logs/index']],
				//['label' => 'Migration', 'url' => ['/migrated-alumni/index']],
				['label' => 'Testimonials', 'url' => ['/testimonials/index']],
				['label' => 'Users', 'url' => ['/user/index']],
				[ 
                    'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                    'url' => ['/site/logout'],
                    'linkOptions' => ['data-method' => 'post']],
					
               
					
					
                ];
				
			}else if ($roles == 'user'){
			$userid = ArrayHelper::getValue(User::find()->where(['username' => Yii::$app->user->identity->username])->one(), 'id');
			$employeeid = ArrayHelper::getValue(Employee::find()->where(['user_id' => $userid])->one(), 'employee_id');

			
                $menuItems =[
				['label' => 'Home', 'url' => ['/site/index']],
				['label' => 'Alumni', 'url' => ['/alumni/index']],
				//['label' => 'City', 'url' => ['/city/index']],
				//['label' => 'Course', 'url' => ['/course/index']],
				//['label' => 'School', 'url' => ['/school/index']],
				//['label' => 'Province', 'url' => ['/province/index']],
				//['label' => 'Region', 'url' => ['/region/index']],
				['label' => 'Employee', 'url' => ['/employee/view', 'id' => $employeeid]],
                ['label' => 'Event', 'url' => ['/event/index']],
				['label' => 'Logs', 'url' => ['/logs/index']],
				//['label' => 'Migration', 'url' => ['/migration/index']],
				['label' => 'Testimonials', 'url' => ['/testimonials/index']],
				//['label' => 'Users', 'url' => ['/user/index']],
				[ 
                    'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                    'url' => ['/site/logout'],
                    'linkOptions' => ['data-method' => 'post']],
					
               
					
					
                ];
				}else if ($roles == 'alumni'){
				$userid = ArrayHelper::getValue(User::find()->where(['username' => Yii::$app->user->identity->username])->one(), 'id');
				$alumniid = ArrayHelper::getValue(Alumni::find()->where(['user_id' => $userid])->one(), 'id');
				
				$menuItems =[
				['label' => 'Home', 'url' => ['/site/index']],
				['label' => 'Alumni', 'url' => ['/alumni/view', 'id' => $alumniid]],
				['label' => 'Event', 'url' => ['/event/index']],
				['label' => 'Testimonials', 'url' => ['/testimonials/index']],
				
				[ 
                    'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                    'url' => ['/site/logout'],
                    'linkOptions' => ['data-method' => 'post']],
					
               
					
					
                ];
				
				}
			}
			
			
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => $menuItems,
            ]);
            NavBar::end();
        ?>

        <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
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
