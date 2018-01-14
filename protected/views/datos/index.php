<?php
/* @var $this DatosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Datos',
);

$this->menu=array(
	array('label'=>'Registrar', 'url'=>array('create')),
	array('label'=>'Administrar', 'url'=>array('admin')),
);
?>

<h1>Datoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
