<?php
/* @var $this PembayaranController */
/* @var $model Pembayaran */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pembayaran-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'kunjungan_id'); ?>
		<?php echo $form->textField($model,'kunjungan_id'); ?>
		<?php echo $form->error($model,'kunjungan_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'total_tindakan'); ?>
		<?php echo $form->textField($model,'total_tindakan',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'total_tindakan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'total_obat'); ?>
		<?php echo $form->textField($model,'total_obat',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'total_obat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'total_tagihan'); ?>
		<?php echo $form->textField($model,'total_tagihan',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'total_tagihan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dibayar'); ?>
		<?php echo $form->textField($model,'dibayar',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'dibayar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kembalian'); ?>
		<?php echo $form->textField($model,'kembalian',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'kembalian'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tanggal_bayar'); ?>
		<?php echo $form->textField($model,'tanggal_bayar'); ?>
		<?php echo $form->error($model,'tanggal_bayar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kasir_id'); ?>
		<?php echo $form->textField($model,'kasir_id'); ?>
		<?php echo $form->error($model,'kasir_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->