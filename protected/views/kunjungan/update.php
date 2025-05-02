<?php
/* @var $this KunjunganController */
/* @var $model Kunjungan */

$this->breadcrumbs=array(
	'Kunjungans'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Kunjungan', 'url'=>array('index')),
	array('label'=>'Create Kunjungan', 'url'=>array('create')),
	array('label'=>'View Kunjungan', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Kunjungan', 'url'=>array('admin')),
);
?>

<h1>Update Kunjungan <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>