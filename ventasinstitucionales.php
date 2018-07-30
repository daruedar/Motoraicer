<?php
include 'micro/MisClases/DriverBD.php';
include 'micro/MisClases/Shika.php';
//require_once("MisClases/Shika.php");
//require_once("MisClases/DriverBD.php");
require_once("micro/MisClases/Producto.php");
$var= new Producto();
$lista=$var->getLista();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" style="height: 100%;" lang="en">
<head>
    <!--**********************EDITAR METADATOS Y PALABRAS CLAVES-->
    
<link href="autenticos/css.css" rel="stylesheet" type="text/css">
<link href="autenticos/translateelement.css"type="text/css" rel="stylesheet" charset="UTF-8" >
<link href="autenticos/buttons.css"rel="stylesheet" type="text/css" >
<link href="autenticos/cd3d4ebe845a93a761b3a60a6ae34052.css"rel="stylesheet" type="text/css"  media="all">
<link href="autenticos/a8d7bbe2916ed0f52877eaeee2bd058b.css"rel="stylesheet" type="text/css"  media="print">
<link rel="stylesheet" type="text/css" href="autenticos/flexslider.css" media="all">
<link rel="stylesheet" type="text/css" href="autenticos/font/css/font-awesome.min.css" media="all">

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="viewport" content="width=device-width,minimum-scale=1,maximum-scale=1">


<script src="autenticos/bat.js" async=""></script>
<script async="" src="autenticos/analytics.js"></script>
<script type="text/javascript" async="" src="autenticos/ga_002.js"></script>
<script type="text/javascript" async="" src="autenticos/114771.js"></script>
<script type="text/javascript" async="" src="autenticos/gate.js"></script>
<script type="text/javascript" src="autenticos/jquery-1.js"></script>
<script type="text/javascript" src="autenticos/superfish.js"></script>
<script type="text/javascript" src="autenticos/scripts.js"></script>

<script type="text/javascript" src="autenticos/prototype.js"></script>
<script type="text/javascript" src="autenticos/ccard.js"></script>
<script type="text/javascript" src="autenticos/validation.js"></script>
<script type="text/javascript" src="autenticos/builder.js"></script>
<script type="text/javascript" src="autenticos/effects.js"></script>
<script type="text/javascript" src="autenticos/dragdrop.js"></script>
<script type="text/javascript" src="autenticos/controls.js"></script>
<script type="text/javascript" src="autenticos/slider.js"></script>
<script type="text/javascript" src="autenticos/js.js"></script>
<script type="text/javascript" src="autenticos/form.js"></script>
<script type="text/javascript" src="autenticos/translate.js"></script>
<script type="text/javascript" src="autenticos/cookies.js"></script>
<script type="text/javascript" src="autenticos/cloud-zoom.js"></script>
<script type="text/javascript" src="autenticos/ga.js"></script>
<script type="text/javascript" src="autenticos/lightbox.js"></script>
<script type="text/javascript" src="autenticos/jquery_002.js"></script>
<script type="text/javascript" src="autenticos/jquery_004.js"></script>
<script type="text/javascript" src="autenticos/jquery_003.js"></script>
<script type="text/javascript" src="autenticos/bootstrap.js"></script>
<script type="text/javascript" src="autenticos/jquery_005.js"></script>
<script type="text/javascript" src="autenticos/jquery.js"></script>
<script type="text/javascript" src="autenticos/jquery_006.js"></script>
<script type="text/javascript" src="autenticos/catalogevent.js"></script>
<script type="text/javascript" src="autenticos/wishlist.js"></script>
<script type="text/javascript" src="autenticos/easytabs.js"></script>
<script type="text/javascript" src="autenticos/carousel.js"></script>
<script src="autenticos/integration-vendors.js"></script>
<script type="text/javascript" src="autenticos/deployment.js"></script>
<script type="text/javascript" charset="UTF-8" src="autenticos/main_es.js"></script>
<script type="text/javascript" charset="UTF-8" src="autenticos/element_main.js"></script>
<script type="text/javascript" src="autenticos/integration.js"></script>
<script type="text/javascript" src="autenticos/conversion.js"></script>
<script type="text/javascript" src="autenticos/element.js"></script>
<script src="autenticos/jquery_002.js"></script>
<script type="text/javascript" src="autenticos/uno.js"></script>
</head>
<body class="ps-static  cms-index-index cms-home" style="position: relative; min-height: 100%; top: 0px;">   
	<div class="wrapper ps-static en-lang-class"><!--1-->
		<noscript><!--1.1-->
        <div class="global-site-notice noscript">
            <div class="notice-inner">
                <p>
                    <strong>JavaScript seems to be disabled in your browser.</strong><br />
                    You must have JavaScript enabled in your browser to utilize the functionality of this website. </p>
            </div>
        </div>
		</noscript>
		
		<div class="page"><!--1.2-->
			<div class="shadow"></div><!--1.2.1  VACIO-->
			<div class="swipe-left"></div><!--1.2.2   VACIO-->
			<?php include "micro/motopartes/menusuperiormovil.php" ?>
			<div class="header-container"><!--1.2.5-->
			    <?php include "micro/motopartes/encabezado.php" ?>
			    <?php //include "micro/motopartes/menumovil.php" ?>
			    <script type="text/javascript"><!--1.2.7-->
				    jQuery(document).ready(function() {
				        var $ = jQuery;var currentUrl = "";
				    if ((navigator.userAgent.match(/iPad/i))) {
				        $('li.level-top a').click(function(){
                     if($(this).parent().hasClass("level1")) return true;if(currentUrl != $(this).attr('href')){currentUrl = $(this).attr('href');return false;}});
				    }});
				
			    </script>
			    <div class="main-container col2-left-layout"><!--1.2.8--><!--El mas denso-->
				    <div class="container">
					    <div class="row">
					    <div class="col-xs-12">
						    <div class="main">
							    <div class="row">
	<!-- Baner  new  -->			<div class="col-main col-xs-12 col-sm-9">
							
<div class="padding-s">
	<div class="page-title"><h1>VENTAS INSTITUCIONALES</h1></div>
    <div class="std">
     <p><h2>&#191;Qu&eacute; es Venta a Empresas?</h2></p>

<h3>Venta a Empresas es un canal diseñado para optimizar la proveedur&iacute;a de 
su taller de reparaciones o su punto de venta, con un amplio portafolio de repuestos y accesorios para motocicletas para las marcas más  comercializadas en Colombia que resuelven sus necesidades siempre de manera oportuna.
<p>Con el respaldo de Motoraicer S.A.  Venta a Empresas se convierte en su aliado efectivo a la hora de  diversificar los repuestos y accesorios comercializados en su negocio o taller comprando solo los repuestos que  ya  han sido solicitados con anticipacion.
</p>

</h3>

<!--**************************************************************-->
<p><h2>Nuestros beneficios le permitir&aacute;n ahorrar tiempo y dinero</h2></p>
<h3><ul>
<li>Encuentre todo lo que necesita para su taller o negocio en un solo lugar.</li>
<li>Disponga de las cantidades necesarias en las presentaciones mas convenientes.</li>
<li>Descuentos en compras por volumen.</li>
<li>Seleccione la alternativa de pago m&aacute;s favorable.</li>
<li>Reciba facturas personalizadas.</li>
</ul>
</h3>
<!--**************************************************************-->
<p><h2>
   En Venta a Empresas le ayudamos con sus ventas, mantenimientos y reparaciones
</h2></p>	

<p><h3>
    <ul>
<li>Cotizaciones la instante.</li>
<li>Tiempos de entrega programables.</li>
<li>Informaci&oacute;n de productos y servicios.</li>
<li>Asesor&iacute;a t&eacute;cnica especializada.</li>
<li>Portafolio de productos con  todos en las cantidades y presentaciones </li>
<li>Entregas directas en todo el territorio nacional (sujetos al volumen e inventario).</li>
<li>Compras no presenciales.</li>
<li>Descuentos adicionales para mayoristas</li>
</ul>
    
    </h3>
</p>

<!--**************************************************************-->
<p><h2>¿Cómo comprar en www.motoraicer.com?</h2></p>
<h3>Para comprar en www.motoraicer.com, debe seguir los siguientes pasos:</h3>
	<ul>
		<li><h3>1- Ingrese a www.motoraicer.com</h3></li>
		<li><h3>2- Ubique el repuesto o accesorio de interes navegando  por el menu izquierdo</h3></li>
		<li><h3>3- Ingrese el producto al carrito pulsando el boton comprar</h3></li>
		<li><h3>4- Clic en seguir comprando, si desea agregar más repuestos a su lista de compras</h3></li>
		<li><h3>5- Al finalizar la seleccion de producto de Clic en Ir a pagar</h3></li>
		<li><h3>6-Ingrese los datos de entrega  y facturación</h3></li>
		<li><h3>7- Elija el medio de pago: efectivo o pago en linea</h3></li>
		<li><h3>8- Ingrese los datos de la tarjeta o del medio de pago elegido</h3></li>
		<li><h3>9- Confirme su pedido</li>
	    <li><h3>10- Revise su correo donde se le indicará datos y fecha de entrega </h3></li>
	</ul>
<!--**************************************************************-->
<p><h2>Despacho a Domicilio</h2>
</p>

<p><h3>
    Reciba los repuestos y accesorios en su empresa, negocio o taller  con la mayor puntualidad
    dentro de los siguientes 4 dias habiles posteriores a la confirmación del pago.

</h3></p>

<!--**************************************************************-->

											
<!--**************************************************************-->

<!--**************************************************************-->


</div>                                    </div>
								
								
								
							

								    </div>

							        <?php include "micro/motopartes/menuizq3.php" ?>
							    
							    </div><!--Fin de clase row-->
	                        </div><!--Fin de clase main-->
	                    </div><!--Fin de clase col-xs-12-->
	                    </div><!--Fin de clase row-->
                    </div><!--Fin de clase container-->
                </div><!--main-container   El mas denso-->
		
		
			 <?php include "micro/motopartes/foter.php" ?>
		</div><!--Fin del Page-->
	</div>
    <?php //include "micro/motopartes/ventas.php" ?>
	
	
</body>

</html>


















								
								
    				
				
				
								
					
						