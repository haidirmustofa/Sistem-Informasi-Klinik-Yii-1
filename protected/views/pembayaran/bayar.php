<h1>Pembayaran Pasien</h1>

<p>Nama Pasien: <strong><?php echo $kunjungan->pasien->nama; ?></strong></p>
<p>Total Tagihan: <strong>Rp<?php echo number_format($kunjungan->getTotalTagihan()); ?></strong></p>

<?php echo CHtml::beginForm(); ?>

<div>
    <label>Dibayar</label>
    <?php echo CHtml::activeTextField($model, 'dibayar'); ?>
</div>

<?php echo CHtml::submitButton('Simpan Pembayaran'); ?>

<?php echo CHtml::endForm(); ?>