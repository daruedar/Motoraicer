<?php
session_start();
$t=session_id();
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
									        <div class="breadcrumbs">
    													<ul>
    														<li class="home"><a href="http://motoraicer.com" title="Ir al inicio">Inicio</a><span>&gt;</span></li>
    														<li class="category54"><a href="" title="">Discos de Freno</a><span>&gt;</span></li>
    														<!--<li class="category69"><strong>USB Microscopes</strong></li>-->
    													</ul>
												    </div>
											<div class="page-title category-title"><h1>DISCOS DE FRENO</h1></div>
												    <div class="category-products">
							                            <ul class="products-grid row first odd">
								                            <li class="item first col-xs-12 col-sm-4">
									                            <div class="wrapper-hover">
										                            <a href="" title="Disco de freno para moto modelo:AKT-110 y ACTIV-110" class="product-image">
											                            <img src="http://www.motoraicer.com/micro/imagenes/repuestosparamoto/discosdefreno/dif2501.png" alt="Disco de freno para moto modelo:AKT-110 y ACTIV-110">
										                            </a>
										                            <div class="product-shop">
											                            <h2 class="product-name"><a href="" title="Disco de freno para moto modelo:AKT-110 y ACTIV-110">
												                            Disco de freno para moto modelo:AKT-110 y ACTIV-110</a></h2>
												    
											                            <h3 class="product-sku">REF: <span>DR-18K 45</span></h3>
											                            <div class="price-box">
												                            <p class="old-price">
													                            <span class="price-label">Precio Regular:</span>
													                            <span class="price" id="old-price-1802">$60.000</span>
												                            </p>

												                            <p class="special-price">
													                            <span class="price-label">Precio Especial</span>
													                            <span class="price" id="product-price-1802">40.000</span>
												                            </p>
											                            </div>				
											                            <div class="actions">
												                            <form class="form7" method="post" action="micro/compras.php">
											                                    <input class="total" type="hidden" name="motorepuesto" value="379">
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
								                            <li class="item first col-xs-12 col-sm-4">
									                            <div class="wrapper-hover">
										                            <a href="" title="Disco de freno para moto modelo:AKT-125 SL" class="product-image">
											                             <img src="http://www.motoraicer.com/micro/imagenes/repuestosparamoto/discosdefreno/dif2502.png" alt="Disco de freno para moto modelo:AKT-125 SL">
										                            </a>
										                            <div class="product-shop">
											                            <h2 class="product-name"><a href="" title="Disco de freno para moto modelo:AKT-125 SL">
												                             Disco de freno para moto modelo:AKT-125 SL</a></h2>
											                            <h3 class="product-sku">REF: <span>DR-18K 46</span></h3>
											                            <div class="price-box">
												                            <p class="old-price">
													                            <span class="price-label">Precio Regular:</span>
													                            <span class="price" id="old-price-1802">$60.000</span>
												                            </p>

												                            <p class="special-price">
													                            <span class="price-label">Precio Especial</span>
													                            <span class="price" id="product-price-1802">$40.000</span>
												                            </p>
											                            </div>				
											                            <div class="actions">
											                                
												                            
												                            <form class="form7" method="post" action="micro/compras.php">
											                                    <input class="total" type="hidden" name="motorepuesto" value="380">
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
												            <li class="item last col-xs-12 col-sm-4">
                                    							<div class="wrapper-hover">
                                    								<a href="" title="Disco de freno para moto modelo:AKT-150 EVO" class="product-image">
                                    								    <img src="http://www.motoraicer.com/micro/imagenes/repuestosparamoto/discosdefreno/dif2503.png" alt="Disco de freno para moto modelo:AKT-150 EVO"></a>
                                    								<div class="product-shop">
                                    									<h2 class="product-name"><a href="" title="Disco de freno para moto modelo:AKT-150 EVO">Disco de freno para moto modelo:AKT-150 EVO</a></h2>
                                    									<h3 class="product-sku">REF: <span>DR-18K 47</span></h3>
                                    				                    <div class="price-box">
                                    								        <p class="old-price"><span class="price-label">Precio Regular:</span><span class="price" id="old-price-3030">$60.000 </span></p>
                                                                            <p class="special-price"><span class="price-label">Precio Especial:</span><span class="price" id="product-price-3030">$40.000</span></p>
                                    					                </div>
                                            							<div class="actions">
                                            							    <form class="form7" method="post" action="micro/compras.php">
											                                    <input class="total" type="hidden" name="motorepuesto" value="381">
											                                    <input class="total" type="hidden" name="repuestodemoto" value="<?php echo($t); ?>">
												                                <button type="submit" title="Agregar al carro" class="button btn-cart">
												                                    
                                            								    <span><span>Comprar</span></span></button>
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
								                                    <a href="" title="Disco de freno para moto modelo:BEST 125" class="product-image">
								                                    <img src="http://www.motoraicer.com/micro/imagenes/repuestosparamoto/discosdefreno/dif2504.png" alt="Disco de freno para moto modelo:BEST 125"></a>
								                                    <div class="product-shop">
									                                    <h2 class="product-name"><a href="" title="Disco de freno para moto modelo:BEST 125">Disco de freno para moto modelo:BEST 125</a></h2>
									                                    <h3 class="product-sku">REF: <span>DR-18K 48</span></h3>
									                                     <div class="price-box">
                                    								        <p class="old-price"><span class="price-label">Precio Regular:</span><span class="price" id="old-price-3030">$60.000 </span></p>
                                                                            <p class="special-price"><span class="price-label">Precio Especial:</span><span class="price" id="product-price-3030">$40.000</span></p>
                                    					                </div>
                                            							<div class="actions">
                                            							    <form class="form7" method="post" action="micro/compras.php">
											                                    <input class="total" type="hidden" name="motorepuesto" value="382">
											                                    <input class="total" type="hidden" name="repuestodemoto" value="<?php echo($t); ?>">
												                                <button type="submit" title="Agregar al carro" class="button btn-cart">
												                                    
                                            								<span><span>Comprar</span></span></button>
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
								                                    <a href="" title="Disco de freno para moto modelo:GN 125" class="product-image">
								                                         <img src="http://www.motoraicer.com/micro/imagenes/repuestosparamoto/discosdefreno/dif2505.png" alt="Disco de freno para moto modelo:GN 125"></a>
    								                                <div class="product-shop">
    									                                <h2 class="product-name"><a href="" title="Disco de freno para moto modelo:GN 125">Disco de freno para moto modelo:GN 125</a></h2>
    									                                <h3 class="product-sku">REF: <span>DR-18K 49</span></h3>
    									                                <div class="price-box">
                                        								    <p class="old-price"><span class="price-label">Precio Regular:</span><span class="price" id="old-price-3030">$60.000 </span></p>
                                                                            <p class="special-price"><span class="price-label">Precio Especial:</span><span class="price" id="product-price-3030">$40.000</span></p>
                                        					           </div>
                                                						<div class="actions">
                                                						    <form class="form7" method="post" action="micro/compras.php">
											                                    <input class="total" type="hidden" name="motorepuesto" value="383">
											                                    <input class="total" type="hidden" name="repuestodemoto" value="<?php echo($t); ?>">
												                                <button type="submit" title="Agregar al carro" class="button btn-cart">
												                                    
                                                							
                                                							<span><span>Comprar</span></span></button>
                                                							<button type="button" title="Details" class="button btn-details" onclick="setLocation('')">
                                                							    <span><span>Details</span></span></button>
                                                						 </form>
                                                						</div>
    								                                </div>
    													            <div class="label-product"></div>             
    								                                <div class="clear"></div>
						    	                                </div>
						                                    </li>
												            <li class="item last col-xs-12 col-sm-4">
							                                    <div class="wrapper-hover">
								                                    <a href="" title="Disco de freno para moto modelo:GS 125" class="product-image">
								                                        <img src="http://www.motoraicer.com/micro/imagenes/repuestosparamoto/discosdefreno/dif2506.png" alt="Disco de freno para moto modelo:GN 125"></a>
								                                    <div class="product-shop">
									                                   <h2 class="product-name"><a href="" title="Disco de freno para moto modelo:GN 125">Disco de freno para moto modelo:GN 125</a></h2>
									                                    <h3 class="product-sku">REF: <span>DR-18K 50</span></h3>
									                                    <div class="price-box">
                                        								    <p class="old-price"><span class="price-label">Precio Regular:</span><span class="price" id="old-price-3030">$60.000 </span></p>
                                                                            <p class="special-price"><span class="price-label">Precio Especial:</span><span class="price" id="product-price-3030">$40.000</span></p>
                                        					           </div>
                                                						<div class="actions">
                                                							
                                                							<form class="form7" method="post" action="micro/compras.php">
											                                    <input class="total" type="hidden" name="motorepuesto" value="384">
											                                    <input class="total" type="hidden" name="repuestodemoto" value="<?php echo($t); ?>">
												                                <button type="submit" title="Agregar al carro" class="button btn-cart">
												                                    
                                                							<span><span>Comprar</span></span></button>
                                                							<button type="button" title="Details" class="button btn-details" onclick="setLocation('')"><span><span>Details</span></span></button>
                                                						    </form>
                                                						</div>

								                                    </div>
													                <div class="label-product"> 	</div>            
																	<div class="clear"></div>
							                                    </div>
						                                    </li>
							                            </ul>
							                            <ul class="products-grid row odd">
								                            <li class="item first col-xs-12 col-sm-4">
							                                    <div class="wrapper-hover">
								                                    <a href="" title="Disco de freno para moto Yamaha modelo: FZ-16" class="product-image">
								                                        <img src="http://www.motoraicer.com/micro/imagenes/repuestosparamoto/discosdefreno/dif2508.png" alt="Disco de freno para moto Yamaha modelo: FZ-16"></a>
								                                    <div class="product-shop">
									                                    <h2 class="product-name"><a href="" title="Disco de freno para moto Yamaha modelo: FZ-16">Disco de freno para moto Yamaha modelo: FZ-16</a></h2>
									                                    <h3 class="product-sku">REF: <span>DR-18K 51</span></h3>
									                                    <div class="price-box">
                                    								        <p class="old-price"><span class="price-label">Precio Regular:</span><span class="price" id="old-price-3030">$60.000 </span></p>
                                                                            <p class="special-price"><span class="price-label">Precio Especial:</span><span class="price" id="product-price-3030">$40.000</span></p>
                                    					                </div>
                                            							<div class="actions">
                                            							    <form class="form7" method="post" action="micro/compras.php">
											                                    <input class="total" type="hidden" name="motorepuesto" value="385">
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
						                                    <li class="item col-xs-12 col-sm-4">
						                                    	<div class="wrapper-hover">
								                                    <a href="" title="Disco de freno para moto modelo: PULSAR-135" class="product-image">
								                                         <img src="http://www.motoraicer.com/micro/imagenes/repuestosparamoto/discosdefreno/dif2509.png" alt="Disco de freno para moto modelo: PULSAR-135"></a>
    								                                <div class="product-shop">
    									                                <h2 class="product-name"><a href="" title="Disco de freno para moto modelo: PULSAR-135">Disco de freno para moto modelo: PULSAR-135</a></h2>
    									                                <h3 class="product-sku">REF: <span>DR-18K 52</span></h3>
    									                                <div class="price-box">
                                        								    <p class="old-price"><span class="price-label">Precio Regular:</span><span class="price" id="old-price-3030">$60.000 </span></p>
                                                                            <p class="special-price"><span class="price-label">Precio Especial:</span><span class="price" id="product-price-3030">$40.000</span></p>
                                        					           </div>
                                                						<div class="actions">
                                                							
                                                							<form class="form7" method="post" action="micro/compras.php">
											                                    <input class="total" type="hidden" name="motorepuesto" value="386">
											                                    <input class="total" type="hidden" name="repuestodemoto" value="<?php echo($t); ?>">
												                                <button type="submit" title="Agregar al carro" class="button btn-cart">
                                                							    <span><span>Comprar</span></span></button>
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
								                                    <a href="" title="Disco de freno para moto HONDA modelo: CBF-150" class="product-image">
								                                        <img src="http://www.motoraicer.com/micro/imagenes/repuestosparamoto/discosdefreno/dif2510.png" alt="Disco de freno para moto HONDA modelo: CBF-150"></a>
								                                    <div class="product-shop">
									                                    <h2 class="product-name"><a href="" title="Disco de freno para moto HONDA modelo: CBF-150">Disco de freno para moto HONDA modelo: CBF-150</a></h2>
									                                    <h3 class="product-sku">REF: <span>DR-18K 53</span></h3>
									                                    <div class="price-box">
                                        								    <p class="old-price"><span class="price-label">Precio Regular:</span><span class="price" id="old-price-3030">$60.000 </span></p>
                                                                            <p class="special-price"><span class="price-label">Precio Especial:</span><span class="price" id="product-price-3030">$40.000</span></p>
                                        					           </div>
                                                						<div class="actions">
                                                						    <form class="form7" method="post" action="micro/compras.php">
											                                    <input class="total" type="hidden" name="motorepuesto" value="387">
											                                    <input class="total" type="hidden" name="repuestodemoto" value="<?php echo($t); ?>">
												                                <button type="submit" title="Agregar al carro" class="button btn-cart">
												                                    
                                                							
                                                							    <span><span>Comprar</span></span></button>
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