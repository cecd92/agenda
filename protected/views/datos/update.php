<?php
/* @var $this DatosController */
/* @var $model Datos */

$this->breadcrumbs=array(
	'Datos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Listado de contactos', 'url'=>array('index')),
	array('label'=>'Registrar', 'url'=>array('create')),
	array('label'=>'Ver Datos', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Datos', 'url'=>array('admin')),
);
?>

<h1>Update Datos <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
