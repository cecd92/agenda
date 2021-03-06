<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl;?>/js/zeta.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/pdf.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
            <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/banner.jpg"></img>
	</div><!-- header -->

	<div i>
      
                
   <?php 
        
                    $this->widget('application.extensions.mbmenu.MbMenu',array(        
                                'items'=>array(
                                array('label'=>'Datos', 'url'=>array('datos/admin'),'visible'=>!Yii::app()->user->isGuest,
                                

                               

                     ), 
                    
                            
				
                     /*array('label'=>'Mantenimiento','visible'=>!Yii::app()->user->isGuest,
                        'items'=>array(  
				array('label'=>'Almacen', 'url'=>array('/almacen/admin')),
				array('label'=>'Unidad Solicitante', 'url'=>array('/unidadSolicitante/admin')),
				array('label'=>'Unidad de Medida', 'url'=>array('/unidadMedida/admin')),
				array('label'=>'Tipo Artículo', 'url'=>array('/tipoArticulo/admin')),
				array('label'=>'Usuarios del Sistema', 'url'=>array('/usuario/admin')),
				array('label'=>'Perfiles del Sistema', 'url'=>array('/perfil/admin')),
                                        )),*/
				array('label'=>'Iniciar Sesión', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Cerrar Sesión ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
                            
		)); 
   ?>
            
            
            
            
            
            
            
            
            
            
            
	</div><!-- mainmenu -->
	

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer" align="center">
                <h> Agenda - Castillo 09/01/2014</h>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
