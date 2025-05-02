<?php
/* @var $this KunjunganController */
/* @var $model Kunjungan */
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
		<?php echo $form->label($model,'pasien_id'); ?>
		<?php echo $form->textField($model,'pasien_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tanggal_kunjungan'); ?>
		<?php echo $form->textField($model,'tanggal_kunjungan'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jenis_kunjungan'); ?>
		<?php echo $form->textField($model,'jenis_kunjungan',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'keluhan'); ?>
		<?php echo $form->textArea($model,'keluhan',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'created_by'); ?>
		<?php echo $form->textField($model,'created_by'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'created_at'); ?>
		<?php echo $form->textField($model,'created_at'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->