<?php
/* @var $this KunjunganObatController */
/* @var $model KunjunganObat */

$this->breadcrumbs=array(
	'Kunjungan Obats'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List KunjunganObat', 'url'=>array('index')),
	array('label'=>'Manage KunjunganObat', 'url'=>array('admin')),
);
?>

<h1>Create KunjunganObat</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>