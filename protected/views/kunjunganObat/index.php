<?php
/* @var $this KunjunganObatController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Kunjungan Obats',
);

$this->menu=array(
	array('label'=>'Create KunjunganObat', 'url'=>array('create')),
	array('label'=>'Manage KunjunganObat', 'url'=>array('admin')),
);
?>

<h1>Kunjungan Obats</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
