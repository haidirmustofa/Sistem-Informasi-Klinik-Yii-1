<?php
/* @var $this KunjunganObatController */
/* @var $data KunjunganObat */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kunjungan_id')); ?>:</b>
	<?php echo CHtml::encode($data->kunjungan_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('obat_id')); ?>:</b>
	<?php echo CHtml::encode($data->obat_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jumlah')); ?>:</b>
	<?php echo CHtml::encode($data->jumlah); ?>
	<br />


</div>