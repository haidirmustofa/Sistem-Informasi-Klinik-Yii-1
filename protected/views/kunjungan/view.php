<?php
/* @var $this KunjunganController */
/* @var $model Kunjungan */

$this->breadcrumbs=array(
	'Kunjungans'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Kunjungan', 'url'=>array('index')),
	array('label'=>'Create Kunjungan', 'url'=>array('create')),
	array('label'=>'Update Kunjungan', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Kunjungan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Kunjungan', 'url'=>array('admin')),
);
?>

<h1>View Kunjungan #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'pasien_id',
		'tanggal_kunjungan',
		'jenis_kunjungan',
		'keluhan',
		'created_by',
		'created_at',
	),
)); ?>
