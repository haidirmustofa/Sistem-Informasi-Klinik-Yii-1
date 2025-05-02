<?php
/* @var $this KunjunganController */
/* @var $model Kunjungan */
/* @var $form CActiveForm */
?>
<div class="form">
	<?php $form = $this->beginWidget('CActiveForm', array(
		'id' => 'kunjungan-form',
		'enableAjaxValidation' => false,
	)); ?>

	<p class="note">Kolom dengan <span class="required">*</span> wajib diisi.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model, 'id_pasien'); ?>
		<?php echo $form->dropDownList($model, 'id_pasien', CHtml::listData(Pasien::model()->findAll(), 'id', 'nama'), ['prompt' => 'Pilih Pasien']); ?>
		<?php echo $form->error($model, 'id_pasien'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model, 'id_dokter'); ?>
		<?php echo $form->dropDownList($model, 'id_dokter', CHtml::listData(Pegawai::model()->findAllByAttributes(['jabatan' => 'dokter']), 'id', 'nama'), ['prompt' => 'Pilih Dokter']); ?>
		<?php echo $form->error($model, 'id_dokter'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model, 'keluhan'); ?>
		<?php echo $form->textArea($model, 'keluhan', array('rows' => 4, 'cols' => 50)); ?>
		<?php echo $form->error($model, 'keluhan'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Simpan'); ?>
	</div>

	<?php $this->endWidget(); ?>
</div>