<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print">
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection">
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

	<div class="container" id="page">

		<div id="header">
			<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
		</div><!-- header -->

		<div id="mainmenu">
			<?php $this->widget('zii.widgets.CMenu', array(
				'items' => array_merge(
					array(
						array('label' => 'Beranda', 'url' => array('/site/index')),
					),
					Yii::app()->user->isGuest ? array(
						array('label' => 'Login', 'url' => array('/site/login')),
					) : (
							Yii::app()->user->role == 'admin' ? array(
								array('label' => 'Kelola User', 'url' => array('/user/admin')),
								array('label' => 'Kelola Pegawai', 'url' => array('/pegawai/admin')),
								array('label' => 'Master Wilayah', 'url' => array('/wilayah/admin')),
								array('label' => 'Master Tindakan', 'url' => array('/tindakan/admin')),
								array('label' => 'Master Obat', 'url' => array('/obat/admin')),
							) : (Yii::app()->user->role == 'petugas' ? array(
								array('label' => 'Pendaftaran Pasien', 'url' => array('/pasien/create')),
								array('label' => 'Riwayat Kunjungan', 'url' => array('/kunjungan/admin')),
							) : (Yii::app()->user->role == 'dokter' ? array(
									array('label' => 'Tindakan & Resep', 'url' => array('/tindakanPasien/index')),
								) : (Yii::app()->user->role == 'kasir' ? array(
										array('label' => 'Pembayaran Pasien', 'url' => array('/pembayaran/index')),
									) : array())
								))
						),
					array(
						array('label' => 'Logout (' . Yii::app()->user->name . ')', 'url' => array('/site/logout'))
					)
				),
			)); ?>
		</div><!-- mainmenu -->
		<?php if (isset($this->breadcrumbs)): ?>
			<?php $this->widget('zii.widgets.CBreadcrumbs', array(
				'links' => $this->breadcrumbs,
			)); ?><!-- breadcrumbs -->
		<?php endif ?>

		<?php echo $content; ?>

		<div class="clear"></div>

		<div id="footer">
			Copyright &copy; <?php echo date('Y'); ?> by My Company.<br />
			All Rights Reserved.<br />
			<?php echo Yii::powered(); ?>
		</div><!-- footer -->

	</div><!-- page -->

</body>

</html>