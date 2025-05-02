<h1>Input Tindakan dan Obat</h1>
<p>Pasien: <strong><?php echo $model->pasien->nama; ?></strong></p>

<?php echo CHtml::beginForm(); ?>

<div>
    <label>Tindakan</label>
    <?php echo CHtml::activeDropDownList($tindakan, 'id_tindakan', CHtml::listData(Tindakan::model()->findAll(), 'id', 'nama'), ['prompt' => 'Pilih tindakan']); ?>
</div>

<div>
    <label>Obat</label>
    <?php echo CHtml::activeDropDownList($obat, 'id_obat', CHtml::listData(Obat::model()->findAll(), 'id', 'nama'), ['prompt' => 'Pilih obat']); ?>
</div>

<?php echo CHtml::submitButton('Simpan'); ?>
<?php echo CHtml::endForm(); ?>