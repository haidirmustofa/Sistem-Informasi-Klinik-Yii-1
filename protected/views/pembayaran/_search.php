<?php
/* @var $this PembayaranController */
/* @var $model Pembayaran */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kunjungan_id'); ?>
		<?php echo $form->textField($model,'kunjungan_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'total_tindakan'); ?>
		<?php echo $form->textField($model,'total_tindakan',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'total_obat'); ?>
		<?php echo $form->textField($model,'total_obat',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'total_tagihan'); ?>
		<?php echo $form->textField($model,'total_tagihan',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dibayar'); ?>
		<?php echo $form->textField($model,'dibayar',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kembalian'); ?>
		<?php echo $form->textField($model,'kembalian',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tanggal_bayar'); ?>
		<?php echo $form->textField($model,'tanggal_bayar'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kasir_id'); ?>
		<?php echo $form->textField($model,'kasir_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->