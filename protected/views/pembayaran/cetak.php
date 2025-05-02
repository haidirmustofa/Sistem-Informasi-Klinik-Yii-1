<h2>Kwitansi Pembayaran</h2>
<p>No. Transaksi: <?php echo $model->id; ?></p>
<p>Nama Pasien: <?php echo $model->kunjungan->pasien->nama; ?></p>
<p>Tanggal: <?php echo date('d M Y', strtotime($model->tanggal)); ?></p>
<hr>
<p>Total: Rp <?php echo number_format($model->total, 0, ',', '.'); ?></p>

<script>
    window.print();
</script>