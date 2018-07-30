<?php
include("micro/MisClases/Visitantes.php");
$ip=$_SERVER['REMOTE_ADDR'];
date_default_timezone_set('America/Bogota');
$fecha=date("Y-m-d");
$pagina='Index';
$navegador=$_SERVER['HTTP_USER_AGENT'];;
$hora=date('H:i:s');
$prueba = new Visitantes($ip,$fecha,$pagina,$navegador,$hora);
$prueba->reportar();


$titulo1='Productos Nuevos';
$titulo2='Los m&aacute;s Buscados';
$label1='Precio Regular';
$label2='Precio Especial';

//$baner1[0]='micro/imagenes/baner1/amortiguadorybr125.png';
$baner1[0]='micro/imagenes/baner1/kitcarburador.png';//promo fin de semana
$baner1[1]='micro/imagenes/baner1/img22.png';
$baner1[2]='micro/imagenes/baner1/img33.png';
$baner1[3]='micro/imagenes/baner1/img44.png';
$baner1[4]='micro/imagenes/baner1/img55.png';
$baner1[5]='micro/imagenes/baner1/velocimetros.jpg';
$baner1desc[0]='Amortiguadores para motos en  Colombia';
$baner1desc[1]='Kit de arrastre para motos';
$baner1desc[2]='Baterias  para motos en Colombia';
$baner1desc[3]='Kit de biela para motos';
$baner1desc[4]='Tienda Repuestos electricos para moto';
$baner1desc[5]='Velocimetros y Tacometros para moto';
$enlaces1[0]='repuestos-de-motos/kitcarburador/';
//$enlaces1[0]='repuestos-de-motos/amortiguadores';
$enlaces1[1]='kitdearrastre.php';
$enlaces1[2]='cilindros.php ';
$enlaces1[3]='kitdebiela.php';
$enlaces1[4]='kitdebiela.php';
$enlaces1[5]='velocimetros.php';




$prodnuevos[0]='imagenes/home/newprod/arboldelevasyamahafz16.png';
$prodnuevos[1]='imagenes/home/newprod/amortiguadorYBR125.png';
$prodnuevos[2]='imagenes/home/newprod/tacometrolibero125.jpg';
$prodnuevos[3]='micro/imagenes/newprod/baterias.jpg';
$prodnuevos[4]='micro/imagenes/newprod/bujiasparamoto.png';
$prodnuevos[5]='micro/imagenes/newprod/kitdearrastredemoto.png';
$prodnuevos[6]='micro/imagenes/newprod/kitdebielaparamoto.png';
$prodnuevos[7]='micro/imagenes/newprod/bobinasparamoto.png';
//*******************************************************************
$prodnuevosdesc[0]='Arbol de levas para Yamaha FZ 16';
$prodnuevosdesc[1]='Amortiguadores para YBR 125';
$prodnuevosdesc[2]='velocimetro universal ';
$prodnuevosdesc[3]='Venta de baterias para motos';
$prodnuevosdesc[4]='Tienda on-line con bujias de repuestos para moto';
$prodnuevosdesc[5]='Kit de arrastre motos Yamaha  Akt Honda';
$prodnuevosdesc[6]='Almacen de kits de biela de repuestos para moto';
$prodnuevosdesc[7]='Venta de repuestos electricos para moto';
//*******************************************************************
$nombrea1[0]='Arbol de levas para Yamaha FZ 16';
$nombrea1[1]='Amortiguador para YBR 125';
$nombrea1[2]='Velocimetro universal';
$nombrea1[3]='Baterias de 12 voltios en gel o secas marca Dynavolt';
$nombrea1[4]='Bujias de 10mm 12mm y 14mm  para todos los modelos';
$nombrea1[5]='Kit de arrastre  cadenas y discos todas las referencias';
$nombrea1[6]='Kit de biela  para moto desde $30.000';
$nombrea1[7]='Bobinas, bombillos y  repuestos electricos';
//******************************************************************
$enlaces2[0]='arboldelevas.php';
$enlaces2[1]='repuestos-de-motos/amortiguadores/';
$enlaces2[2]='velocimetros.php';
$enlaces2[3]='baterias.php';
$enlaces2[4]='bujias.php';
$enlaces2[5]='kitdearrastre.php';
$enlaces2[6]='kitdebiela.php';
$enlaces2[7]='bobinas.php';
//*******************************************************************
$referenciasa[0]='YAMAHA  FZ 16';
$referenciasa[1]='YAMAHA YBR 125';
$referenciasa[2]='UNIVERSAL';
$referenciasa[3]='UIR 231';
$referenciasa[4]='RIO 143';
$referenciasa[5]='YRT 124';
$referenciasa[6]='UIO 321';
$referenciasa[7]='TRM 907';
//*******************************************************************
$precioaRegular[0]='$70.000';
$precioaRegular[1]='$70.000';
$precioaRegular[2]='$50.000';
$precioaRegular[3]='$90.000';
$precioaRegular[4]='$20.000';
$precioaRegular[5]='$80.000';
$precioaRegular[6]='$50.000';
$precioaRegular[7]='$30.000';
//*******************************************************************
$precioaEspecial[0]='$50.000';
$precioaEspecial[1]='$40.000';
$precioaEspecial[2]='$20.000';
$precioaEspecial[3]='$50.000';
$precioaEspecial[4]='$14.000';
$precioaEspecial[5]='$60.000';
$precioaEspecial[6]='$30.000';
$precioaEspecial[7]='$20.000';
//******************************************************************


$masbuscados[0]='micro/imagenes/bestseller/stopmoto.png';
$masbuscados[1]='micro/imagenes/bestseller/vidriofarolasparamoto.png';
$masbuscados[2]='micro/imagenes/bestseller/tornilloparamoto.png';
$masbuscados[3]='micro/imagenes/bestseller/tapavalvulasparamoto.png';
$masbuscados[4]='micro/imagenes/bestseller/taponesdedireccion.png';
$masbuscados[5]='micro/imagenes/bestseller/switchencendido.png';
$masbuscados[6]='micro/imagenes/bestseller/tapatanquedecombustible.png';
$masbuscados[7]='micro/imagenes/bestseller/varillafrenosparamoto.png';
$masbuscadosdesc[0]='Stops para Moto';
$masbuscadosdesc[1]='Vidrios de Farolas para moto';
$masbuscadosdesc[2]='Tornillos de lujo para placa';
$masbuscadosdesc[3]='Tornillos de lujo para placa';
$masbuscadosdesc[4]='Tornillos de lujo para placa';
$masbuscadosdesc[5]='Switch de encendido';
$masbuscadosdesc[6]='Tapa para tanques de Combustible';
$masbuscadosdesc[7]='Varillas pastillas y bandas para freno de moto';
$nombreb1[0]='Stops para Moto';
$nombreb1[1]='Vidrios de Farola para moto';
$nombreb1[2]='Tornillos de lujo para placa';
$nombreb1[3]='Tornillos de lujo';
$nombreb1[4]='Tornillos de lujo';
$nombreb1[5]='Switch de encendido';
$nombreb1[6]='Tapa para tanques de Combustible';
$nombreb1[7]='Varilla de Freno';
$enlaces3[0]='stopsparamoto.php';
$enlaces3[1]='farolas.php';
$enlaces3[2]='taponesdedireccion.php';
$enlaces3[3]='taponesdedireccion.php';
$enlaces3[4]='taponesdedireccion.php';
$enlaces3[5]='taponesdedireccion.php';
$enlaces3[6]='taponesdedireccion.php';
$enlaces3[7]='taponesdedireccion.php';
$referenciasb[0]='EFG 893';
$referenciasb[1]='PTR 458';
$referenciasb[2]='BNF 245';
$referenciasb[3]='AQP 213';
$referenciasb[4]='WUY 985';
$referenciasb[5]='WQY 985';
$referenciasb[6]='BIG 234';
$referenciasb[7]='WTM 224';
$preciobRegular[0]='$40.000';
$preciobRegular[1]='$20.000';
$preciobRegular[2]='$7.000';
$preciobRegular[3]='$15.000';
$preciobRegular[4]='$18.000';
$preciobRegular[5]='$25.000';
$preciobRegular[6]='$25.000';
$preciobRegular[7]='$10.000';
$preciobEspecial[0]='$10.000';
$preciobEspecial[1]='$14.000';
$preciobEspecial[2]='$4.000';
$preciobEspecial[3]='$8.000';
$preciobEspecial[4]='$12.000';
$preciobEspecial[5]='$15.000';
$preciobEspecial[6]='$18.000';
$preciobEspecial[7]='$8.000';


?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" style="height: 100%;" lang="en">
<head> <?php require ('micro/motopartes/head.php'); ?></head>

<body class="ps-static  cms-index-index cms-home" style="position: relative; min-height: 100%; top: 0px;">   
	<div class="wrapper ps-static en-lang-class">
        <noscript><div class="global-site-notice noscript"><div class="notice-inner"><p><strong>JavaScript seems to be disabled in your browser.</strong><br />You must have JavaScript enabled in your browser to utilize the functionality of this website. </p></div></div></noscript>
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
	<!--Baner y botones de colores-->	<div class="std"><p></p>
                                                <div class="magestore-bannerslider" ><!--Banner-->
		                                            <div class="magestore-bannerslider-standard">
                                                        <script src="micro/js/jquery_002.js"></script><!-- invocacion script  ***********************+++en el cuerpo del codigo-->
	                                                    <link rel="stylesheet" type="text/css" href="micro/css/flexslider.css" media="all">
	                                                    <script type="text/javascript">   
		                                                    var j7 = jQuery.noConflict();
		                                                    j7(window).load(function() {j7('.flexslider-7-1').flexslider({animation: "fade",slideshowSpeed: 4500}); });           /*minItems: 2,//maxItems: 4 */
	                                                    </script>
	                          <div class="flexslider flexslider-7-1" >
		                                                     <ul class="slides"> 
                      <li style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 1; display: block; z-index: 2;" class="flex-active-slide">
                       <a href="<?php echo($enlaces1[0]); ?>" target="_self" onclick="bannerClicks('29','1')" style="display:block">
	                    <img alt="<?php echo($baner1desc[0]); ?>" src="<?php echo($baner1[0]); ?>" draggable="false"></a>
			          </li>
                      <li style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;" class="">
				        <a href=" <?php echo($enlaces1[1]);?>" target="_self" onclick="bannerClicks('26','1')" style="display:block">
		                <img alt="<?php echo($baner1desc[1]); ?>" src="<?php echo($baner1[1]); ?>" draggable="false"></a>
			          </li>
                      <li style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;" class="">
                        <a href="<?php echo($enlaces1[2]);?>" target="_self" onclick="bannerClicks('27','1')" style="display:block">
	                     <img alt="<?php echo($baner1desc[2]); ?>" src="<?php echo($baner1[2]); ?>"  draggable="false"></a>
			          </li>
                      <li style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;" class="">
                       <div class="bannerslider-image-text" style="cursor: pointer;">
                        <div style="color: rgb(255, 255, 255); margin: 6% 0px 0px 2%; text-align: center; position: absolute; left: 0px; max-width: 50%; font-size: 10.631px;" fontsize="12px">
                         <h3 style="font-size: 17.7184px; margin: 0px; padding: 0px; font-weight: 600;" fontsize="20px"></h3>
                         <h2 style="text-transform: uppercase; font-size: 26.5776px; margin: 0.2em 0em; padding: 0px;" fontsize="30px"><b fontsize="30px" style="font-size: 26.5776px;"></b></h2>
                         <h3 style="font-size: 17.7184px; margin: 0px; padding: 0px; font-weight: 600;" fontsize="20px"></h3>
                        </div>
	                   </div>
                       <a href="<?php echo($enlaces1[3]);?>" target="_self" onclick="bannerClicks('9','1')" style="display:block">
	                    <img alt="<?php echo($baner1desc[3]); ?>" src="<?php echo($baner1[3]); ?>"   draggable="false">
				       </a>
			          </li>
                      <li style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;" class="">
                       <div class="bannerslider-image-text" style="cursor: pointer;">
                        <div style="color: rgb(255, 255, 255); margin: 6% 0px 0px 6%; font-family: Arial,Helvetica,sans-serif; font-size: 10.631px;" fontsize="12px">
                         <h2 style="text-transform: uppercase; font-size: 44.296px; margin: 0px; padding: 0px;" fontsize="50px"><b fontsize="50px" style="font-size: 44.296px;"><!--Industrial--></b></h2>
                         <h2 style="text-transform: uppercase; font-size: 44.296px; margin: 0px; padding: 0px;" fontsize="50px"><b fontsize="50px" style="font-size: 44.296px;"><!--Inspection--></b></h2>
                         <h3 style="font-size: 44.296px; margin: 0px; padding: 0px; font-weight: 600;" fontsize="50px"><!--Microscopes--></h3>
                        </div>
                       </div>
                       <a href="<?php echo($enlaces1[4]);?>" target="_self" onclick="bannerClicks('10','1')" style="display:block">
		                 <img alt="<?php echo($baner1desc[4]); ?>" src="<?php echo($baner1[4]); ?>"  draggable="false"></a>
			          </li>
                      <li style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;" class="">
                       <div class="bannerslider-image-text" style="cursor: pointer;">
                        <div style="width: 500px; margin-right: auto; margin-left: auto; padding-top: 100px; font-size: 10.631px;" fontsize="12px">
                         <h2 style="text-align: center; color: rgb(255, 255, 255); font-weight: bold; font-size: 35.4368px; line-height: 35px;" fontsize="40px">
                          <br fontsize="40px" style="font-size: 35.4368px;">
                         </h2>
                        </div>
                       </div>
                       <a href="<?php echo($enlaces1[5]);?>" target="_self" onclick="bannerClicks('11','1')" style="display:block">
	                    <img alt="<?php echo($baner1desc[5]); ?>" src="<?php echo($baner1[5]); ?>"   draggable="false"></a>
			          </li>
				                                            <!-- items mirrored twice, total of 12 -->
		             </ul>
        
                                                    	<!--	<ol class="flex-control-nav flex-control-paging">
                                                    		    <li><a class="flex-active">1</a></li>
                                                    		    <li><a class="">2</a></li>
                                                    		    <li><a class="">3</a></li>
                                                    		    <li><a class="">4</a></li>
                                                    		    <li><a class="">5</a></li>
                                                    		    <li><a class="">6</a></li>
                                                    		</ol>-->
		                                                    <ul class="flex-direction-nav">
		                                                        <li class="flex-nav-prev"><a class="flex-prev" href="">Previous</a></li>
		                                                        <li class="flex-nav-next"><a class="flex-next" href="">Next</a></li>
		                                                    </ul>
	                                                    </div>
                                                    </div>    
                                                 </div>
                                                <p></p>
                                                <div style="line-height: 8px;">&nbsp;</div>
                                                <ul class="banner-block" >
                                                    <li>
                                                        <div class="banner-block-content" style="background: #008a44;"><a style="color: white; font-family: 'Raleway' sans-serif; font-weight: 600;" href="stopsparamoto.php"><span>STOPS</span></a></div>
                                                    </li>
                                                    <li>
                                                        <div class="banner-block-content" style="background: #d68f0d;"><a style="color: white; font-family: 'Raleway', sans-serif; font-weight: 600;" href="llantasparamoto.php"><span>LLANTAS</span></a></div>
                                                    </li>
                                                    <li>
                                                        <div class="banner-block-content" style="background: #b70b34;"><a style="color: white; font-family: 'Raleway', sans-serif; font-weight: 600;" href="filtrosdeaceite.php"><span>FILTROS DE ACEITE</span></a></div>
                                                    </li>
            <!--Fin BotonesColores-->           </ul>
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
    <!-- Productos nuevos-->            <div class="page-title category-title"><h2>Productos Nuevos</h2></div>
  <!--Productos  nuevos total 9-->          <div class="flexslider product-new-list"><!--NuevosProductos-->
                                                <div class="flex-viewport" style="overflow: hidden; position: relative;">
                             <ul class="slides products-grid row" style="width: 1800%; transition-duration: 0.6s; transform: translate3d(-580px, 0px, 0px);">
                    <li class="item col-xs-4" style="width: 290px; float: left; display: block;"><!--Inicia producto nuevoNo1-->
					 <div class="wrapper-hover">
                      <a href="<?php echo($enlaces2[0]);?>" title="<?php echo($prodnuevosdesc[0]); ?>" class="product-image">  
                        <img src="<?php echo($prodnuevos[0]); ?>" alt="<?php echo($prodnuevosdesc[0]); ?>" draggable="false">
                      </a>
                      <div class="product-shop">
                        <h3 class="product-name">
                         <a href="<?php echo($enlaces2[0]);?>" title="<?php echo($prodnuevosdesc[0]);?>">
                            <?php echo($nombrea1[0]);?></a>
                        </h3>
                        <h3 class="product-sku"><?php echo($referenciasa[0]);?></h3>
                        <div class="price-box">
                         <p class="old-price"><span class="price-label">
                          <?php echo($label1); ?></span><span class="price" id="old-price-4897">
						   <?php echo($precioaRegular[0]);?></span>
						 </p>
                         <p class="special-price"><span class="price-label"><?php echo($label2); ?></span>
                         <span class="price" id="product-price-4897"><?php echo($precioaEspecial[0]);?> </span></p>
                        </div>
                        <div class="actions">
						 <button type="button" title="Ver lista de arboles de levas" class="button btn-cart" onclick="setLocation('<?php echo($enlaces2[0]);?>')"><span><span>Ver todos</span></span></button>
						 <button type="button" title="Details" class="button btn-details" onclick="setLocation('')"><span><span>Ver mas</span></span></button>
                        </div>
                      </div>
                      <div class="label-product"> </div><div class="clear"></div>
                     </div>
                    </li><!--Fin producto nuevoNo1-->
					
                    <li class="item col-xs-4" style="width: 290px; float: left; display: block;"><!--Inicia producto nuevoNo1-->
                     <div class="wrapper-hover">
                      <a href="<?php echo($enlaces2[1]);?>" title="<?php echo($prodnuevosdesc[1]);?>" class="product-image">
						<img src="<?php echo($prodnuevos[1]); ?>" alt="<?php echo($prodnuevosdesc[1]); ?>" draggable="false">
                      </a>
                      <div class="product-shop">
                        <h3 class="product-name">
					     <a href="<?php echo($enlaces2[1]);?>" title="<?php echo($prodnuevosdesc[1]); ?>">
                          <?php echo($nombrea1[1]);?></a>
                        </h3>
						<h3 class="product-sku"><?php echo($referenciasa[1]);?></h3>
                        <div class="price-box">
					     <p class="old-price"><span class="price-label">
                           <?php echo($label1); ?></span><span class="price" id="old-price-4897">
						   <?php echo($precioaRegular[1]);?> </span>
						 </p>
						 <p class="special-price"><span class="price-label">
							<?php echo($label2); ?></span><span class="price" id="product-price-4897">
							<?php echo($precioaEspecial[1]);?> </span>
						 </p>
                        </div>
                       <div class="actions">
						<button type="button" title="Ver los amortiguadores" class="button btn-cart" onclick="setLocation('<?php echo($enlaces2[1]);?>')"><span><span>Ver todos</span></span></button>
						<button type="button" title="Details" class="button btn-details" onclick="setLocation('')"><span><span>Ver mas</span></span></button>
                       </div>
                      </div>
                      <div class="label-product"> </div><div class="clear"></div>
                     </div>
                    </li><!--Fin producto nuevoNo1-->                                                 
                                 
					<li class="item col-xs-4" style="width: 290px; float: left; display: block;"><!--Inicia producto nuevoNo1-->
                     <div class="wrapper-hover">
                      <a href="<?php echo($enlaces2[2]);?>" title="<?php echo($prodnuevosdesc[2]);?>" class="product-image">
						<img src="<?php echo($prodnuevos[2]); ?>" alt="<?php echo($prodnuevosdesc[2]); ?>" draggable="false">
                      </a>
                      <div class="product-shop">
                       <h3 class="product-name">
                        <a href="<?php echo($enlaces2[2]);?>" title="<?php echo($prodnuevosdesc[2]);?>">
                        <?php echo($nombrea1[2]);?></a>
                       </h3>
					   <h3 class="product-sku"><?php echo($referenciasa[2]);?></h3>
                       <div class="price-box">
                        <p class="old-price"><span class="price-label">                                             
						  <?php echo($label1); ?></span><span class="price" id="old-price-4897">
						 <?php echo($precioaRegular[2]);?></span></p>
						<p class="special-price"><span class="price-label">
							<?php echo($label2); ?></span>
							<span class="price" id="product-price-4897"><?php echo($precioaEspecial[2]);?></span>
						</p>
                       </div>
                       <div class="actions">
						<button type="button" title="Ver velocimetros" class="button btn-cart" onclick="setLocation('<?php echo($enlaces2[2]);?>')"><span><span>Ver todos</span></span></button>
						<button type="button" title="Details" class="button btn-details" onclick="setLocation('')"><span><span>Ver mas</span></span></button>
                       </div>
                      </div>
                      <div class="label-product"> </div><div class="clear"></div>
                     </div>
                    </li><!--Fin producto nuevoNo3-->
                    <li class="item col-xs-4" style="width: 290px; float: left; display: block;"><!--Inicia producto nuevoNo1-->
                     <div class="wrapper-hover">
                      <a href="<?php echo($enlaces2[3]);?>" title="<?php echo($prodnuevosdesc[3]);?>" class="product-image">
					   <img src="<?php echo($prodnuevos[3]); ?>" alt="<?php echo($prodnuevosdesc[3]); ?>" draggable="false">
                      </a>
                      <div class="product-shop">
                       <h3 class="product-name">
						<a href="<?php echo($enlaces2[3]);?>" title="<?php echo($prodnuevosdesc[3]);?>">
						<?php echo($nombrea1[3]);?></a>
                       </h3>
                       <h3 class="product-sku"><?php echo($referenciasa[3]);?></h3>
                       <div class="price-box">
                        <p class="old-price"><span class="price-label">                                                       
                         <?php echo($label1); ?></span><span class="price" id="old-price-4897">
		                 <?php echo($precioaRegular[3]);?></span></p>
                         <p class="special-price"><span class="price-label">
					      <?php echo($label2); ?></span>
                          <span class="price" id="product-price-4897"><?php echo($precioaEspecial[3]);?> </span></p>
                       </div>
                       <div class="actions">
						<button type="button" title="Ver baterias" class="button btn-cart" onclick="setLocation('<?php echo($enlaces2[3]);?>')"><span><span>Ver todos</span></span></button>
						<button type="button" title="Details" class="button btn-details" onclick="setLocation('')"><span><span>Ver mas</span></span></button>
                       </div>
                      </div>
                      <div class="label-product"> </div><div class="clear"></div>
                     </div>
                    </li><!--Fin producto nuevoNo1-->                                                 
                    <li class="item col-xs-4" style="width: 290px; float: left; display: block;"><!--Inicia producto nuevoNo1-->
                     <div class="wrapper-hover">
                      <a href="<?php echo($enlaces2[4]);?>" title="<?php echo($prodnuevosdesc[4]);?>" class="product-image">
                       <img src="<?php echo($prodnuevos[4]); ?>" alt="<?php echo($prodnuevosdesc[4]); ?>" draggable="false">
                      </a>
                     <div class="product-shop">
                      <h3 class="product-name">
						<a href="<?php echo($enlaces2[4]);?>" title="<?php echo($prodnuevosdesc[4]);?>">
						 <?php echo($nombrea1[4]);?></a>
                      </h3>
					  <h3 class="product-sku"><?php echo($referenciasa[4]);?></h3>
                      <div class="price-box">
                       <p class="old-price"><span class="price-label">                                                      
                         <?php echo($label1); ?></span><span class="price" id="old-price-4897">
						  <?php echo($precioaRegular[4]);?></span></p>
                       <p class="special-price"><span class="price-label"><?php echo($label2); ?></span>
                        <span class="price" id="product-price-4897"><?php echo($precioaEspecial[4]);?> </span></p>
                      </div>
                      <div class="actions">
                       <button type="button" title="Ver bujias para moto" class="button btn-cart" onclick="setLocation('<?php echo($enlaces2[4]);?>')"><span><span>Ver todas</span></span></button>
                       <button type="button" title="Details" class="button btn-details" onclick="setLocation('')"><span><span>Ver mas</span></span></button>
                      </div>
                     </div>
                     <div class="label-product"> </div><div class="clear"></div>
                     </div>
                    </li><!--Fin producto nuevoNo1-->
                    <li class="item col-xs-4" style="width: 290px; float: left; display: block;"><!--Inicia producto nuevoNo1-->
                     <div class="wrapper-hover">
                      <a href="<?php echo($enlaces2[5]);?>" title="<?php echo($prodnuevosdesc[5]);?>" class="product-image">
                       <img src="<?php echo($prodnuevos[5]); ?>" alt="<?php echo($prodnuevosdesc[5]); ?>" draggable="false">
                      </a>
                      <div class="product-shop">
                       <h3 class="product-name">
						 <a href="<?php echo($enlaces2[5]);?>" title="<?php echo($prodnuevosdesc[5]);?>">
						 <?php echo($nombrea1[5]);?></a>
                       </h3>
					   <h3 class="product-sku"><?php echo($referenciasa[5]);?></h3>
                       <div class="price-box">
                        <p class="old-price"><span class="price-label">                                             
						 <?php echo($label1); ?>:</span><span class="price" id="old-price-4897">
						  <?php echo($precioaRegular[5]);?></span></p>
					    <p class="special-price"><span class="price-label">
		                 <?php echo($label2); ?></span>
                         <span class="price" id="product-price-4897"><?php echo($precioaEspecial[5]);?></span>
					    </p>
                       </div>
                       <div class="actions">
						<button type="button" title="<?php echo($prodnuevosdesc[5]);?>" class="button btn-cart" onclick="setLocation('<?php echo($enlaces2[5]);?>')"><span><span>Ver todos</span></span></button>
						<button type="button" title="Details" class="button btn-details" onclick="setLocation('')"><span><span>Ver mas</span></span></button>
                       </div>
                      </div>
                      <div class="label-product"> </div><div class="clear"></div>
                     </div>
                    </li><!--Fin producto nuevoNo1-->                                                 
                    <li class="item col-xs-4" style="width: 290px; float: left; display: block;"><!--Inicia producto nuevoNo1-->
                     <div class="wrapper-hover">
                      <a href="<?php echo($enlaces2[6]);?>" title="<?php echo($prodnuevosdesc[6]);?>" class="product-image">
					   <img src="<?php echo($prodnuevos[6]); ?>" alt="<?php echo($prodnuevosdesc[6]); ?>" draggable="false">
                      </a>
                     <div class="product-shop">
                      <h3 class="product-name">
						<a href="<?php echo($enlaces2[6]);?>" title="<?php echo($prodnuevosdesc[6]);?>">
						<?php echo($nombrea1[6]);?></a>
                      </h3>
					  <h3 class="product-sku"><?php echo($referenciasa[6]);?></h3>
                      <div class="price-box">
                        <p class="old-price"><span class="price-label">                                            
							<?php echo($label1); ?></span><span class="price" id="old-price-4897">
							 <?php echo($precioaRegular[6]);?></span></p>
						<p class="special-price"><span class="price-label"><?php echo($label2); ?></span>
							<span class="price" id="product-price-4897">
							<?php echo($precioaEspecial[6]);?> </span></p>
                      </div>
                      <div class="actions">
						<button type="button" title="Ver kits de bielas" class="button btn-cart" onclick="setLocation('<?php echo($enlaces2[6]);?>')"><span><span>Ver todos</span></span></button>
						<button type="button" title="Details" class="button btn-details" onclick="setLocation('')"><span><span>Ver mas</span></span></button>
                      </div>
                      </div>
                      <div class="label-product"> </div><div class="clear"></div>
                     </div>
                    </li>
                    <li class="item col-xs-4" style="width: 290px; float: left; display: block;"><!--Inicia producto nuevoNo1-->
                     <div class="wrapper-hover">
                      <a href="<?php echo($enlaces2[7]);?>" title="<?php echo($prodnuevosdesc[7]);?>" class="product-image">
                       <img src="<?php echo($prodnuevos[7]); ?>" alt="<?php echo($prodnuevosdesc[7]); ?>" draggable="false">
                      </a>
                      <div class="product-shop">
                       <h3 class="product-name">
						<a href="<?php echo($enlaces2[7]);?>" title="<?php echo($prodnuevosdesc[7]);?>">
						<?php echo($nombrea1[7]);?></a>
                       </h3>
					   <h3 class="product-sku"><?php echo($referenciasa[7]);?></h3>
                       <div class="price-box">
                        <p class="old-price"><span class="price-label">                                          
							<?php echo($label1); ?></span><span class="price" id="old-price-4897">
							 <?php echo($precioaRegular[7]);?></span></p>
						<p class="special-price"><span class="price-label"><?php echo($label2); ?></span>
						 <span class="price" id="product-price-4897"><?php echo($precioaEspecial[7]);?> </span></p>
                       </div>
                       <div class="actions">
						<button type="button" title="Ver bobinas" class="button btn-cart" onclick="setLocation('<?php echo($enlaces2[7]);?>')"><span><span>Ver todo</span></span></button>
						<button type="button" title="Details" class="button btn-details" onclick="setLocation('')"><span><span>Ver mas</span></span></button>
                       </div>
                      </div>
                      <div class="label-product"> </div><div class="clear"></div>
                     </div>
                    </li><!--Fin producto nuevoNo1-->                                                 
                                                    
                   </ul>
        	      
        	    
	   
                                                 </div>
                                            	<ol class="flex-control-nav flex-control-paging">
                                            		<li><a class="">1</a></li>
                                            		<li><a class="">2</a></li>
                                            		<li><a class="flex-active">3</a></li>
                                            		<li><a class="">4</a></li>
                                            		<li><a class="">5</a></li>
                                            		<li><a class="">6</a></li>
                                            		<li><a class="">9</a></li>
                                            	</ol><div style="background-color:red;z-index:190;">
                                            	<ul class="flex-direction-nav">
                                            		<li class="flex-nav-prev"><a class="flex-prev" href="#">Previous</a></li>
                                            		<li class="flex-nav-next"><a class="flex-next" href="#">Next</a></li>
                                            	</ul></div>
                                            </div>
                                            <script type="text/javascript">
	                                            var jnew = jQuery.noConflict();
		                                        jnew(window).load(function(){	var width = jnew(window).width();
										        if(width <= 767){itemWidth = null;}else{itemWidth = 290;}
									        	jnew('.product-new-list').flexslider({animation: "slide",animationLoop: true,move:1,itemWidth: itemWidth,});});
                                            </script>
                                            
                                            
                                            
                                            
<!--Inicia  los Best Seller 31 productos--> <div class="page-title category-title"><h2>Los m&aacute;s Buscados</h2></div>
                                            <div class="flexslider product-bestseller-list"><!--Best Seller-->
                                                <div class="flex-viewport" style="overflow: hidden; position: relative;">
		               
	                                             <ul class="slides products-grid row" style="width: 6400%; transition-duration: 0.6s; transform: translate3d(-7540px, 0px, 0px);">
		             <li class="item col-xs-4" style="width: 290px; float: left; display: block;">
				      <div class="wrapper-hover">
						<a href="<?php echo($enlaces3[0]);?>" title="<?php echo($masbuscadosdesc[0]); ?>" class="product-image">
							<img src="<?php echo($masbuscados[0]); ?>" alt="<?php echo($masbuscadosdesc[0]);?>" draggable="false">
					    </a>
					    <div class="product-shop">
						 <h3 class="product-name"><a href="<?php echo($enlaces3[0]);?>" title="<?php echo($masbuscadosdesc[0]);?>"><?php echo($nombreb1[0]);?></a></h3>
						 <h3 class="product-sku"><?php echo($referenciasb[0]); ?></h3>
						 <div class="price-box">
                          <p class="old-price"><span class="price-label"><?php echo($label1); ?>
						   </span><span class="price" id="old-price-128">
						   <?php echo($preciobRegular[0]); ?></span></p>
					      <p class="special-price"><span class="price-label"><?php echo($label2); ?></span><span class="price" id="product-price-128"> <?php echo($preciobEspecial[0]); ?></span></p>
						 </div>
						 <div class="actions">
                            <button type="button" title="Ver stop para moto" class="button btn-cart" onclick="setLocation('<?php echo($enlaces3[0]);?>')"><span><span>Ver todos</span></span></button>
                            <button type="button" title="Details" class="button btn-details" onclick="setLocation('')"><span><span>Detalles</span></span></button>
						 </div>
					    </div>
				      </div>
			         </li>
     
                     <li class="item col-xs-4" style="width: 290px; float: left; display: block;">
				      <div class="wrapper-hover">
					    <a href="<?php echo($enlaces3[1]);?>" title="<?php echo($masbuscadosdesc[1]);?>" class="product-image">
					        <img src="<?php echo($masbuscados[1]); ?>" alt="<?php echo($masbuscadosdesc[1]); ?>" draggable="false">
					    </a>
					    <div class="product-shop">
						 <h3 class="product-name"><a href="<?php echo($enlaces3[0]);?>" title="<?php echo($masbuscadosdesc[1]);?>"><?php echo($nombreb1[1]);?></a></h3>
						 <h3 class="product-sku"><?php echo($referenciasb[1]); ?></h3>
						 <div class="price-box">
                            <p class="old-price"><span class="price-label"><?php echo($label1); ?></span><span class="price" id="old-price-128"><?php echo($preciobRegular[1]); ?></span></p>
							<p class="special-price"><span class="price-label"><?php echo($label2); ?></span><span class="price" id="product-price-128"><?php echo($preciobEspecial[1]); ?></span></p>
						 </div>
						 <div class="actions">
                            <button type="button" title="Ver farolas para moto" class="button btn-cart" onclick="setLocation('<?php echo($enlaces3[1]);?>')"><span><span>Ver todas</span></span></button>
                            <button type="button" title="Details" class="button btn-details" onclick="setLocation('')"><span><span>Detalles</span></span></button>
						 </div>
					    </div>
				      </div>
			         </li>
                                 
                     <li class="item col-xs-4" style="width: 290px; float: left; display: block;">
				       <div class="wrapper-hover">
					    <a href="<?php echo($enlaces3[2]);?>" title="<?php echo($masbuscadosdesc[2]);?>" class="product-image">
							<img  src="<?php echo($masbuscados[2]); ?>" alt="<?php echo($masbuscadosdesc[2]); ?>" draggable="false">
					    </a>
					    <div class="product-shop">
						 <h3 class="product-name"><a href="<?php echo($enlaces3[2]);?>" title="<?php echo($masbuscadosdesc[2]);?>"> <?php echo($nombreb1[2]);?></a></h3>
						 <h3 class="product-sku"><?php echo($referenciasb[2]); ?></h3>
						 <div class="price-box">
                          <p class="old-price"><span class="price-label">
						   <?php echo($label1); ?></span><span class="price" id="old-price-128">
						   <?php echo($preciobRegular[2]); ?></span></p>
					      <p class="special-price"><span class="price-label">
						   <?php echo($label2); ?></span><span class="price" id="product-price-128">
						   <?php echo($preciobEspecial[2]); ?></span></p>
						 </div>
						 <div class="actions">
                          <button type="button" title="Ver tapones de direccion" class="button btn-cart" onclick="setLocation('<?php echo($enlaces3[2]);?>')"><span><span>Ver todos</span></span></button>
                          <button type="button" title="Details" class="button btn-details" onclick="setLocation('')"><span><span>Detalles</span></span></button>
						 </div>
					    </div>
				       </div>
			         </li>
			                                            
                     <li class="item col-xs-4" style="width: 290px; float: left; display: block;">
				      <div class="wrapper-hover">
					    <a href="<?php echo($enlaces3[3]);?>" title="<?php echo($masbuscadosdesc[3]);?>" class="product-image">
					     <img src="<?php echo($masbuscados[3]); ?>" alt="<?php echo($masbuscadosdesc[3]);?>" draggable="false">
					    </a>
					    <div class="product-shop">
						 <h3 class="product-name"><a href="<?php echo($enlaces3[3]);?>" title="<?php echo($masbuscadosdesc[3]);?>"><?php echo($nombreb1[3]);?></a></h3>
						 <h3 class="product-sku"><?php echo($referenciasb[3]); ?></h3>
						 <div class="price-box">
                          <p class="old-price"><span class="price-label"><?php echo($label1); ?></span><span class="price" id="old-price-128"><?php echo($preciobRegular[3]); ?></span></p>
						  <p class="special-price"><span class="price-label"><?php echo($label2); ?></span><span class="price" id="product-price-128"><?php echo($preciobEspecial[3]); ?></span></p>
						 </div>
						 <div class="actions">
                          <button type="button" title="Add to Cart" class="button btn-cart" onclick="setLocation('<?php echo($enlaces3[3]);?>')"><span><span>Ver todos</span></span></button>
                          <button type="button" title="Details" class="button btn-details" onclick="setLocation('')"><span><span>Detalles</span></span></button>
						 </div>
					    </div>
				      </div>
			         </li>
                     <li class="item col-xs-4" style="width: 290px; float: left; display: block;">
				      <div class="wrapper-hover">
					    <a href="<?php echo($enlaces3[4]);?>" title="<?php echo($masbuscadosdesc[4]);?>" class="product-image">
					     <img src="<?php echo($masbuscados[4]); ?>"  alt="<?php echo($masbuscadosdesc[4]);?>" draggable="false">
					    </a>
					    <div class="product-shop">
						 <h3 class="product-name"><a href="<?php echo($enlaces3[4]);?>" title="<?php echo($masbuscadosdesc[4]);?>"><?php echo($nombreb1[4]);?></a></h3>
						 <h3 class="product-sku"><?php echo($referenciasb[4]); ?></h3>
						 <div class="price-box">
                          <p class="old-price"><span class="price-label"><?php echo($label1); ?></span><span class="price" id="old-price-128"><?php echo($preciobRegular[4]); ?></span></p>
					      <p class="special-price"><span class="price-label"><?php echo($label2); ?></span><span class="price" id="product-price-128"><?php echo($preciobEspecial[4]); ?></span></p>
						 </div>
						 <div class="actions">
                          <button type="button" title="Add to Cart" class="button btn-cart" onclick="setLocation('<?php echo($enlaces3[4]);?>')"><span><span>Ver todos</span></span></button>
                          <button type="button" title="Details" class="button btn-details" onclick="setLocation('')"><span><span>Detalles</span></span></button>
						 </div>
					    </div>
				      </div>
			         </li>
			         <li class="item col-xs-4" style="width: 290px; float: left; display: block;">
				      <div class="wrapper-hover">
					   <a href="<?php echo($enlaces3[5]);?>" title="<?php echo($masbuscadosdesc[5]);?>" class="product-image">
					    <img src="<?php echo($masbuscados[5]); ?>" alt="<?php echo($masbuscadosdesc[5]);?>" draggable="false">
					   </a>
					   <div class="product-shop">
						 <h3 class="product-name"><a href="<?php echo($enlaces3[5]);?>" title="<?php echo($masbuscadosdesc[5]);?>"><?php echo($nombreb1[5]);?></a></h3>
						 <h3 class="product-sku"><?php echo($referenciasb[5]); ?></h3>
						 <div class="price-box">
							<p class="old-price"><span class="price-label"><?php echo($label1); ?></span><span class="price" id="old-price-128"><?php echo($preciobRegular[5]); ?></span></p>
							<p class="special-price"><span class="price-label"><?php echo($label2); ?></span><span class="price" id="product-price-128"><?php echo($preciobEspecial[5]); ?></span></p>
					     </div>
						 <div class="actions">
                          <button type="button" title="Add to Cart" class="button btn-cart" onclick="setLocation('<?php echo($enlaces3[5]);?>')"><span><span>Ver todos</span></span></button>
                          <button type="button" title="Details" class="button btn-details" onclick="setLocation('')"><span><span>Detalles</span></span></button>
						 </div>
					   </div>
				      </div>
			         </li>
			         <li class="item col-xs-4" style="width: 290px; float: left; display: block;">
				      <div class="wrapper-hover">
					    <a href="<?php echo($enlaces3[6]);?>" title="Studen-80X " class="product-image">
					     <img src="<?php echo($masbuscados[6]); ?>" alt="<?php echo($masbuscadosdesc[6]);?>" draggable="false">
					    </a>
					    <div class="product-shop">
						 <h3 class="product-name"><a href="<?php echo($enlaces3[6]);?>" title="<?php echo($masbuscadosdesc[6]);?>"><?php echo($nombreb1[6]);?></a></h3>
						 <h3 class="product-sku"><?php echo($referenciasb[6]); ?></h3>
						 <div class="price-box">
                          <p class="old-price"><span class="price-label"><?php echo($label1); ?></span><span class="price" id="old-price-128"><?php echo($preciobRegular[6]); ?></span></p>
						  <p class="special-price"><span class="price-label"><?php echo($label2); ?></span><span class="price" id="product-price-128"><?php echo($preciobEspecial[6]); ?></span></p>
						 </div>
						 <div class="actions">
                          <button type="button" title="Add to Cart" class="button btn-cart" onclick="setLocation('<?php echo($enlaces3[6]);?>')"><span><span>Ver todos</span></span></button>
                          <button type="button" title="Details" class="button btn-details" onclick="setLocation('')"><span><span>Detalles</span></span></button>
						 </div>
					    </div>
				      </div>
			         </li>
			         <li class="item col-xs-4" style="width: 290px; float: left; display: block;">
				      <div class="wrapper-hover">
					    <a href="<?php echo($enlaces3[7]);?>" title="<?php echo($masbuscadosdesc[7]);?>" class="product-image">
					     <img src="<?php echo($masbuscados[7]); ?>" alt="<?php echo($masbuscadosdesc[7]);?>" draggable="false">
					    </a>
					    <div class="product-shop">
						 <h3 class="product-name"><a href="<?php echo($enlaces3[7]);?>" title="<?php echo($masbuscadosdesc[7]);?>"></a><?php echo($nombreb1[7]); ?></h3>
						 <h3 class="product-sku"><?php echo($referenciasb[7]); ?></h3>
						 <div class="price-box">
                          <p class="old-price"><span class="price-label"><?php echo($label1); ?></span><span class="price" id="old-price-128"><?php echo($preciobRegular[7]); ?></span></p>
					      <p class="special-price"><span class="price-label"><?php echo($label2); ?></span><span class="price" id="product-price-128"><?php echo($preciobEspecial[7]); ?></span></p>
						 </div>
						 <div class="actions">
                          <button type="button" title="Add to Cart" class="button btn-cart" onclick="setLocation('<?php echo($enlaces3[7]);?>')"><span><span>Ver todas</span></span></button>
                          <button type="button" title="Details" class="button btn-details" onclick="setLocation('')"><span><span>Detalles</span></span></button>
						 </div>
					    </div>
				      </div>
			         </li>
			        </ul>
	               
	                                            </div>
                                            	<ol class="flex-control-nav flex-control-paging">
                                            	    <li><a class="">1</a></li>
                                            	    <li><a class="">2</a></li>
                                            	    <li><a class="">3</a></li>
                                            	    <li><a class="">4</a></li>
                                            	    <li><a class="">5</a></li>
                                            	    <li><a class="">6</a></li>
                                            	    <li><a class="">7</a></li>
                                            	    <li><a class="">8</a></li>
                                            	</ol>
                                            	<ul class="flex-direction-nav">
                                            	    <li class="flex-nav-prev"><a class="flex-prev" href="#">Previous</a></li>
                                            	    <li class="flex-nav-next"><a class="flex-next" href="#">Next</a></li>
                                            	</ul>
	 <!-- Fin de los best seller -->       </div>
	                                        <script type="text/javascript">
		                                        var jbest = jQuery.noConflict();
		                                        jbest(window).load(function(){
									        	var width = jnew(window).width();
										        if(width <= 767){itemWidth = null;}else{itemWidth = 290;}
										        jbest('.product-bestseller-list').flexslider({animation: "slide",animationLoop: true,move:1,itemWidth: itemWidth,});});
	                                        </script>									
                                        </div><!--Fin de la Clase padding-s-->
								    </div>
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
    <?php //include "micro/motopartes/ventas.php" ?><!--Chat-->
</body>

</html>