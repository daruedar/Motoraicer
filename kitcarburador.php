<?php
session_start();
//include("micro/MisClases/DriverBD.php");//include temporal mientras agrego produ a la BD
//Subiente
include("micro/MisClases/Visitantes.php");
$ip=$_SERVER['REMOTE_ADDR'];
date_default_timezone_set('America/Bogota');
$fecha=date("Y-m-d");
$pagina='Kit Carburador';
$navegador=$_SERVER['HTTP_USER_AGENT'];;
$hora=date('H:i:s');
$prueba = new Visitantes($ip,$fecha,$pagina,$navegador,$hora);

$t=session_id();
$titulo='KIT PARA MANTENIMIENTO DE CARBURADOR';
$label1='REF:';
$label2='Precio Regular:';
$label3='Precio Especial';
$label4='Comprar';//boton comprar
$destinoform='micro/compras.php';//Cuando se da click en un boton comprar 
//$imagenes[] contiene la ruta dode se almacena cada imagen
$imagenes[0]='micro/imagenes/repuestosparamoto/kitcarburador/kit2601.png';
$imagenes[1]='micro/imagenes/repuestosparamoto/kitcarburador/kit2602.png';
$imagenes[2]='micro/imagenes/repuestosparamoto/kitcarburador/kit2603.png';

$imagenes[3]='micro/imagenes/repuestosparamoto/kitcarburador/kit2604.png';
$imagenes[4]='micro/imagenes/repuestosparamoto/kitcarburador/kit2605.png';
$imagenes[5]='micro/imagenes/repuestosparamoto/kitcarburador/kit2606.png';

$imagenes[6]='micro/imagenes/repuestosparamoto/kitcarburador/kit2607.png';
$imagenes[7]='micro/imagenes/repuestosparamoto/kitcarburador/kit2608.png';
$imagenes[8]='micro/imagenes/repuestosparamoto/kitcarburador/kit2609.png';
//*********************************************************************
$nombres[0]='Kit carburador para: AKT 125';
$nombres[1]='Kit carburador para: AX 100';
$nombres[2]='Kit carburador para: TS 125';

$nombres[3]='Kit carburador para: DT 125';
$nombres[4]='Kit carburador para: AKT 110';
$nombres[5]='Kit carburador para: BOXER CT';

$nombres[6]='Kit carburador para: GN 125';
$nombres[7]='Kit carburador PULSAR 180 UG';
$nombres[8]='Kit carburador PULSAR 180';
//********************************************************************
$referencias[0]='AKT 125';
$referencias[1]='Suzuki AX 100';
$referencias[2]='Suzuki TS 125';

$referencias[3]='Yamaha DT 125';
$referencias[4]='AKT 110';
$referencias[5]='BOXER CT 100';

$referencias[6]='Suzuki GN 125 ';
$referencias[7]='Pulsar 180 UG';
$referencias[8]='Pulsar 180 Black';
//*****************************************************
//ojo los precios  no admiten puntos decimales en la BD
$precios[0]='15.000';
$precios[1]='15.000';
$precios[2]='15.000';

$precios[3]='15.000';
$precios[4]='15.000';
$precios[5]='15.000';

$precios[6]='15.000';
$precios[7]='15.000';
$precios[8]='15.000';
//*****************************************************
$preciosb[0]='25.000';
$preciosb[1]='25.000';
$preciosb[2]='25.000';

$preciosb[3]='25.000';
$preciosb[4]='25.000';
$preciosb[5]='25.000';

$preciosb[6]='25.000';
$preciosb[7]='25.000';
$preciosb[8]='25.000';
//*****************************************************
$idproductos[0]='325';
$idproductos[1]='326';
$idproductos[2]='327';

$idproductos[3]='328';
$idproductos[4]='329';
$idproductos[5]='330';

$idproductos[6]='331';
$idproductos[7]='332';
$idproductos[8]='333';
//*****************************************************
$nombresaux[0]='Kit de carburador AKT 125';
$nombresaux[1]='Kit de Carburador AX 100';
$nombresaux[2]='Kit de Carburador TS-125';

$nombresaux[3]='Kit de carburador DT 125';
$nombresaux[4]='Kit de carburador AKT 110';
$nombresaux[5]='Kit de carburador BOXER CT 100';

$nombresaux[6]='Kit de carburador GN 125';
$nombresaux[7]='Kit de Carburador PULSAR 180 UG';
$nombresaux[8]='Kit de Carburador PULSAR 180 BLACK';

$enlaces[0]='';
$enlaces[1]='';
$enlaces[2]='';

$enlaces[3]='';
$enlaces[4]='';
$enlaces[5]='';

$enlaces[6]='';
$enlaces[7]='';
$enlaces[8]='';

//*****************************************************
/*Solo para inserciones
$temporal= new DriverBD();
$enlace=mysqli_connect($temporal->gserv(),$temporal->guser(), $temporal->gpass(),$temporal->gnbd());
if(!$enlace){echo mysqli_connect_error();echo("error en shikamaru.addvisi");}
for($i=0;$i<6;$i++){
    $cadena1="INSERT INTO productos (nombre,imagen,precio) VALUES ('";
    $cadena2=$nombres[$i]."','".$imagenes[$i]."',".$precios[$i].")";
    $consulta=$cadena1.$cadena2;
    $resultado= mysqli_query($enlace,$consulta);
  }
  mysqli_close($enlace);
*/
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" style="height: 100%;" lang="en">
<head> <?php require ('micro/motopartes/head.php'); ?></head>
<body class="ps-static  cms-index-index cms-home" style="position: relative; min-height: 100%; top: 0px;">   
 <div class="wrapper ps-static en-lang-class">
   <noscript>
    <div class="global-site-notice noscript">
        <div class="notice-inner">
         <p><strong>JavaScript seems to be disabled in your browser.</strong><br />
            You must have JavaScript enabled in your browser to utilize the functionality of this website. </p>
        </div>
    </div>
   </noscript>
   <div class="page">
	<div class="shadow"></div>
	<div class="swipe-left"></div>
	<?php include "micro/motopartes/menusuperiormovil.php" ?>
	<div class="header-container">
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
	 <div class="main-container col2-left-layout">
	  <div class="container">
	   <div class="row">
		<div class="col-xs-12">
		 <div class="main">
		  <div class="row">
		   <div class="col-main col-xs-12 col-sm-9">
			<div class="padding-s">
			 <div class="page-title category-title"><h1><?php echo($titulo); ?></h1></div>
			  <div class="category-products">
               <ul class="products-grid row first odd">
	            <li class="item first col-xs-12 col-sm-4">
	             <div class="wrapper-hover">
		          <a href="<?php echo($enlaces[0]); ?>" title="<?php echo($nombreaux[0]); ?>" class="product-image">
			       <img src="<?php echo($imagenes[0]); ?>" alt="<?php echo($nombreaux[0]); ?>">
				  </a>
		          <div class="product-shop">
			       <h2 class="product-name"><a href="<?php echo($enlaces[0]); ?>" title="<?php echo($nombreaux[0]); ?>">
					<?php echo($nombres[0]); ?></a></h2>									    
				   <h3 class="product-sku"><?php echo($label1);?> <span><?php echo($referencias[0]); ?></span></h3>
				   <div class="price-box">
					<p class="old-price">
					 <span class="price-label"><?php echo($label2);?></span>
	                 <span class="price" id="old-price-1802">$
				      <?php echo($preciosb[0]); ?></span>
					</p>
			        <p class="special-price">
					 <span class="price-label"><?php echo($label3);?></span>
				     <span class="price" id="product-price-1802">$<?php echo($precios[0]); ?></span>
					</p>
				   </div>				
			       <div class="actions">                  
				    <form class="form7" method="post" action="<?php echo($destinoform); ?>">
		             <input class="total" type="hidden" name="motorepuesto" value="<?php echo($idproductos[0]); ?>">
					 <input class="total" type="hidden" name="repuestodemoto" value="<?php echo($t); ?>">
					 <button type="submit" title="Agregar al carro" class="button btn-cart">
					 <span><span><?php echo($label4); ?></span></span></button>
					 <button type="button" title="Details" class="button btn-details" onclick="setLocation('')"><span><span>Details</span></span></button>
			        </form>
				   </div>
				  </div>
				  <div class="label-product"> </div><div class="clear"></div>												
		         </div>
				</li>
	            <li class="item first col-xs-12 col-sm-4">
				 <div class="wrapper-hover">
			      <a href="<?php echo($enlaces[1]); ?>" title="<?php echo($nombreaux[1]);?>" class="product-image">
			       <img src="<?php echo($imagenes[1]); ?>" alt="<?php echo($nombreaux[1]);?>">
				  </a>
				  <div class="product-shop">
				   <h2 class="product-name"><a href="<?php echo($enlaces[1]); ?>" title="<?php echo($nombreaux[1]);?>">
			       <?php echo($nombres[1]); ?></a></h2>
					<h3 class="product-sku"><?php echo($label1);?> <span><?php echo($referencias[1]); ?></span></h3>
					<div class="price-box">
					 <p class="old-price"><span class="price-label"><?php echo($label2);?> </span>
					  <span class="price" id="old-price-1802">$
					  <?php echo($preciosb[1]); ?></span>
				     </p>
                     <p class="special-price">
					  <span class="price-label"><?php echo($label3);?> </span>
					  <span class="price" id="product-price-1802">$<?php echo($precios[1]); ?></span>
			         </p>
			        </div>				
					<div class="actions">
					 <form class="form7" method="post" action="<?php echo($destinoform); ?>">
					  <input class="total" type="hidden" name="motorepuesto" value="<?php echo($idproductos[1]); ?>">
				      <input class="total" type="hidden" name="repuestodemoto" value="<?php echo($t); ?>">
				      <button type="submit" title="Agregar al carro" class="button btn-cart">
					   <span><span><?php echo($label4);?></span></span></button>
					  <button type="button" title="Details" class="button btn-details" onclick="setLocation('')"><span><span>Details</span></span></button>
				     </form>
					</div>
				  </div>
				  <div class="label-product"> </div><div class="clear"></div>												
				 </div>
				</li>
	            <li class="item last col-xs-12 col-sm-4">
                 <div class="wrapper-hover">
                  <a href="<?php echo($enlaces[2]); ?>" title="<?php echo($nombreaux[2]);?>" class="product-image">
                   <img src="<?php echo($imagenes[2]); ?>" alt="<?php echo($nombreaux[2]);?>"></a>
                  <div class="product-shop">
                   <h2 class="product-name"><a href="<?php echo($enlaces[2]); ?>" title="<?php echo($nombreaux[2]);?>">
                    <?php echo($nombres[2]); ?></a></h2>
                   <h3 class="product-sku"><?php echo($label1);?><span><?php echo($referencias[2]); ?></span></h3>
                   <div class="price-box">
                    <p class="old-price"><span class="price-label"><?php echo($label2);?></span><span class="price" id="old-price-3030">$
                    <?php echo($preciosb[2]); ?></span></p>
                    <p class="special-price"><span class="price-label"><?php echo($label3);?></span>
                    <span class="price" id="product-price-3030">$<?php echo($precios[2]); ?></span></p>
                   </div>
                   <div class="actions">
                    <form class="form7" method="post" action="<?php echo($destinoform); ?>">
				     <input class="total" type="hidden" name="motorepuesto" value="<?php echo($idproductos[2]); ?>">
					 <input class="total" type="hidden" name="repuestodemoto" value="<?php echo($t); ?>">
				     <button type="submit" title="Agregar al carro" class="button btn-cart">
                     <span><span><?php echo($label4);?></span></span></button>
                     <button type="button" title="Details" class="button btn-details" onclick="setLocation('')"><span><span>Details</span></span></button>
                    </form>
                   </div>
                  </div>
                  <div class="label-product"></div>
                  <div class="clear"></div>
                 </div>
			    </li>
			   </ul>
			   <ul class="products-grid row even">
			    <li class="item first col-xs-12 col-sm-4">
				 <div class="wrapper-hover">
				  <a href="<?php echo($enlaces[3]); ?>" title="<?php echo($nombreaux[3]);?>" class="product-image">
					<img src="<?php echo($imagenes[3]); ?>" alt="<?php echo($nombreaux[3]);?>"></a>
				  <div class="product-shop">
				   <h2 class="product-name"><a href="<?php echo($enlaces[2]); ?>" title="<?php echo($nombreaux[3]);?>">
					<?php echo($nombres[3]); ?></a></h2>
				   <h3 class="product-sku"><?php echo($label1); ?> <span><?php echo($referencias[3]); ?></span></h3>
				   <div class="price-box">
                    <p class="old-price"><span class="price-label"><?php echo($label2); ?></span>
                     <span class="price" id="old-price-3030">$
                     <?php echo($preciosb[3]); ?></span></p>
                     <p class="special-price"><span class="price-label"><?php echo($label3); ?></span>
                     <span class="price" id="product-price-3030">$
                     <?php echo($precios[3]); ?></span></p>
                   </div>
                   <div class="actions">
                    <form class="form7" method="post" action="<?php echo($destinoform); ?>">
					 <input class="total" type="hidden" name="motorepuesto" value="<?php echo($idproductos[3]); ?>">
					 <input class="total" type="hidden" name="repuestodemoto" value="<?php echo($t); ?>">
					 <button type="submit" title="Agregar al carro" class="button btn-cart">                      
                      <span><span><?php echo($label4);?></span></span></button>
                     <button type="button" title="Details" class="button btn-details" onclick="setLocation('')"><span><span>Details</span></span></button>
                    </form>
                   </div>
				  </div>
			      <div class="label-product"></div>
			      <div class="clear"></div>
				 </div>
			    </li>
				<li class="item col-xs-12 col-sm-4">
				 <div class="wrapper-hover">
			      <a href="<?php echo($enlaces[4]); ?>" title="<?php echo($nombreaux[4]);?>" class="product-image">
				  <img src="<?php echo($imagenes[4]); ?>" alt="<?php echo($nombreaux[4]);?>"></a>
    			  <div class="product-shop">
    			  <h2 class="product-name"><a href="<?php echo($enlaces[3]); ?>" title="<?php echo($nombreaux[4]);?>">
    		       <?php echo($nombres[4]); ?></a></h2>
    			  <h3 class="product-sku"><?php echo($label1); ?><span><?php echo($referencias[4]); ?></span></h3>
    	          <div class="price-box">
                   <p class="old-price"><span class="price-label"><?php echo($label2); ?></span>
                    <span class="price" id="old-price-3030">$
                    <?php echo($preciosb[4]); ?></span></p>
                   <p class="special-price"><span class="price-label"><?php echo($label3); ?></span>
                    <span class="price" id="product-price-3030">$
                    <?php echo($precios[4]); ?></span></p>
                  </div>
                  <div class="actions">                          	
                   <form class="form7" method="post" action="<?php echo($destinoform); ?>">
					<input class="total" type="hidden" name="motorepuesto" value="<?php echo($idproductos[4]); ?>">
					<input class="total" type="hidden" name="repuestodemoto" value="<?php echo($t); ?>">
					<button type="submit" title="Agregar al carro" class="button btn-cart">
                     <span><span><?php echo($label4); ?></span></span></button>
                    <button type="button" title="Details" class="button btn-details" onclick="setLocation('')"><span><span>Details</span></span></button>
                   </form>
                  </div>
    			  </div>
    			  <div class="label-product"></div>             
    			  <div class="clear"></div>
			     </div>
				</li>
			    <li class="item last col-xs-12 col-sm-4">
				 <div class="wrapper-hover">
				  <a href="<?php echo($enlaces[5]); ?>" title="<?php echo($nombreaux[5]);?>" class="product-image">
				   <img src="<?php echo($imagenes[5]); ?>" alt="<?php echo($nombreaux[5]);?>"></a>
				  <div class="product-shop">
				   <h2 class="product-name"><a href="<?php echo($enlaces[5]); ?>" title="<?php echo($nombreaux[5]);?>">
				   <?php echo($nombres[5]); ?></a></h2>
		           <h3 class="product-sku"><?php echo($label1); ?> <span><?php echo($referencias[5]); ?></span></h3>
				   <div class="price-box">
                    <p class="old-price"><span class="price-label"><?php echo($label2); ?></span>
                     <span class="price" id="old-price-3030">$
                     <?php echo($preciosb[5]); ?> </span></p>
                    <p class="special-price"><span class="price-label"><?php echo($label3); ?></span>
                     <span class="price" id="product-price-3030">$
                     <?php echo($precios[5]); ?></span></p>
                   </div>
                   <div class="actions">
                    <form class="form7" method="post" action="<?php echo($destinoform); ?>">
				     <input class="total" type="hidden" name="motorepuesto" value="<?php echo($idproductos[5]); ?>">
				     <input class="total" type="hidden" name="repuestodemoto" value="<?php echo($t); ?>">
					 <button type="submit" title="Agregar al carro" class="button btn-cart">         
                      <span><span><?php echo($label4);?></span></span></button>
                     <button type="button" title="Details" class="button btn-details" onclick="setLocation('')"><span><span>Details</span></span></button>
                    </form>
                   </div>
				  </div>
			      <div class="label-product"></div>            
				  <div class="clear"></div>
				 </div>
			    </li>
			   </ul>
			   <ul class="products-grid row odd">
				<li class="item first col-xs-12 col-sm-4">
			     <div class="wrapper-hover">
				  <a href="<?php echo($enlaces[6]); ?>" title="<?php echo($nombreaux[6]);?>" class="product-image">
					<img src="<?php echo($imagenes[6]); ?>" alt="<?php echo($nombreaux[6]);?>"></a>
				  <div class="product-shop">
				   <h2 class="product-name"><a href="<?php echo($enlaces[6]); ?>" title="<?php echo($nombreaux[6]);?>">
		            <?php echo($nombres[6]); ?></a></h2>
				   <h3 class="product-sku"><?php echo($label1);?><span><?php echo($referencias[6]); ?></span></h3>
				   <div class="price-box">
                    <p class="old-price"><span class="price-label"><?php echo($label2);?></span>
                     <span class="price" id="old-price-3030">$
                     <?php echo($preciosb[6]); ?> </span></p>
                    <p class="special-price"><span class="price-label"><?php echo($label3);?></span>
                     <span class="price" id="product-price-3030">$
                     <?php echo($precios[6]); ?></span></p>
                   </div>
                   <div class="actions">                                          								
                    <form class="form7" method="post" action="<?php echo($destinoform);?>">
					 <input class="total" type="hidden" name="motorepuesto" value="<?php echo($idproductos[6]); ?>">
		             <input class="total" type="hidden" name="repuestodemoto" value="<?php echo($t); ?>">
			         <button type="submit" title="Agregar al carro" class="button btn-cart">
                      <span><span><?php echo($label4); ?></span></span></button>
                     <button type="button" title="Details" class="button btn-details" onclick="setLocation('')"><span><span>Details</span></span></button>
                    </form>
                   </div>
		          </div>
				  <div class="label-product"> </div><div class="clear"></div>
				 </div>
			    </li>
				<li class="item col-xs-12 col-sm-4">
				 <div class="wrapper-hover">
				  <a href="<?php echo($enlaces[7]); ?>" title="<?php echo($nombreaux[7]);?>" class="product-image">
			       <img src="<?php echo($imagenes[7]); ?>" alt="<?php echo($nombreaux[7]);?>"></a>
    			  <div class="product-shop">
    	           <h2 class="product-name"><a href="" title="<?php echo($nombreaux[7]);?>">
    			    <?php echo($nombres[7]); ?></a></h2>
    			   <h3 class="product-sku"><?php echo($label1); ?> <span><?php echo($referencias[7]); ?></span></h3>
					<div class="price-box">
                     <p class="old-price"><span class="price-label"><?php echo($label2); ?></span>
                      <span class="price" id="old-price-3030">$
                      <?php echo($preciosb[7]); ?> </span></p>
                     <p class="special-price"><span class="price-label"><?php echo($label3); ?></span>
                      <span class="price" id="product-price-3030">$
                      <?php echo($precios[7]); ?></span></p>
                    </div>
                    <div class="actions">
                     <form class="form7" method="post" action="<?php echo($destinoform);?>">
					  <input class="total" type="hidden" name="motorepuesto" value="7">
					  <input class="total" type="hidden" name="repuestodemoto" value="<?php echo($t); ?>">
					  <button type="submit" title="Agregar al carro" class="button btn-cart">                               					
                      <span><span><?php echo($label4);?></span></span></button>
                      <button type="button" title="Details" class="button btn-details" onclick="setLocation('')"><span><span>Details</span></span></button>
                     </form>
                    </div>
    			  </div>
    			  <div class="label-product"></div><div class="clear"></div>
				 </div>
			    </li>
	            <li class="item last col-xs-12 col-sm-4">
			     <div class="wrapper-hover">
				  <a href="<?php echo($enlaces[8]); ?>" title="<?php echo($nombreaux[8]);?>" class="product-image">
				   <img src="<?php  echo($imagenes[8]); ?>" alt="<?php echo($nombreaux[8]);?>"></a>
				  <div class="product-shop">
			       <h2 class="product-name"><a href="" title="<?php echo($nombreaux[8]);?>">
					<?php echo($nombres[8]); ?></a></h2>
				   <h3 class="product-sku"><?php echo($label1); ?><span><?php echo($referencias[8]); ?></span></h3>
				   <div class="price-box">
                    <p class="old-price"><span class="price-label"><?php echo($label2); ?></span>
                     <span class="price" id="old-price-3030">$
                     <?php echo($preciosb[8]); ?> </span></p>
                    <p class="special-price"><span class="price-label"><?php echo($label3); ?></span>
                     <span class="price" id="product-price-3030">$
                     <?php echo($precios[8]); ?></span></p>
                   </div>
                   <div class="actions">                          							
                    <form class="form7" method="post" action="<?php echo($destinoform);?>">
					 <input class="total" type="hidden" name="motorepuesto" value="<?php echo($idproductos[8]); ?>">
					 <input class="total" type="hidden" name="repuestodemoto" value="<?php echo($t); ?>">
					 <button type="submit" title="Agregar al carro" class="button btn-cart">
                     <span><span><?php echo($label4);?></span></span></button>
                     <button type="button" title="Details" class="button btn-details" onclick="setLocation('')"><span><span>Details</span></span></button>
                    </form>
                   </div>
                  </div>
				  <div class="label-product"> 	</div>            
				  <div class="clear"></div>
			     </div>
			    </li>		                                    
			   </ul>			   
			   <script type="text/javascript">decorateGeneric($$('ul.products-grid'), ['odd','even','first','last'])</script>			                        
			  </div>											
		      <div class="std"><p></p>
               <div class="magestore-bannerslider">
		        <div class="magestore-bannerslider-standard">
                 <script src="micro/js/jquery_002.js"></script>
	             <link rel="stylesheet" type="text/css" href="micro/css/flexslider.css" media="all">
	             <script type="text/javascript">   
		            var j7 = jQuery.noConflict();
		            j7(window).load(function() {j7('.flexslider-7-1').flexslider({animation: "fade",slideshowSpeed: 4500}); });           
	             </script>         
                </div>    
               </div><p></p>
               <div style="line-height: 8px;">&nbsp;</div>          
                <script type="text/javascript">
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
               </div>
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
		   <?php include "micro/motopartes/menuizq2.php" ?>
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
</body>
</html>