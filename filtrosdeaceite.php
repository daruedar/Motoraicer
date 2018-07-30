<?php
session_start();
//include("micro/MisClases/DriverBD.php");//include temporal mientras agrego produ a la BD
$t=session_id();
$carpeta='filtrosdeaceiteparamoto/';
$titulo='FILTROS DE ACEITE';

$imagenes[0]='fil2528.png';
$imagenes[1]='fil2530.png';
$imagenes[2]='fil2531.png';

$imagenes[3]='fil2532.png';
$imagenes[4]='fil2533.png';
$imagenes[5]='fil2534.png';

$imagenes[6]='fil2535.png';
$imagenes[7]='tap2792.png';
$imagenes[8]='bom2701.png';

//*********************************************************************
$nombres[0]='Filtro de aceite para moto:XT-250/XT-600/XTZ-660';
$nombres[1]='Filtro de aceite para moto:GN-125/GS-125/BEST/VIVAX/AX-100';
$nombres[2]='Filtro de aceite para moto: R15/XT-225/CRYPTON-115';

$nombres[3]='Filtro de aceite para moto: FREEWIND-650/DR-600/GS-500/DR-350';
$nombres[4]='Filtro de aceite para moto: DR-200/';
$nombres[5]='Filtro de aceite para moto: PULSAR-200 NS';

$nombres[6]='Filtro de aceite para moto : XR-250 TORNADO';
$nombres[7]='Tapa para bomba de aceite universal :MOTO SPORT';
$nombres[8]='Bomba de aceite con manguera para freno de disco trasero';

//********************************************************************
$referencias[0]='FIL-74';
$referencias[1]='FIL-75';
$referencias[2]='FIL-80';

$referencias[3]='FIL-81';
$referencias[4]='FIL-82';
$referencias[5]='FIL-84';

$referencias[6]='FIL-85';
$referencias[7]='FIL-86';
$referencias[8]='FIL-87';
//*****************************************************
//ojo los precios  no admiten puntos decimales en la BD
$precios[0]='15.000';
$precios[1]='15.000';
$precios[2]='15.000';

$precios[3]='15.000';
$precios[4]='15.000';
$precios[5]='15.000';

$precios[6]='15.000';
$precios[7]='25.000';
$precios[8]='60.000';
//*****************************************************
$preciosb[0]='25.000';
$preciosb[1]='20.000';
$preciosb[2]='20.000';

$preciosb[3]='20.000';
$preciosb[4]='20.000';
$preciosb[5]='20.000';

$preciosb[6]='20.000';
$preciosb[7]='35.000';
$preciosb[8]='80.000';
//*****************************************************


$idproductos[0]='563';
$idproductos[1]='564';
$idproductos[2]='565';

$idproductos[3]='566';
$idproductos[4]='567';
$idproductos[5]='568';

$idproductos[6]='569';
$idproductos[7]='570';
$idproductos[8]='571';
//*****************************************************

$nombresaux[0]='Filtro de aceite para moto:XT-250/XT-600/XTZ-660';
$nombresaux[1]='Filtro de aceite para moto:GN-125/GS-125/BEST/VIVAX/AX-100';
$nombresaux[2]='Filtro de aceite para moto: R15/XT-225/CRYPTON-115';

$nombresaux[3]='Filtro de aceite para moto: FREEWIND-650/DR-600/GS-500/DR-350';
$nombresaux[4]='Filtro de aceite para moto: DR-200/';
$nombresaux[5]='Filtro de aceite para moto: PULSAR-200 NS';

$nombresaux[6]='Filtro de aceite para moto : XR-250 TORNADO';
$nombresaux[7]='Tapa para bomba de aceite universal :MOTO SPORT';
$nombresaux[8]='Bomba de aceite con manguera para freno de disco trasero';


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
											                                    <input class="total" type="hidden" name="motorepuesto" value="7">
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