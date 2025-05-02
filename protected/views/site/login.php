<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */
$this->pageTitle = Yii::app()->name . ' - Login';
?>
<!DOCTYPE html>
<html lang="id">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login - Sistem Informasi Klinik</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-6">
				<div class="card mt-5">
					<div class="card-header">
						<h3 class="text-center">Login ke Sistem</h3>
					</div>
					<div class="card-body">
						<?php $form = $this->beginWidget('CActiveForm', [
							'id' => 'login-form',
							'enableClientValidation' => true,
							'clientOptions' => ['validateOnSubmit' => true],
							'htmlOptions' => ['class' => 'form-horizontal'],
						]); ?>

						<div class="form-group">
							<?php echo $form->labelEx($model, 'username', ['class' => 'control-label']); ?>
							<?php echo $form->textField($model, 'username', ['class' => 'form-control', 'placeholder' => 'Username']); ?>
							<?php echo $form->error($model, 'username'); ?>
						</div>

						<div class="form-group">
							<?php echo $form->labelEx($model, 'password', ['class' => 'control-label']); ?>
							<?php echo $form->passwordField($model, 'password', ['class' => 'form-control', 'placeholder' => 'Password']); ?>
							<?php echo $form->error($model, 'password'); ?>
						</div>

						<div class="form-group">
							<?php echo CHtml::submitButton('Login', ['class' => 'btn btn-primary btn-block']); ?>
						</div>

						<?php $this->endWidget(); ?>
					</div>
					<div class="card-footer text-center">
						<p>Belum punya akun? <a href="#">Daftar di sini</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.5/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>