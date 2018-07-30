<?php
session_start();
$t=session_id();

include("micro/MisClases/Visitantes.php");
$ip=$_SERVER['REMOTE_ADDR'];
date_default_timezone_set('America/Bogota');
$fecha=date("Y-m-d");
$pagina='Formulario de Compra';
$navegador=$_SERVER['HTTP_USER_AGENT'];;
$hora=date('H:i:s');
$prueba = new Visitantes($ip,$fecha,$pagina,$navegador,$hora);
$prueba->reportar();


if(isset($_POST['llave'])){
$origen=$_POST['llave'];
$llave='fxmz45y';
if (strcmp($origen, $llave) === 0){
   //echo "Origen de pagina valido";

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
			    <?php include "micro/motopartes/menumovil.php" ?>
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
							         <div class="col-right sidebar col-xs-12 col-sm-3">
			    <div id="checkout-progress-wrapper">
				<div class="block block-progress opc-block-progress last_block first">    
					<div class="block-title">
						<strong><span>Opciones de Pago</span></strong>
						<span class="toggle"></span>
					</div>
					<div class="block-content">
						<dl>
							<div id="billing-progress-opcheckout">
								<dt class="">Efectivo</dt>
							</div>
							<div>
							    <img src="https://www.payulatam.com/wp-content/uploads/2017/03/efecty-1.png" class="img-responsive">
							</div>
							<br>
							<div>
							    <img src="https://www.payulatam.com/wp-content/uploads/2017/03/sured.png" class="img-responsive">
							</div>
							<br>
							<div>
							    <img src="https://www.payulatam.com/wp-content/uploads/2017/03/viabaloto.png" class="img-responsive">
							</div>
							<br>
							<div id="shipping-progress-opcheckout">
								<dt class="">Pago en Bancos</dt>
							</div>
							
							<div><img src="https://www.payulatam.com/wp-content/uploads/2017/03/davivienda-1.png" class="img-responsive"></div>
							<div><img src="https://www.payulatam.com/wp-content/uploads/2017/03/bancobog.png" class="img-responsive"></div>
							<div><img src="https://www.payulatam.com/wp-content/uploads/2017/03/bancolombia-1.png" class="img-responsive"></div>
				
							<div id="shipping_method-progress-opcheckout"  style="margin-top:10px;">
							   <dt class="">Transferencia Bancaria</dt>
							  
							</div>
				            <div><img src="https://www.payulatam.com/wp-content/uploads/2017/03/PSE.png" class="img-responsive"></div>
				        
							<div id="payment-progress-opcheckout" style="margin-top:10px;">
								<dt class="">Tarjetas de Credito</dt>
							</div>
							
							
							<div><img src="https://www.payulatam.com/wp-content/uploads/2017/03/AmericanExpress_PayU.png" class="img-responsive" style="float:left;"></div>
						    <div style="background-color:white;height;30px;width:45px;float:left">&nbsp;</div>
							<div><img src="https://www.payulatam.com/wp-content/uploads/2017/03/Master_PayU.png" class="img-responsive"style="float:left;"></div>
							<div style="background-color:white;height;30px;width:35px;float:left">&nbsp;</div>
							<div><img src="https://www.payulatam.com/wp-content/uploads/2017/03/Visa_PayU.png" class="img-responsive" style="float:left;"></div>
				
				            <div> <div style="background-color:white;height;30px;width:85px;float:left">&nbsp;</div>
				                <img src="https://www.payulatam.com/wp-content/uploads/2017/03/DinersClub_PayU.png" class="img-responsive" style="float:left;" >
				            </div>
						</dl>
					</div>
				</div>
			    </div>
		</div>
	<!-- Baner  new  -->			<div class="col-main col-xs-12 col-sm-9">
									    <div class="padding-s">
									       
	<div class="page-title"><h1>Finaliza tu Compra</h1></div>
        <ol class="opc" id="checkoutSteps">
            <li id="opc-billing" class="section allow active">
                <div id="checkout-step-billing" class="step a-item" >
                    <form id="co-billing-form" action="">
                        <div class="fieldset" style="margin-top:-25px;">
                           
                             <ul class="form-list">
                               <li id="billing-new-address-form" class="scaffold-form">
                                <div class="fieldset" style="margin-top:2px;">
                                 <input name="billing[address_id]" value="" id="billing:address_id" type="hidden">
                                  <ul>
                                      
                                <li class="fields">
                                    <div class="customer-name-middlename">
                                    
                                     <div class="field name-firstname">
                                       <label for="billing:firstname" class="required"><em>*</em>Primer Nombre</label>
                                       <div class="input-box">
                                        <input id="billing:firstname" value=""name="nombre1" title="First Name" maxlength="255" class="input-text required-entry form-control" type="text">
                                            <div id="mensaje1" style="display:none;z-index:300;color:blue;font-size:17px;">Escriba su nombre</div>
                                       </div>
                                     </div>  
                                     
                                     <div class="field name-middlename">
                                      <label for="billing:middlename">Segundo Nombre</label>
                                      <div class="input-box">
                                        <input id="billing:middlename" value="" name="nombre2" title="Middle Name/Initial" class="input-text  form-control" type="text">
                                      </div>
                                     </div>
                                     
                                    <div class="field name-lastname">
                                      <label for="billing:lastname" class="required"><em>*</em>Apellidos</label>
                                      <div class="input-box">
                                            <input id="billing:lastname" value="" name="apellido" title="Last Name" maxlength="255" class="input-text required-entry form-control" type="text">
                                            <div id="mensaje2" style="display:none;z-index:300;color:blue;font-size:17px;">Escriba su apellidos</div>
                                      </div>
                                    </div>
                                    </div>
                                </li>
                                
                                <li class="fields">
                                   <div class="field">
                                    <label for="billing:company">Nombre Empresa</label>
                                    <div class="input-box">
                                     <input id="billing:company" value="" name="billing[company]" title="Company" class="input-text  form-control" type="text">
                                   </div></div>
                                   <div class="field">
                                    <label for="billing:email" class="required"><em>*</em>Correo</label>
                                    <div class="input-box">
                                     <input autocapitalize="off" value="" autocorrect="off" spellcheck="false" name="correo" id="billing:email" title="Email Address" 
                                     class="input-text validate-email required-entry form-control" type="text">
                                     <div id="mensaje3" style="display:none;z-index:300;color:blue;font-size:17px;">Verifique su correo</div>
                                    </div></div>
                                </li>
                              
								<li class="wide">
                                   <label for="billing:street1" class="required"><em>*</em>Direccion de Envio</label>
                                   <div class="input-box">
                                    <input title="Street Address" value="" name="street" id="billing:street1" class="input-text  required-entry form-control" type="text">
                                    <div id="mensaje4" style="display:none;z-index:300;color:blue;font-size:17px;">Verifique su direccion</div>
                                   </div>
                                </li>
                                
                                <li class="fields"><div class="field">	       
								    <label for="billing:region_id" class="required"><em>*</em>Tipo de Documento </label>
                                    <div class="input-box">
                                        <select id="doc" name="billing[region_id]" title="State/Province" class="validate-select required-entry form-control" style="" defaultvalue="">
                                            <option value="" selected="selected">Cedula</option>
                                            <option value="1">Pasaporte</option><option value="2">Nit</option><option value="2">Otro</option>
                                         </select>
                                        <div id="mensaje5" style="display:none;z-index:300;color:blue;font-size:17px;">Seleccione un tipo de documento</div>
                                        <input id="billing:region" name="billing[region]" title="State/Province" class="input-text required-entry form-control" style="display:none;" 
                                        type="text">
                                    </div>
                                    </div>
                                    <div class="field"><label for="billing:city" class="required"><em>*</em>Numero Identificacion</label>
                                        <div class="input-box">
                                            
                                        <input title="City" value="" name="docnum" class="input-text  required-entry form-control" id="billing:city" type="text">
                                        <div id="mensaje6" style="display:none;z-index:300;color:blue;font-size:17px;">Escriba el numero de documento</div>
                                        </div>
                                    </div>
                                </li>	       
									       
								<li class="fields">
                                   <div class="field">
                                    <label for="billing:postcode" class="required"><em>*</em>Municipio</label>
                                    <div class="input-box">
                                    <input title="Municipio" value=""  name="municipio" id="billing:postcode" class="input-text validate-zip-international  required-entry form-control" 
                                    type="text">
                                    <div id="mensaje7" style="display:none;z-index:300;color:blue;font-size:17px;">Escriba el municipio</div>
                                    </div></div><div class="field"><label for="billing:country_id" class="required"><em>*</em>Departamento </label>
                                    <div class="input-box">
                                    <select name="billing[country_id]" id="dep" class="validate-select form-control" title="Country">
                                        <option value="Amazonas">Amazonas</option>
                                        <option value="Antioquia">Antioquia </option>
                                        <option value="Arauca">Arauca</option>
                                        <option value="Atlántico">Atlántico</option>
                                        <option value="Bolívar">Bolívar</option>
                                        <option value="Boyacá">Boyacá</option>
                                        <option value="Caldas">Caldas</option>
                                        <option value="Caquetá">Caquetá</option>
                                        <option value="Casanare">Casanare</option>
                                        <option value="Cauca">Cauca</option>
                                        <option value="Cesar">Cesar</option>
                                        <option value="Chocó">Chocó</option>
                                        <option value="Córdoba">Córdoba</option>
                                        <option value="Cundinamarca">Cundinamarca</option>
                                         <option value="Guainía">Guainía</option>
                                        <option value="Guaviare">Guaviare</option>
                                        <option value="Huila">Huila</option>
                                        <option value="La guajira">La guajira</option>
                                        <option value="Magdalena">Magdalena</option>
                                        <option value="Meta">Meta</option>
                                        <option value="Nariño">Nariño</option>
                                        <option value="Norte de Santander">Norte de Santander</option>
                                        <option value="Putumayo">Putumayo</option>
                                        <option value="Quindío">Quindío</option>
                                        <option value="Risaralda">Risaralda</option>
                                        <option value="San Andrés y Providencia">San Andrés y Providencia</option>
                                        <option value="Santander">Santander</option>
                                        <option value="Sucre">Sucre</option>
                                        <option value="Tolima">Tolima</option>
                                        <option value="AF">Valle del Cauca</option>
                                        <option value="AF">Vaupés</option>
                                        <option value="AF">Vichada</option>
                                    </select>
                                    <div id="mensaje8" style="display:none;z-index:300;color:blue;font-size:17px;">Seleccione el departamento</div>
                                    </div></div>
                                </li>	       
									       
								<li class="fields">
                                   <div class="field">
                                   <label for="billing:telephone" class="required"><em>*</em>Telefono No</label>
                                   <div class="input-box">
                                   <input name="tel" title="Telephone" value="" class="input-text  required-entry form-control" id="billing:telephone" type="text">
                                   <div id="mensaje9" style="display:none;z-index:300;color:blue;font-size:17px;">Escriba su numero de telefono</div>
                                   </div></div><div class="field">
                                   <label for="billing:fax">Celular No</label>
                                   <div class="input-box">
                                        <input name="cel" title="Fax" value="" class="input-text  form-control" id="billing:fax" type="text">
                                        <div id="mensaje10" style="display:none;z-index:300;color:blue;font-size:17px;">Escriba su numero Celular</div>
                                   </div>
                                   </div>
                                </li>
                            
                                    </ul>
                                </div>	
                               </li>
                             </ul>     
							
							<div class="buttons-set" id="billing-buttons-container">
                                <button onclick="validarform()" id="thebutton" type="button" title="Continuar" class="button" >
                                    <span><span>Continuar</span></span>
                                </button>
                            </div>
                        </div>
                    </form>	
                </div>
            </li>	
        </ol>
    </div>
   		
											
	<!--Baner y botones de colores-->	<div class="std"><p></p>
                                                <div class="magestore-bannerslider" ><!--Banner-->
		                                            <div class="magestore-bannerslider-standard">
                                                        <script src="micro/js/jquery_002.js"></script><!-- invocacion script  ***********************+++en el cuerpo del codigo-->
	                                                    <link rel="stylesheet" type="text/css" href="micro/css/flexslider.css" media="all">
	                                                    <script type="text/javascript">   
		                                                    var j7 = jQuery.noConflict();
		                                                    j7(window).load(function() {j7('.flexslider-7-1').flexslider({animation: "fade",slideshowSpeed: 4500}); });           /*minItems: 2,//maxItems: 4 */
	                                                    </script>
	      <!--Imagenes del baner-->                  
                                                    </div>    
                                                 </div><!--Fin del Baner1-->
                                                <p></p>
                                                <div style="line-height: 8px;">&nbsp;</div>
            <!--BotonesColores-->           
                                                <script type="text/javascript">// <![CDATA[
                                                            var google_tag_params = {
        	                                                ecomm_prodid: '',
        	                                                ecomm_pagetype: 'home',
        	                                                ecomm_totalvalue: ''
                                                            };
                                                            jQuery(document).ready(function(e){
        	                                            var $ = jQuery;
                                                    	
                                                    	$('.bannerslider-image-text').each(function(index, element){
                                                            var p = $(this).parent();
                                                    		if( $(p).find('a').length == 1 ){
                                                    			var a = $(p).find('a').first();
                                                    			var link = $(a).attr('href');
                                                    			$(this).css('cursor', 'pointer');
                                                    			$(this).click(function(e) {
                                                    				window.location.href = link;
                                                    			});
                                                    		}
                                                        });
                                                    	
                                                    	$('.bannerslider-image-text *').each(function(index, element){
                                                            $(this).attr('fontsize', $(this).css('font-size'));
                                                        });
                                                    	
                                                    	$('.bannerslider-image-text h1').css({'margin':'0px','padding':'0px'});
                                                    	$('.bannerslider-image-text h3').css({'margin':'0px','padding':'0px'});
                                                    	$('.bannerslider-image-text li').css({'margin':'0px','padding':'0px'});
                                                    	
                                                    	function banner_limit_size(maxSize, minSize){
                                                    		var result = ( ($('.bannerslider-image-text').width()/973) * maxSize < minSize) ? minSize : parseInt(($('.bannerslider-image-text').width()/973) * maxSize);
                                                    		return result;
                                                    	}
                                                    	function banner_text_resize(){
                                                    		var banner_text_mode = ( $('.bannerslider-image-text').width() >= 600 ) ? 'block' : 'none';
                                                    		$('.bannerslider-image-text ul, .bannerslider-image-text li, .bannerslider-image-text p').css('display', banner_text_mode);
                                                    		
                                                    		var scale = $('.bannerslider-image-text').width()/973;
                                                    		$('.bannerslider-image-text *').each(function(index, element){
                                                    			$(this).css('font-size', parseInt($(this).attr('fontsize'))*scale+"px");
                                                    		});
                                                    		
                                                    	}
                                                    	$(window).resize(function(e) {
                                                            banner_text_resize();
                                                        });
                                                    	$(window).load(function(e) {
                                                            banner_text_resize();
                                                        });
                                                    });
                                                    // ]]>
                                                </script>
                                            </div><!--Fin clase std-->
   
                                            <script type="text/javascript">
	                                            var jnew = jQuery.noConflict();
		                                        jnew(window).load(function(){	var width = jnew(window).width();
										        if(width <= 767){itemWidth = null;}else{itemWidth = 290;}
									        	jnew('.product-new-list').flexslider({animation: "slide",animationLoop: true,move:1,itemWidth: itemWidth,});});
                                            </script>

                                           
	                                        <script type="text/javascript">
		                                        var jbest = jQuery.noConflict();
		                                        jbest(window).load(function(){
									        	var width = jnew(window).width();
										        if(width <= 767){itemWidth = null;}else{itemWidth = 290;}
										        jbest('.product-bestseller-list').flexslider({animation: "slide",animationLoop: true,move:1,itemWidth: itemWidth,});});
	                                        </script>									
                                        </div><!--Fin de la Clase padding-s-->
								
								   
  
								</div>

							        <?php //include "micro/motopartes/menuizq.php" ?>
							    
							    </div><!--Fin de clase row-->
	                        </div><!--Fin de clase main-->
	                    </div><!--Fin de clase col-xs-12-->
	                    </div><!--Fin de clase row-->
                    </div><!--Fin de clase container-->
                </div><!--main-container   El mas denso-->
		
		
			 <?php include "micro/motopartes/foter.php" ?>
		</div><!--Fin del Page-->
	</div>
    <?php include "micro/motopartes/ventas.php" ?>
    
    <form class="infoPago2" action="pagos.php" method="post">
            <input class="total" type="hidden" name="total" value="<?php echo($_SESSION['subtotal']); ?>">
            <input class="descripcion" type="hidden" name="descripcion" value="<?php echo(	$_SESSION['descripcion']); ?>">
            <input class="comprador" type="hidden" name="comprador" value="">
            <input class="apellido" type="hidden" name="apellido" value="">
            <input class="correo" type="hidden" name="correo" value="">
            <input class="direccion" type="hidden" name="direccion" value="">
            <input class="ciudad" type="hidden" name="ciudad" value="">
            <input class="telefono" type="hidden" name="telefono" value="">
            <input class="cedul" type="hidden" name="cedula" value="">
           
            </form>
            

	
	<script type="text/javascript" src="micro/frameworkjquery/jquery.js"></script>
	<script type="text/javascript" src="autenticos/uno.js"></script>
</body>

</html>







<?php 
}//Fin del if interno, las cadenas no coinciden ingreso incorrecto
else{  header('Location:index.php'); }
}//Fin del if general, no se envio la  llave desde la pagina compras 
else{  header('Location: index.php'); }
?>