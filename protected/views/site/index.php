<?php
/* @var $this SiteController */
$this->pageTitle = Yii::app()->name;
?>
<!DOCTYPE html>
<html lang="id">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Dashboard - Klinik</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center mt-5">
				<h1>Selamat Datang di Sistem Informasi Klinik</h1>
				<p class="lead">Sistem ini memudahkan pengelolaan klinik Anda</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3">
				<div class="card">
					<div class="card-header">
						<h4>Menu</h4>
					</div>
					<div class="list-group">
						<a href="<?= Yii::app()->createUrl('pendaftaran/index'); ?>" class="list-group-item">Pendaftaran Pasien</a>
						<a href="<?= Yii::app()->createUrl('tindakan/index'); ?>" class="list-group-item">Tindakan & Obat</a>
						<a href="<?= Yii::app()->createUrl('pembayaran/index'); ?>" class="list-group-item">Pembayaran</a>
						<a href="<?= Yii::app()->createUrl('laporan/index'); ?>" class="list-group-item">Laporan</a>
					</div>
				</div>
			</div>
			<div class="col-md-9">
				<div class="card">
					<div class="card-header">
						<h4>Informasi Klinik</h4>
					</div>
					<div class="card-body">
						<h5>Jumlah Pasien Hari Ini: 50</h5>
						<h5>Jenis Tindakan Terbanyak: Pemeriksaan Umum</h5>
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