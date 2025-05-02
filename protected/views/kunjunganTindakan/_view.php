<?php
/* @var $this KunjunganTindakanController */
/* @var $data KunjunganTindakan */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kunjungan_id')); ?>:</b>
	<?php echo CHtml::encode($data->kunjungan_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tindakan_id')); ?>:</b>
	<?php echo CHtml::encode($data->tindakan_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jumlah')); ?>:</b>
	<?php echo CHtml::encode($data->jumlah); ?>
	<br />


</div>