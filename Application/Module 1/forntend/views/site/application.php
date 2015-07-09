<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'SM FOUNDATION ONLINE APPLICATION FORM';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-application">
	<h1><?= Html::encode($this->title) ?></h1>
	<h2>A. PERSONAL BACKGROUND</h2>
	
	<div class="row">
		<div class="col-lg-5">
			<?php $form = ActiveForm::begin(['id' => 'application-form']); ?>
				<?= $form->field($model, 'last_name') ?>
				<?= $form->field($model, 'first_name') ?>
				<?= $form->field($model, 'middle_name') ?>
				<?= $form->field($model, 'city_address') ?>
				<?= $form->field($model, 'telephone_no') ?>
				<?= $form->field($model, 'email') ?>
				<?= $form->field($model, 'cellphone_no') ?>
				<p><strong>Birth month
				<select name="birth_month">
				<option value="">Select...</option>
				<option value="jan">January</option>
				<option value="feb">February</option>
				<option value="mar">March</option>
				<option value="apr">April</option>
				<option value="may">May</option>
				<option value="june">June</option>
				<option value="jul">July</option>
				<option value="aug">August</option>
				<option value="sept">September</option>
				<option value="oct">October</option>
				<option value="nov">November</option>
				<option value="dec">December</option>
				</select>
				</strong></p>
				<?= $form->field($model, 'birth_date') ?>
				<?= $form->field($model, 'birth_year') ?>
				<?= $form->field($model, 'status') ?>
				<p><strong>Sex
				<select name="sex">
				<option value="">Select...</option>
				<option value="M">Male</option>
				<option value="F">Female</option>
				</select>
				</strong></p>
				<?= $form->field($model, 'birth_place') ?>
				<?= $form->field($model, 'nationality') ?>
				<?= $form->field($model, 'height') ?>
				<?= $form->field($model, 'weight') ?>
				<?= $form->field($model, 'religion') ?>
				<div class="form-group">
					<?= Html::submitButton('submit', ['class' => 'btn btn-primary', 'name' => 'application-button']) ?>
				</div>
			<?php ActiveForm::end(); ?>
		</div>
	</div>
</div>
