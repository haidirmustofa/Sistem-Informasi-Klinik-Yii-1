<div class="kunjungan">
    <h4><?php echo CHtml::encode($data->pasien->nama); ?></h4>
    <p><strong>Keluhan:</strong> <?php echo CHtml::encode($data->keluhan); ?></p>
    <p><?php echo CHtml::link('Input Tindakan & Obat', array('kunjungan/input', 'id' => $data->id)); ?></p>
</div>