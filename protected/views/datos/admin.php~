<?php
/* @var $this DatosController */
/* @var $model Datos */

$this->breadcrumbs=array(
	'Datos'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listado de contactos', 'url'=>array('index')),
	array('label'=>'Registrar', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#datos-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>



<?php echo CHtml::link('Busquedad avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'datos-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'nombres',
		'apellidos',
		'fecha_nacimiento',
		'telefono',
	      array(
          'class'=>'CButtonColumn',
                  'template' => '{view} {update} {delete} {pdf}',
              'buttons'=>array(
                      'pdf' => array(
                              'label'=>'Generar PDF', 
                              'url'=>"CHtml::normalizeUrl(array('pdf', 'id'=>\$data->id))",
                              'imageUrl'=>Yii::app()->request->baseUrl.'/images/pdf_icon.png', 
                              'options' => array('class'=>'pdf'),
                      ),
              ),
      ),
	),
)); ?>
