<?php
/* @var $this PembayaranController */
/* @var $data Pembayaran */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kunjungan_id')); ?>:</b>
	<?php echo CHtml::encode($data->kunjungan_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total_tindakan')); ?>:</b>
	<?php echo CHtml::encode($data->total_tindakan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total_obat')); ?>:</b>
	<?php echo CHtml::encode($data->total_obat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total_tagihan')); ?>:</b>
	<?php echo CHtml::encode($data->total_tagihan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dibayar')); ?>:</b>
	<?php echo CHtml::encode($data->dibayar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kembalian')); ?>:</b>
	<?php echo CHtml::encode($data->kembalian); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal_bayar')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal_bayar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kasir_id')); ?>:</b>
	<?php echo CHtml::encode($data->kasir_id); ?>
	<br />

	*/ ?>

</div>