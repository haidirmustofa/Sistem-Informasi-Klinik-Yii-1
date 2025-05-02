<?php
/* @var $this WilayahController */
/* @var $model Wilayah */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'wilayah-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'provinsi'); ?>
		<?php echo $form->textField($model,'provinsi',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'provinsi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kabupaten'); ?>
		<?php echo $form->textField($model,'kabupaten',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'kabupaten'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'created_at'); ?>
		<?php echo $form->textField($model,'created_at'); ?>
		<?php echo $form->error($model,'created_at'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->