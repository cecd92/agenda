<?php
/* @var $this DatosController */
/* @var $model Datos */

$this->breadcrumbs=array(
	'Datos'=>array('index'),
	'Guardar Contacto',
);

$this->menu=array(
	array('label'=>'Registro', 'url'=>array('index')),
	array('label'=>'Administrar', 'url'=>array('admin')),
);
?>

<h1>Create Datos</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
