<?php
session_start();
//include("micro/MisClases/DriverBD.php");//include temporal mientras agrego produ a la BD
$t=session_id();
$carpeta='kitdearrastre/';
$titulo=' Oferta 11 de Febrero! Kits  De   Arrastre Para Motos Akt';


$imagenes[0]='kit2809.png';
$imagenes[1]='kit2809.png';
$imagenes[2]='kit2809.png';

$imagenes[3]='kit2809.png';
$imagenes[4]='kit2809.png';
$imagenes[5]='kit2809.png';

$imagenes[6]='kit2809.png';
$imagenes[7]='kit2809.png';
$imagenes[8]='kit2809.png';

//*********************************************************************
$nombres[0]='AKT 110';
$nombres[1]='AKT 125 EVO';
$nombres[2]='AKT 125 NE';

$nombres[3]='AKT 125 NKD';
$nombres[4]='AKT 125 SL';
$nombres[5]='AKT 125 SPORT';

$nombres[6]='AKT 125 TT';
$nombres[7]='AKT 180 XM';
$nombres[8]='';
//********************************************************************
$referencias[0]='F-14/R-36 cadena 428H-110';
$referencias[1]='F-14/R-38 cadena 428H-120';
$referencias[2]='F-14/R-42 cadena 428H-120';

$referencias[3]='F-15/R-38 cadena 428H-120';
$referencias[4]='F-15/R-38 cadena 428H-124';
$referencias[5]='F-15/R-38 cadena 428H-120';

$referencias[6]='F-15/R-46 cadena 428H-124';
$referencias[7]='F-13/R-36 cadena 520H-104';
$referencias[8]='F-16/R-44 cadena 520H-104';
//*****************************************************
//ojo los precios  no admiten puntos decimales en la BD
$precios[0]='30.000';
$precios[1]='30.000';
$precios[2]='24.000';

$precios[3]='25.000';
$precios[4]='30.000';
$precios[5]='30.000';

$precios[6]='30.000';
$precios[7]='34.000';
$precios[8]='34.000';
//*****************************************************
$preciosb[0]='70.000';
$preciosb[1]='70.000';
$preciosb[2]='60.000';

$preciosb[3]='70.000';
$preciosb[4]='60.000';
$preciosb[5]='70.000';

$preciosb[6]='70.000';
$preciosb[7]='70.000';
$preciosb[8]='70.000';
//*****************************************************


$idproductos[0]='135';
$idproductos[1]='136';
$idproductos[2]='197';

$idproductos[3]='222';
$idproductos[4]='177';
$idproductos[5]='248';

$idproductos[6]='198';
$idproductos[7]='195';
$idproductos[8]='196';
//*****************************************************
$nombresaux[0]='Kit de Arrastre para  moto Akt, Kit de Transmision para moto Akt, Piñon para moto Akt, Corona para moto Akt, Cadena para moto Akt';
$nombresaux[1]='Kit de Arrastre para  moto Akt, Kit de Transmision para moto Akt, Piñon para moto Akt, Corona para moto Akt, Cadena para moto Akt';
$nombresaux[2]='Kit de Arrastre para  moto Akt, Kit de Transmision para moto Akt, Piñon para moto Akt, Corona para moto Akt, Cadena para moto Akt';

$nombresaux[3]='Kit de Arrastre para  moto Akt, Kit de Transmision para moto Akt, Piñon para moto Akt, Corona para moto Akt, Cadena para moto Akt';
$nombresaux[4]='Kit de Arrastre para  moto Akt, Kit de Transmision para moto Akt, Piñon para moto Akt, Corona para moto Akt, Cadena para moto Akt';
$nombresaux[5]='Kit de Arrastre para  moto Akt, Kit de Transmision para moto Akt, Piñon para moto Akt, Corona para moto Akt, Cadena para moto Akt';

$nombresaux[6]='Kit de Arrastre para  moto Akt, Kit de Transmision para moto Akt, Piñon para moto Akt, Corona para moto Akt, Cadena para moto Akt';
$nombresaux[7]='Kit de Arrastre para  moto Akt, Kit de Transmision para moto Akt, Piñon para moto Akt, Corona para moto Akt, Cadena para moto Akt';
$nombresaux[8]='Kit de Arrastre para  moto Akt, Kit de Transmision para moto Akt, Piñon para moto Akt, Corona para moto Akt, Cadena para moto Akt';
//*****************************************************
/*Solo para inserciones
$temporal= new DriverBD();
$enlace=mysqli_connect($temporal->gserv(),$temporal->guser(), $temporal->gpass(),$temporal->gnbd());
if(!$enlace){echo mysqli_connect_error();echo("error en shikamaru.addvisi");}
for($i=0;$i<9;$i++){
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
	<!-- Baner  new  -->			<div class="col-main col-xs-12 col-sm-9">
									    <div class="padding-s">
											<div class="page-title category-title"><h1><?php echo($titulo); ?></h1></div>
<div class="category-products">
 
	<?php $ini=true;$fn=false;$conta ?>
	<?php for($c=0;$c<17;$c++){if($ini){echo('<ul class="products-grid row first odd">');}?>
	  <li class="item first col-xs-12 col-sm-4">
	 <div class="wrapper-hover">
	  <a href="" title="<?php echo($nombreaux[0]); ?>" class="product-image">
		<img src="http://www.motoraicer.com/micro/imagenes/repuestosparamoto/<?php echo($carpeta); echo($imagenes[0]); ?>" alt="<?php echo($nombreaux[0]); ?>">
	  </a>
	  <div class="product-shop">
	   <h2 class="product-name"><a href="" title="<?php echo($nombreaux[0]); ?>">
		<?php echo($nombres[0]); ?></a></h2>
												    
	   <h3 class="product-sku"><span><?php echo($referencias[0]); ?></span></h3>
	   <div class="price-box">
	    <p class="old-price">
		 <span class="price-label">Precio Regular:</span>
		 <span class="price" id="old-price-1802">$
		  <?php echo($preciosb[0]); ?></span>
		</p>&nbsp;&nbsp;&nbsp;&nbsp;

		<p class="special-price">
		 <span class="price-label">Precio Especial</span>
		 <span class="price" id="product-price-1802">$<?php echo($precios[0]); ?></span>
	    </p>
	   </div>				
	   <div class="actions">
		<form class="form7" method="post" action="micro/compras.php">
		 <input class="total" type="hidden" name="motorepuesto" value="<?php echo($idproductos[0]); ?>">
		 <input class="total" type="hidden" name="repuestodemoto" value="<?php echo($t); ?>">
		 <button type="submit" title="Agregar al carro" class="button btn-cart">
		 <span><span>Comprar</span></span></button>
		 <button type="button" title="Details" class="button btn-details" onclick="setLocation('')"><span><span>Details</span></span></button>
		</form>
	   </div>
	  </div>
	 <div class="label-product"> </div>            
    <div class="clear"></div>												
	</div>
	</li>
	<?php $ini=false;if((($conta+1)%3)==0){echo('</ul>');$ini=true;}$conta++;}?>
	
							                            <script type="text/javascript">decorateGeneric($$('ul.products-grid'), ['odd','even','first','last'])</script>
				                                        <div class="toolbar-bottom">
					                                        <div class="toolbar">
					                                            <div class="pager">
					                                                <p class="amount"><strong>9 Item(s)</strong></p>
					                                            </div>
	                                                            <div class="sorter">
							                                        <p class="view-mode"></p>
					                                            </div>
					                                        </div>
				                                        </div>
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

							        <?php //include "micro/motopartes/fabricantes.php" ?>
							        <?php include "micro/motopartes/menuizq.php" ?>
							    
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