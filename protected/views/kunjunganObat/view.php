<?php
/* @var $this KunjunganObatController */
/* @var $model KunjunganObat */

$this->breadcrumbs=array(
	'Kunjungan Obats'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List KunjunganObat', 'url'=>array('index')),
	array('label'=>'Create KunjunganObat', 'url'=>array('create')),
	array('label'=>'Update KunjunganObat', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete KunjunganObat', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage KunjunganObat', 'url'=>array('admin')),
);
?>

<h1>View KunjunganObat #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'kunjungan_id',
		'obat_id',
		'jumlah',
	),
)); ?>
