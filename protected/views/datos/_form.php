<?php
/* @var $this DatosController */
/* @var $model Datos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'datos-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Nombres'); ?>
		<?php echo $form->textField($model,'nombres',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nombres'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'apellidos'); ?>
		<?php echo $form->textField($model,'apellidos',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'apellidos'); ?>
	</div>
<div class="row">
		<?php echo $form->labelEx($model,'telefono'); ?>
		<?php echo $form->textField($model,'telefono',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'telefono'); ?>
	</div>

  <div class="row">
      <?php echo $form->labelEx($model,'fecha_nacimiento'); ?>
      <?php //echo $form->textArea($model,'fecha',array('rows'=>1, 'cols'=>50)); ?>
      <?php
      if ($model->fecha_nacimiento!='') {       
      $model->fecha_nacimiento=date('d-m-Y',strtotime($model->fecha_nacimiento));
      }
      $this->widget('zii.widgets.jui.CJuiDatePicker', array(
              'model'=>$model,
              'attribute'=>'fecha_nacimiento',
              'value'=>$model->fecha_nacimiento,
      'language' => 'es',
      'htmlOptions' => array('readonly'=>"readonly"),
                //additional javascript options for the date picker plugin
              'options'=>array(
                      'autoSize'=>true,
                      'defaultDate'=>$model->fecha_nacimiento,
          //'dateFormat'=>'yy-m-d',
          'dateFormat'=>'dd-mm-yy',
          'buttonImage'=>Yii::app()->baseUrl.'/images/calendar.png',
                      'buttonImageOnly'=>true,
                      'buttonText'=>'Fecha de Nacimiento',
                      'selectOtherMonths'=>true,
                      'showAnim'=>'slide',
                      'showButtonPanel'=>true,
                      'showOn'=>'button',
                      'showOtherMonths'=>true,
               'changeMonth' => 'true',
                  'changeYear' => 'true',
                  ),
      )); ?>
      <?php echo $form->error($model,'fecha_nacimiento'); ?>
  </div>
</div>
<br>

	

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Guardar' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
