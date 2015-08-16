<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
<div class="login-box">
      <div class="login-logo">
        <a href="../../index2.html"><b>SM</b>Foundation</a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
                <?= $form->field($model, 'username',['options'=>[
					'tag'=>'div',
					'class'=>'form-group field-loginform-username has-feedback required'
				],
				'template'=>'{input}<span class="glyphicon glyphicon-user form-control-feedback"></span>
					{error}{hint}'
				])->textInput(['placeholder'=>'Username']) ?>
				<?= $form->field($model, 'password',['options'=>[
					'tag'=>'div',
					'class'=>'form-group field-loginform-password has-feedback required'
				],
				'template'=>'{input}<span class="glyphicon glyphicon-lock form-control-feedback"></span>
					{error}{hint}'
				])->passwordInput(['placeholder'=>'Password']) ?>
                <?= $form->field($model, 'rememberMe',['options'=>[
					'tag'=>'div',
					'class'=>'checkbox field-loginform-rememberMe icheck'
				],
				])->checkbox() ?>
                <div class="form-group">
                    <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>
                Not an Admin?<br>
                <a href="#">Register</a> as a Scholar<br>
                <a href="http://localhost/SM%20Scholarship%20Foundation/frontend/web/index.php?r=site%2Flogin">Login</a> as a Scholar
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
