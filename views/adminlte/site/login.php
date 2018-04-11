<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this app\components\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

$this->title = 'Sign In';

$fieldOptions1 = [
	'options' => ['class' => 'form-group has-feedback'],
	'inputTemplate' => "{input}<span class='fa fa-envelope form-control-feedback'></span>"
];

$fieldOptions2 = [
	'options' => ['class' => 'form-group has-feedback'],
	'inputTemplate' => "{input}<span class='fa fa-lock form-control-feedback'></span>"
];
?>

<div class="login-box">
	<div class="login-logo">
		<a href="#"><b>App</b>Standard</a>
	</div>
	<!-- /.login-logo -->
	<div class="login-box-body">
		<p class="login-box-msg">Login App Standard</p>

		<?php $form = ActiveForm::begin(['id' => 'login-form', 'enableClientValidation' => false]); ?>

		<?= $form
			->field($model, 'username', $fieldOptions1)
			->label(false)
			->textInput(['placeholder' => $model->getAttributeLabel('username')]) ?>

		<?= $form
			->field($model, 'password', $fieldOptions2)
			->label(false)
			->passwordInput(['placeholder' => $model->getAttributeLabel('password')]) ?>

		<div class="row">
			<div class="col-xs-8">
				&nbsp;<?php /*$form->field($model, 'rememberMe')->checkbox()*/ ?>
			</div>
			<!-- /.col -->
			<div class="col-xs-4">
				<?= Html::submitButton('<i class="fa fa-sign-in"></i> Sign in', 
					['class' => 'btn btn-primary btn-block btn-flat',
					'name' => 'login-button']) ?>
			</div>
			<!-- /.col -->
		</div>


		<?php ActiveForm::end(); ?>

		<!-- div class="social-auth-links text-center">
			<p>- OR -</p>
			<a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in
				using Facebook</a>
			<a href="#" class="btn btn-block btn-social btn-google-plus btn-flat"><i class="fa fa-google-plus"></i> Sign
				in using Google+</a>
		</div -->
		<!-- /.social-auth-links -->

		<!-- a href="#">I forgot my password</a><br>
		<a href="register.html" class="text-center">Register a new membership</a -->
	</div>
	<!-- /.login-box-body -->
</div><!-- /.login-box -->
