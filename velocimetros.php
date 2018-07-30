<?php
session_start();
//include("micro/MisClases/DriverBD.php");//include temporal mientras agrego produ a la BD
$t=session_id();
$carpeta='velocimetrosparamoto/';
$titulo='VELOCIMETROS';
$imagenes[0]='vel2502.png';
$imagenes[1]='vel2503.png';
$imagenes[2]='vel2504.png';

$imagenes[3]='vel2506.png';
$imagenes[4]='vel2507.png';
$imagenes[5]='vel2508.png';

$imagenes[6]='vel2510.png';
$imagenes[7]='vel2511.png';
$imagenes[8]='vel2512.png';
//*********************************************************************
$nombres[0]='Velocimetro para moto modelo:ECO-DELUXE';
$nombres[1]='Velocimetro para moto modelo:NXR-125 BROSS';
$nombres[2]='Velocimetro para moto modelo:AX-100 4T';
$nombres[3]='Velocimetro para moto modelo:BWS-125 DIGITAL';
$nombres[4]='Velocimetro para moto modelo:BWS-125';
$nombres[5]='Velocimetro para Libero 125';
$nombres[6]='Velocimetro para moto modelo:FZ16';
$nombres[7]='Velocimetro para moto modelo:RX-115';
$nombres[8]='Velocimetro para moto modelo:STORM';
//********************************************************************
$referencias[0]='MXT-1';
$referencias[1]='MXT-2';
$referencias[2]='MXT-3';

$referencias[3]='MXT-4';
$referencias[4]='MXT-32';
$referencias[5]='YAMAHA LIBERO 125';

$referencias[6]='MXT-7';
$referencias[7]='MXT-8';
$referencias[8]='MXT-9';
//*****************************************************

$precios[0]='60.000';
$precios[1]='50.000';
$precios[2]='50.000';

$precios[3]='80.000';
$precios[4]='80.000';
$precios[5]='52.000';

$precios[6]='180.000';
$precios[7]='70.000';
$precios[8]='70.000';
//*****************************************************
$preciosb[0]='70.000';
$preciosb[1]='60.000';
$preciosb[2]='60.000';

$preciosb[3]='90.000';
$preciosb[4]='90.000';
$preciosb[5]='90.000';

$preciosb[6]='220.000';
$preciosb[7]='90.000';
$preciosb[8]='90.000';
//*****************************************************
$idproductos[0]='590';
$idproductos[1]='591';
$idproductos[2]='592';

$idproductos[3]='593';
$idproductos[4]='594';
$idproductos[5]='595';

$idproductos[6]='596';
$idproductos[7]='597';
$idproductos[8]='598';
//*****************************************************
$nombresaux[0]='Velocimetro para moto modelo:ECO-DELUXE';
$nombresaux[1]='Velocimetro para moto modelo:NXR-125 BROSS';
$nombresaux[2]='Velocimetro para moto modelo:AX-100 4T';
$nombresaux[3]='Velocimetro para moto modelo:BWS-125 DIGITAL';
$nombresaux[4]='Velocimetro para moto modelo:BWS-125';
$nombresaux[5]='Velocimetro para moto modelo:LIBERO 125';
$nombresaux[6]='Velocimetro para moto modelo:FZ16';
$nombresaux[7]='Velocimetro para moto modelo:RX-115';
$nombresaux[8]='Velocimetro para moto modelo:STORM';
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
 <ul class="products-grid row first odd">
	<li class="item first col-xs-12 col-sm-4">
									                            <div class="wrapper-hover">
										                            <a href="" title="<?php echo($nombreaux[0]); ?>" class="product-image">
											                            <img src="http://www.motoraicer.com/micro/imagenes/repuestosparamoto/<?php echo($carpeta); echo($imagenes[0]); ?>" alt="<?php echo($nombreaux[0]); ?>">
										                            </a>
										                            <div class="product-shop">
											                            <h2 class="product-name"><a href="" title="<?php echo($nombreaux[0]); ?>">
												                            <?php echo($nombres[0]); ?></a></h2>
												    
											                            <h3 class="product-sku">REF: <span><?php echo($referencias[0]); ?></span></h3>
											                            <div class="price-box">
												                            <p class="old-price">
													                            <span class="price-label">Precio Regular:</span>
													                            <span class="price" id="old-price-1802">$
													                            <?php echo($preciosb[0]); ?></span>
												                            </p>

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
	<li class="item first col-xs-12 col-sm-4">
									                            <div class="wrapper-hover">
										                            <a href="" title="<?php echo($nombreaux[1]);?>" class="product-image">
											                             <img src="http://www.motoraicer.com/micro/imagenes/repuestosparamoto/<?php echo($carpeta); echo($imagenes[1]); ?>" alt="<?php echo($nombreaux[1]);?>">
										                            </a>
										                            <div class="product-shop">
											                            <h2 class="product-name"><a href="" title="<?php echo($nombreaux[1]);?>">
												                             <?php echo($nombres[1]); ?></a></h2>
											                            <h3 class="product-sku">REF: <span><?php echo($referencias[1]); ?></span></h3>
											                            <div class="price-box">
												                            <p class="old-price">
													                            <span class="price-label">Precio Regular:</span>
													                            <span class="price" id="old-price-1802">$
													                            <?php echo($preciosb[1]); ?></span>
												                            </p>

												                            <p class="special-price">
													                            <span class="price-label">Precio Especial</span>
													                            <span class="price" id="product-price-1802">$<?php echo($precios[1]); ?></span>
												                            </p>
											                            </div>				
											                            <div class="actions">
											                                <form class="form7" method="post" action="micro/compras.php">
											                                    <input class="total" type="hidden" name="motorepuesto" value="<?php echo($idproductos[1]); ?>">
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
                                    								<a href="" title="<?php echo($nombreaux[2]);?>" class="product-image">
                                    								    <img src="http://www.motoraicer.com/micro/imagenes/repuestosparamoto/<?php echo($carpeta); echo($imagenes[2]); ?>" alt="<?php echo($nombreaux[2]);?>"></a>
                                    								<div class="product-shop">
                                    									<h2 class="product-name"><a href="" title="<?php echo($nombreaux[2]);?>">
                                    									    <?php echo($nombres[2]); ?></a></h2>
                                    									<h3 class="product-sku">REF: <span><?php echo($referencias[2]); ?></span></h3>
                                    				                    <div class="price-box">
                                    								        <p class="old-price"><span class="price-label">Precio Regular:</span><span class="price" id="old-price-3030">$
                                    								        <?php echo($preciosb[2]); ?></span></p>
                                                                            <p class="special-price"><span class="price-label">Precio Especial:</span>
                                                                            <span class="price" id="product-price-3030">$<?php echo($precios[2]); ?></span></p>
                                    					                </div>
                                            							<div class="actions">
                                            							    <form class="form7" method="post" action="micro/compras.php">
											                                    <input class="total" type="hidden" name="motorepuesto" value="<?php echo($idproductos[2]); ?>">
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
								                                    <a href="" title="<?php echo($nombreaux[3]);?>" class="product-image">
								                                    <img src="http://www.motoraicer.com/micro/imagenes/repuestosparamoto/<?php echo($carpeta); echo($imagenes[3]); ?>" alt="<?php echo($nombreaux[3]);?>"></a>
								                                    <div class="product-shop">
									                                    <h2 class="product-name"><a href="" title="<?php echo($nombreaux[3]);?>">
									                                        <?php echo($nombres[3]); ?></a></h2>
									                                    <h3 class="product-sku">REF: <span><?php echo($referencias[3]); ?></span></h3>
									                                     <div class="price-box">
                                    								        <p class="old-price"><span class="price-label">Precio Regular:</span>
                                    								        <span class="price" id="old-price-3030">$
                                    								        <?php echo($preciosb[3]); ?></span></p>
                                                                            <p class="special-price"><span class="price-label">Precio Especial:</span>
                                                                            <span class="price" id="product-price-3030">$
                                                                            <?php echo($precios[3]); ?></span></p>
                                    					                </div>
                                            							<div class="actions">
                                            							    <form class="form7" method="post" action="micro/compras.php">
											                                    <input class="total" type="hidden" name="motorepuesto" value="<?php echo($idproductos[3]); ?>">
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
								                                    <a href="" title="<?php echo($nombreaux[4]);?>" class="product-image">
								                                         <img src="http://www.motoraicer.com/micro/imagenes/repuestosparamoto/<?php echo($carpeta); echo($imagenes[4]); ?>" alt="<?php echo($nombreaux[4]);?>"></a>
    								                                <div class="product-shop">
    									                                <h2 class="product-name"><a href="" title="<?php echo($nombreaux[4]);?>">
    									                                    <?php echo($nombres[4]); ?></a></h2>
    									                                <h3 class="product-sku">REF: <span><?php echo($referencias[4]); ?></span></h3>
    									                                <div class="price-box">
                                        								    <p class="old-price"><span class="price-label">Precio Regular:</span>
                                        								    <span class="price" id="old-price-3030">$
                                        								    <?php echo($preciosb[4]); ?></span></p>
                                                                            <p class="special-price"><span class="price-label">Precio Especial:</span>
                                                                            <span class="price" id="product-price-3030">$
                                                                            <?php echo($precios[4]); ?></span></p>
                                        					           </div>
                                                						<div class="actions">
                                                						    
                                                							
                                                							<form class="form7" method="post" action="micro/compras.php">
											                                    <input class="total" type="hidden" name="motorepuesto" value="<?php echo($idproductos[4]); ?>">
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
								                                    <a href="" title="<?php echo($nombreaux[5]);?>" class="product-image">
								                                        <img src="http://www.motoraicer.com/micro/imagenes/repuestosparamoto/<?php echo($carpeta); echo($imagenes[5]); ?>" alt="<?php echo($nombreaux[5]);?>"></a>
								                                    <div class="product-shop">
									                                    <h2 class="product-name"><a href="" title="<?php echo($nombreaux[5]);?>">
									                                        <?php echo($nombres[5]); ?></a></h2>
									                                    <h3 class="product-sku">REF: <span><?php echo($referencias[5]); ?></span></h3>
									                                    <div class="price-box">
                                        								    <p class="old-price"><span class="price-label">Precio Regular:</span>
                                        								    <span class="price" id="old-price-3030">$
                                        								    <?php echo($preciosb[5]); ?> </span></p>
                                                                            <p class="special-price"><span class="price-label">Precio Especial:</span>
                                                                            <span class="price" id="product-price-3030">$
                                                                            <?php echo($precios[5]); ?></span></p>
                                        					           </div>
                                                						<div class="actions">
                                                							
                                                							<form class="form7" method="post" action="micro/compras.php">
											                                    <input class="total" type="hidden" name="motorepuesto" value="<?php echo($idproductos[5]); ?>">
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
								                                    <a href="" title="<?php echo($nombreaux[6]);?>" class="product-image">
								                                        <img src="http://www.motoraicer.com/micro/imagenes/repuestosparamoto/<?php echo($carpeta); echo($imagenes[6]); ?>" alt="<?php echo($nombreaux[6]);?>"></a>
								                                    <div class="product-shop">
									                                    <h2 class="product-name"><a href="" title="<?php echo($nombreaux[6]);?>">
									                                        <?php echo($nombres[6]); ?>
									                                    </a></h2>
									                                    <h3 class="product-sku">REF: <span><?php echo($referencias[6]); ?></span></h3>
									                                    <div class="price-box">
                                    								        <p class="old-price"><span class="price-label">Precio Regular:</span>
                                    								        <span class="price" id="old-price-3030">$
                                    								        <?php echo($preciosb[6]); ?> </span></p>
                                                                            <p class="special-price"><span class="price-label">Precio Especial:</span>
                                                                            <span class="price" id="product-price-3030">$
                                                                            <?php echo($precios[6]); ?></span></p>
                                    					                </div>
                                            							<div class="actions">
                                            								
                                            								<form class="form7" method="post" action="micro/compras.php">
											                                    <input class="total" type="hidden" name="motorepuesto" value="<?php echo($idproductos[6]); ?>">
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
								                                    <a href="" title="<?php echo($nombreaux[7]);?>" class="product-image">
								                                         <img src="http://www.motoraicer.com/micro/imagenes/repuestosparamoto/<?php echo($carpeta); echo($imagenes[7]); ?>" alt="<?php echo($nombreaux[7]);?>"></a>
    								                                <div class="product-shop">
    									                                <h2 class="product-name"><a href="" title="<?php echo($nombreaux[7]);?>">
    									                                    <?php echo($nombres[7]); ?></a></h2>
    									                                <h3 class="product-sku">REF: <span><?php echo($referencias[7]); ?></span></h3>
    									                                <div class="price-box">
                                        								    <p class="old-price"><span class="price-label">Precio Regular:</span>
                                        								    <span class="price" id="old-price-3030">$
                                        								    <?php echo($preciosb[7]); ?> </span></p>
                                                                            <p class="special-price"><span class="price-label">Precio Especial:</span>
                                                                            <span class="price" id="product-price-3030">$
                                                                            <?php echo($precios[7]); ?></span></p>
                                        					           </div>
                                                						<div class="actions">
                                                						    <form class="form7" method="post" action="micro/compras.php">
											                                    <input class="total" type="hidden" name="motorepuesto" value="<?php echo($idproductos[7]); ?>">
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
								                                    <a href="" title="<?php echo($nombreaux[8]);?>" class="product-image">
								                                        <img src="http://www.motoraicer.com/micro/imagenes/repuestosparamoto/<?php echo($carpeta); echo($imagenes[8]); ?>" alt="<?php echo($nombreaux[8]);?>"></a>
								                                    <div class="product-shop">
									                                    <h2 class="product-name"><a href="" title="<?php echo($nombreaux[8]);?>">
									                                        <?php echo($nombres[8]); ?></a></h2>
									                                    <h3 class="product-sku">REF: <span><?php echo($referencias[8]); ?></span></h3>
									                                    <div class="price-box">
                                        								    <p class="old-price"><span class="price-label">Precio Regular:</span>
                                        								    <span class="price" id="old-price-3030">$
                                        								    <?php echo($preciosb[8]); ?> </span></p>
                                                                            <p class="special-price"><span class="price-label">Precio Especial:</span>
                                                                            <span class="price" id="product-price-3030">$
                                                                            <?php echo($precios[8]); ?></span></p>
                                        					           </div>
                                                						<div class="actions">
                                                							
                                                							<form class="form7" method="post" action="micro/compras.php">
											                                    <input class="total" type="hidden" name="motorepuesto" value="<?php echo($idproductos[8]); ?>">
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
	                                                          
					                                        </div>
				                                        </div>
			                                        </div>
											
	<!--Baner y botones de colores-->	<div class="std">
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