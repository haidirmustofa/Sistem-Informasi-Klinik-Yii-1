<?php
/* @var $this KunjunganObatController */
/* @var $model KunjunganObat */

$this->breadcrumbs=array(
	'Kunjungan Obats'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List KunjunganObat', 'url'=>array('index')),
	array('label'=>'Create KunjunganObat', 'url'=>array('create')),
	array('label'=>'View KunjunganObat', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage KunjunganObat', 'url'=>array('admin')),
);
?>

<h1>Update KunjunganObat <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>