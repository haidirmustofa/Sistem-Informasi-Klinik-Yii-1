<div class="tagihan">
    <p><strong>Pasien:</strong> <?php echo $data->pasien->nama; ?></p>
    <p><strong>Total Tagihan:</strong> Rp<?php echo number_format($data->getTotalTagihan()); ?></p>
    <p><?php echo CHtml::link('Bayar Sekarang', array('pembayaran/bayar', 'id' => $data->id)); ?></p>
</div>