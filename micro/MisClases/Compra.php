<?php
/*
Esta clase tiene como objetivo, realizar todas las operaciones requeridas en el archivo visible compras.php.
de manera que si algun usuario intenta usar la fuerza para manipular el carro, se estrella con
el muro de  comprar.php, es decir que  el carro de comprar no existe , a menos que 
compra.php autorize su visualizacion.
EXISTE UN BUG, UN USUARIO AVANZADO PUEDE BORRAR TODOS LOS CARROS A TRAVES DE L METODO GET,
cuando visualizo  mi lista de compras y le doy borrar  a un
elemento esa operacion se hace por el metodo get  y hasta el momento no hay ninguna  
validacion para que no se puedan borrar carros ajenos a la session actual.
*/
//include 'MisClases/DriverBD.php';
//include 'MisClases/Shika.php';
require_once("MisClases/Shika.php");
require_once("MisClases/DriverBD.php");
class Compra
    {
        private $alabase;
        private $productosdeSeccion;
        private $validacion;
        //private $listaCompras;
        //private $idsesion;
        public function __construct(){
          
                $this->productosdeSeccion= array();
                //    $this->idsesion=$id;
                $this->alabase=new DriverBD();
                $this->validacion=array();
            }
        public function addtoCar($idpro,$cant,$idses){
                $var=new DriverBD();
            	$enlace=mysqli_connect($var->gserv(), $var->guser(), $var->gpass(),$var->gnbd());
                if(!$enlace)echo mysqli_connect_error();
				$consulta="insert into carros(idsesion,cantidad,idproduc)values('".$idses."',".$cant.",".$idpro.")";
				$resultado= mysqli_query($enlace,$consulta);
				mysqli_close($enlace);
            }
        public function setCantidad($idcarro,$cantidad){
            //echo("Vais bien");
            //echo($idcarro);
            //echo($cantidad);
            $var=new DriverBD();
            $enlace=mysqli_connect($var->gserv(), $var->guser(), $var->gpass(),$var->gnbd());
            if(!$enlace){echo mysqli_connect_error();echo("error en shikamaru.addvisi");}
             //"UPDATE `carros` SET `cantidad` = \'3\' WHERE `carros`.`id` = 577";
			//$consulta= "UPDATE carros SET cantidad=".$idcarro."WHERE carros.id =".$cantidad;
			$consulta= "UPDATE carros SET cantidad=".$idcarro." WHERE id =".$cantidad;
			//echo($consulta);
			$resultado= mysqli_query($enlace,$consulta);
			mysqli_close($enlace);
        }
        public function setCarro($idsession){
            //Almacena  todos los productos seleccioinados por un cliente
            $var=new DriverBD();
            $enlace=mysqli_connect($var->gserv(), $var->guser(), $var->gpass(),$var->gnbd());
		    $bd_seleccionada=mysqli_select_db($enlace,$this->namebase);
			if(!$enlace)echo mysqli_connect_error();
			$consulta3="SELECT carros.idsesion,carros.cantidad,carros.idproduc,productos.id,productos.nombre,productos.imagen,productos.precio,carros.id FROM carros, productos WHERE(carros.idproduc=productos.id)AND(carros.idsesion='".$idsession."')";
			$resultado= mysqli_query($enlace,$consulta3);
			$row = mysqli_fetch_array($result, MYSQLI_NUM);
			    while($row =mysqli_fetch_array($resultado,MYSQLI_NUM)){
					    $lacompra=null;
					    $lacompra= new Shika($row[3],$row[4],$row[5],$row[6],$row[1],$row[7]);//los indices modificar
					    $this->addListadeCompras($lacompra);
				    }
			    mysqli_free_result($resultado);
			    mysqli_close($enlace);
            }
        private function addListadeCompras($compra1){$this->productosdeSeccion[]=$compra1;}
    
        public function getLista(){return $this->productosdeSeccion;}
        public function getCantidadProductosdelCarro()
            {   $salida=count($this->productosdeSeccion);
                return $salida;
            }
        // public function getIdsess(){return $this->idsesion;}
        //public function getBase(){return $this->alabase;}
        public function showCar($listaCompras)  {
          $descripcion="";
            $subtotal=0;
 echo("<!DOCTYPE html>");
 echo('<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" style="height: 100%;" lang="en">');
	echo('<head>');
		?>
<link href="../../autenticos/css.css" rel="stylesheet" type="text/css">
<link href="../../autenticos/translateelement.css"type="text/css" rel="stylesheet" charset="UTF-8" >
<link href="../../autenticos/buttons.css"rel="stylesheet" type="text/css" >
<link href="../../autenticos/cd3d4ebe845a93a761b3a60a6ae34052.css"rel="stylesheet" type="text/css"  media="all">
<link href="../../autenticos/a8d7bbe2916ed0f52877eaeee2bd058b.css"rel="stylesheet" type="text/css"  media="print">
<link rel="stylesheet" type="text/css" href="../../autenticos/flexslider.css" media="all">
<link rel="stylesheet" type="text/css" href="../../autenticos/font/css/font-awesome.min.css" media="all">

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="viewport" content="width=device-width,minimum-scale=1,maximum-scale=1">


<script src="../../autenticos/bat.js" async=""></script>
<script async="" src="../../autenticos/analytics.js"></script>
<script type="text/javascript" async="" src="../../autenticos/ga_002.js"></script>
<script type="text/javascript" async="" src="../../autenticos/114771.js"></script>
<script type="text/javascript" async="" src="../../autenticos/gate.js"></script>
<script type="text/javascript" src="../../autenticos/jquery-1.js"></script>
<script type="text/javascript" src="../../autenticos/superfish.js"></script>
<script type="text/javascript" src="../../autenticos/scripts.js"></script>

<script type="text/javascript" src="../../autenticos/prototype.js"></script>
<script type="text/javascript" src="../../autenticos/ccard.js"></script>
<script type="text/javascript" src="../../autenticos/validation.js"></script>
<script type="text/javascript" src="../../autenticos/builder.js"></script>
<script type="text/javascript" src="../../autenticos/effects.js"></script>
<script type="text/javascript" src="../../autenticos/dragdrop.js"></script>
<script type="text/javascript" src="../../autenticos/controls.js"></script>
<script type="text/javascript" src="../../autenticos/slider.js"></script>
<script type="text/javascript" src="../../autenticos/js.js"></script>
<script type="text/javascript" src="../../autenticos/form.js"></script>
<script type="text/javascript" src="../../autenticos/translate.js"></script>
<script type="text/javascript" src="../../autenticos/cookies.js"></script>
<script type="text/javascript" src="../../autenticos/cloud-zoom.js"></script>
<script type="text/javascript" src="../../autenticos/ga.js"></script>
<script type="text/javascript" src="../../autenticos/lightbox.js"></script>
<script type="text/javascript" src="../../autenticos/jquery_002.js"></script>
<script type="text/javascript" src="../../autenticos/jquery_004.js"></script>
<script type="text/javascript" src="../../autenticos/jquery_003.js"></script>
<script type="text/javascript" src="../../autenticos/bootstrap.js"></script>
<script type="text/javascript" src="../../autenticos/jquery_005.js"></script>
<script type="text/javascript" src="../../autenticos/jquery.js"></script>
<script type="text/javascript" src="../../autenticos/jquery_006.js"></script>
<script type="text/javascript" src="../../autenticos/catalogevent.js"></script>
<script type="text/javascript" src="../../autenticos/wishlist.js"></script>
<script type="text/javascript" src="../../autenticos/easytabs.js"></script>
<script type="text/javascript" src="../../autenticos/carousel.js"></script>
<script src="../../autenticos/integration-vendors.js"></script>
<script type="text/javascript" src="../../autenticos/deployment.js"></script>
<script type="text/javascript" charset="UTF-8" src="../../autenticos/main_es.js"></script>
<script type="text/javascript" charset="UTF-8" src="../../autenticos/element_main.js"></script>
<script type="text/javascript" src="../../autenticos/integration.js"></script>
<script type="text/javascript" src="../../autenticos/conversion.js"></script>
<script type="text/javascript" src="../../autenticos/element.js"></script>
<script src="../../autenticos/jquery_002.js"></script>

<!--Para que funcione el botstrap en esta pagina-->
<script type="text/javascript" src="../theframework/bootstrap/js/bootstrap.js"></script>	
<link rel="stylesheet" type="text/css" href="../theframework/bootstrap/css/bootstrap.css" media="all">
		
		
	
		<?PHP
	echo('</head>');
	
	echo('<body class="ps-static  checkout-cart-index" style="position: relative; min-height: 100%; top: 0px;">');
			echo('<div class="wrapper ps-static en-lang-class">');
    			echo('<noscript>');
    		    	echo('<div class="global-site-notice noscript">');
    			        echo('<div class="notice-inner">');
    		            	echo('<p>');
    			                echo('<strong>JavaScript seems to be disabled in your browser.</strong><br/>');
    		               	echo('You must have JavaScript enabled in your browser to utilize the functionality of this website.</p>');
    			echo('</div></div></noscript>');
			
			echo('<div class="page"><div class="shadow"></div><div class="swipe-left"></div>');
			?>
			
			<div class="swipe" style="height: 656px;">
 <div class="swipe-menu">
  <a href="../index.php" title="Home" class="home-link">Inicio</a>
    <ul class="links">
     <li class="first"><a href="../nosotros.php" title="Nosotros">Nosotros</a></li>
     <li><a href="../catalogo.php" title="Catalogo">Catalogo</a></li>
     <li class="top-car"><a href="" title="Mi lista de compras" class="top-link-cart">Mi Carro</a></li>
     <li><a href="../terminosycondiciones.php" title="Terminos y Condiciones" class="top-link-checkout">Terminos de Uso</a></li>
     <li class=" last"><a href="../privacidad.php" title="Politicas de Manejo de datos">Privacidad</a></li>
    </ul>                   
	<div class="footer-links-menu">   
	 <ul class="links-2">
	  <li class="first"><a href="">Product Sitemap</a></li>
	  <li><a href="">Category Sitemap</a></li>
	  <li><a href="">Contactenos</a></li>
	  <li><a href="">Orders and Returns</a></li>
	 </ul>        
	</div>
 </div>
</div>
    
<div class="top-icon-menu">
    <div class="swipe-control"><i class="icon-reorder"></i></div>
    <div class="top-search"><i class="icon-search"></i></div>
    <span class="clear"></span>
</div>
				
				
				
				
				
			<?php
		
			
			echo('<div class="header-container">');
			
			
			
		
		?>
		
		<div class="container">
	<div class="row">
		<div class="col-xs-12">
			<div class="header">
				<div class="header-border" > 
					<div class="header-buttons"></div>
					<div class="clear"></div>
				</div>
				<p class="welcome-msg"> Importando repuestos de alta calidad con los mejores precios desde 2009!  </p>
				<div class="quick-access">
					<ul class="links">
					    <li><a href="../index.php" title="Pagina Principal"><span style="font-size:22px;">Inicio</span></a></li>
						<li><a href="../nosotros.php" title="Sobre nuestra empresa"><span style="font-size:22px;">Nosotros</span></a></li>
                        <li class="top-car"><a href="" title="My Cart" class="top-link-cart"><span style="font-size:22px;">Mi Carro</span></a></li>
                        <li><a href="../contactenos.php" title="Preguntenos por el repuesto que busca" class="top-link-checkout"><span style="font-size:22px;">Contacto</span></a></li>
                        <li class=" last"><a href="../catalogo.php" title="Lista de productos"><span style="font-size:22px;">Catalogo</span></a></li>
					</ul>
				</div>
                <h1 class="logo"><strong>Moto repuestos</strong>
					<a href="" title="repuestos para moto motoraicer" class="logo"><img src="http://www.motoraicer.com/micro/imagenes/loboc.jpg" alt="Logo Motoraicer"></a>
				</h1>
                <div class="clear">
			        <div class="block-cart-header">
				        <h3>&nbsp;&nbsp;&nbsp;&nbsp;</h3>
			            <div class="block-content">
			                <div class="empty">
				                <div>0 item(s) - <span class="price">$0.00</span>&nbsp; 
				                    <div style="float:right;">
				                    <span class="glyphicon glyphicon-chevron-down"></span> </div>
				                </div>
				                <div class="cart-content">Usted no tiene productos en su lista</div>
				            </div>
                            <p class="mini-cart"><span class="glyphicon glyphicon-shopping-cart" style="color:#fff;margin-left:10px;"></span> <strong>&nbsp;0 </strong></p>
				        </div>
				    </div>
				    <form id="search_mini_form" action="" method="get">
                        <div class="form-search" style="z-index:150;">
                            <label for="search">Buscar:</label>
                            <input id="search" name="q" value="Busque su repuesto aqui..." class="input-text" maxlength="128" autocomplete="off" type="text">
                            <button type="submit" title="Search" class="button"><span><span>Buscar</span></span></button>
                            <div id="search_autocomplete" class="search-autocomplete" style="display: none;"></div>
                            <script type="text/javascript">
                                //<![CDATA[
                                    var searchForm = new Varien.searchForm('search_mini_form', 'search', 'Search entire store here...');
                                    searchForm.initAutocomplete('http://www..com/catalogsearch/ajax/suggest/', 'search_autocomplete');
                                //]]>
                            </script>
                        </div>
                    </form>
				    <div class="clear"></div>
				</div>
			</div>
		</div>
		<div class="clear"></div>
	</div>
</div>
		
		
		
		<?php
	
			echo('</div>');
			
			
		?>
		

		
		
		
		
		
		
		
		
		
		<?php
	
			echo('<script type="text/javascript">');
			echo('jQuery(document).ready(function() {');
			echo('var $ = jQuery;');
			echo('var currentUrl = "";');
			echo('if ((navigator.userAgent.match(/iPad/i))) {');
			echo("$('li.level-top a').click(function(){");
			echo('if($(this).parent().hasClass("level1")) return true;');
			echo("if(currentUrl != $(this).attr('href'))");
			echo("{currentUrl = $(this).attr('href');return false;}});}});</script>");
			echo('<div class="main-container col1-layout">');
			echo('<div class="container">');
			echo('<div class="row">');
			echo('<div class="col-xs-12">');
			echo('<div class="main">');
			echo('<div class="col-main">');
			echo('<div class="padding-s">');
			echo('<div class="cart">');
			echo('<div class="page-title title-buttons">');
			echo('<h1>Lista de Compras</h1>');
			echo('<ul class="checkout-types">');
			echo('<li><p class="paypal-logo">');
			echo('<a data-action="checkout-form-submit" id="ec_shortcut_ec41009aee834d031e403ba7b86fe030" href="">');
			echo('<img src="http://www.motoraicer.com/micro/imagenes/checkout-logo-medium.png" alt="Pagos Bancolombia" title="Pagos con Bancolombia"></a>');
			echo('<span class="paypal-or"></span></p></li>');
			echo('<li class="bml-checkout-type">');
			echo('<p class="paypal-logo">');
			echo('<span class="bml_button">');
			echo('<a id="ec_shortcut_bml_b4c272909db47b7df62e82759ea61fcb" href="">');
			echo('<img src="http://www.motoraicer.com/micro/imagenes/ppcredit-logo-medium.png" alt="Chect" title="Cht"></a>');
			echo('<a href=""><img src="Shopping%20Cart_files/btn_bml_text.png"></a></span></p></li>');
			echo('<li><p class="paypal-logo"><span class="paypal-or">-OR-</span></p></li>');
			echo('<li>    <button type="button" title="Proceed to Checkout" class="button btn-proceed-checkout btn-checkout" onclick="">');
			echo('<span><span>Proceed to Checkout</span></span></button>');
			echo('</li></ul></div>');
			echo('<!--    <form action="" method="">-->');
			echo('<fieldset>');
			echo('<table id="shopping-cart-table" class="data-table cart-table">');
			echo('<colgroup>');
			echo('<col width="1"><col><col width="1"><col width="1"><col width="1"><col width="1"><col width="1">');
			echo('</colgroup><thead><tr class="first last">');
			echo('<th rowspan="1">&nbsp;</th>');
			echo('<th rowspan="1"><span class="nobr">Nombre del Repuesto</span></th>');
			//echo('<th rowspan="1"></th>');
			echo('<th class="a-center" colspan="1"><span class="nobr">Precio unitario</span></th>');
			echo('<th rowspan="1" class="a-center">Can</th>');
			echo('<th class="a-center" colspan="1">Subtotal</th>');
			echo('<th rowspan="1" class="a-center">&nbsp;</th>');
			echo('</tr></thead><tfoot><tr class="first last"><td colspan="50" class="a-right last">');
			echo('<button type="button" title="Continuar comprando" class="button btn-continue" onclick="');
			//*************************************************************
			//*************************************************************
			//*************************************************************
			//*************************************************************
			echo("location.href='../index.php'");
			//echo("window.history.back()");//pasa los mismos parametros enviados por get una recompra indeseada
			//*************************************************************
			//*************************************************************
			//*************************************************************
			//*************************************************************
			
			//echo("window.location=\'https://www.motoraicer.com\'");
			echo('">');
		//	window.location=\'https://www.motoraicer.com/micro/compras.php?cantidad=\'+this.name+\'&precio=\'+this.value+\'\'
			echo('<span><span>Seguir Comprando</span></span>');
			echo(' </button>');
			//echo('<button type="submit" name="update_cart_action" value="update_qty" title="Update Shopping Cart" class="button btn-update">');
			//echo('<span><span>Actualizar lista</span></span>');
			//echo('</button>');
			echo('<button type="submit" name="update_cart_action" value="empty_cart" title="Clear Shopping Cart" ');
			echo('class="button btn-empty" id="empty_cart_button" onclick="');
			echo("location.href='compras.php?borrartodo=5'");
			echo('">');
			//echo('compras.php?borrartodo=5">');
			
			echo('<span><span>Borrar Compra</span></span></button></td></tr></tfoot><tbody>');
			echo('<script type="text/javascript">');
			echo('var bitcoin=0;');
			echo('function getBar(){return bitcoin}');
			echo('function setBar(m,n){alert(m);alert(n);}');
			echo('</script>');
			
			for($i=0;$i<count($listaCompras);$i++){
				echo('<tr class="first odd">');
				echo('<td><a href="" title="40x" class="product-image">');
				echo('<img src="../../imagenes/todas/');
				$listaCompras[$i]->getImagen();
				echo('" alt="" height="75" width="75"></a></td>');
				echo('<td><h2 class="product-name"> <a href="">');
				echo($listaCompras[$i]->getNombre());
				//$descripcion =$descripcion." ".$listaCompras[$i]->getNombre()."<br>";
				echo('</a></h2></td>');
				/*echo('<td class="a-center"><a class="');
				$listaCompras[$i]->getIdCar();
				echo('"');
				echo('href="');
				//echo('');
				echo("https://www.motoraicer.com/micro/compras.php");
				
				
		
		
				echo('">Editar</a></td>');*/
				echo('<td class="a-right"><span class="cart-price"><span class="price">');
				//$listaCompras[$i]->getPrecio();
				echo($listaCompras[$i]->getPrecio());
				echo('</span></span></td>');
				echo('<td class="a-center">');					                                          
				echo(' <input name="  ');
				$listaCompras[$i]->getIdCar();
				//echo('" data-cart-item-id="" value="1" size="4" title="Qty" class="input-text qty form-control" maxlength="12" onchange="window.location=\'https://www.motoraicer.com/micro/compras.php?cantidad=5&precio=yreu\'">');
				//echo('" data-cart-item-id="" value="1" size="4" title="Qty" class="input-text qty form-control" maxlength="12" onchange="window.location=\'https://www.motoraicer.com/micro/compras.php?cantidad=\'+this.name+\'&precio=svalue\'">');
				echo('" data-cart-item-id="" value="');
				echo($listaCompras[$i]->getCantidad());
				echo('" size="4" title="Qty" class="input-text qty form-control" maxlength="12" onchange="window.location=\'https://www.motoraicer.com/micro/compras.php?cantidad=\'+this.name+\'&precio=\'+this.value+\'\'">');
				echo('</td>');
				echo('<td class="a-right"><span class="cart-price"><span class="price">');
				echo($listaCompras[$i]->getSubtotal());
				echo('</span></span></td>');
				// echo('<td class="a-center last"><a href="" title="Remove item" class="btn-remove btn-remove2">Borrar</a></td>');
				
				//echo('<td><a href="https://www.motoraicer.com/micro/compras.php?borrar=');
				//$listaCompras[$i]->getIdCar();
				//echo('"><span class=" glyphicon glyphicon-trash" style="font-size:23px;margin-right:10px;" ></span></a></td>');
				
				
				//echo('<td><a href="https://www.motoraicer.com/micro/compras.php?borrar=');
				//$listaCompras[$i]->getIdCar();
				//echo('"><span class=" glyphicon glyphicon-trash" style="font-size:23px;margin-right:10px;" ></span></a></td>');
				
				echo('<td>');
				    echo('<form action="compras.php" method="post">');
				        echo('<input name="borrar"  value="');
				        $listaCompras[$i]->getIdCar();
				        echo('" type="hidden">');
				        //echo('<span class=" glyphicon glyphicon-trash" style="font-size:23px;margin-right:10px;" >');
				        //echo('<input  type="submit" value="">');
				        //echo('</span>');
				        echo('    <button type="submit" class="btn btn-primary" name="B1"><span class="glyphicon glyphicon-trash " style="font-size:23px;margin-right:10px;"></span></button>');
				    echo('</form>');
				echo('</td>');
	
				echo('</tr>');
				$subtotal+=$listaCompras[$i]->getSubtotal();
			}//Fin del For
			$_SESSION['subtotal'] =$subtotal;
			
				for($i=0;$i<count($listaCompras);$i++){
				    $descripcion.=($listaCompras[$i]->getCantidad())."-".($listaCompras[$i]->getNombre())."-";
				}
				$_SESSION['descripcion'] =$descripcion;
			
			//echo($descripcion);												
			echo("</tbody></table><script type='text/javascript'>decorateTable('shopping-cart-table')</script>");
			echo('</fieldset><!-- </form>-->');
			
			echo('<div class="cart-collaterals">');
			echo('<div class="col2-set">');
			echo('<div class="col-1"></div>');
			echo('<div class="col-2">');
			
			echo('<form id="discount-coupon-form" action="" method="post">');
			echo('<div class="discount">');
			echo('<h2>Cupones de Descuento</h2>');
			echo('<div class="discount-form">');
			echo('<label for="coupon_code">Digite el codigo de su cupon.</label>');
			echo('<input name="remove" id="remove-coupone" value="0" type="hidden">');
			echo('<div class="input-box">');
			echo('<input class="input-text form-control" id="coupon_code" name="coupon_code">');
			echo('</div><div class="buttons-set">');
			echo('<button type="button" title="Apply Coupon" class="button" onclick="alert(\'Codigo no valido\')" value="Apply Coupon">');
			echo('<span><span>Aplicar cupon</span></span></button></div></div></div></form>');
			echo('<script type="text/javascript">');
			echo("var discountForm = new VarienForm('discount-coupon-form');");
			echo('discountForm.submit = function (isRemove) {');
			echo('if (isRemove) {');
			echo("$('coupon_code').removeClassName('required-entry');");
			echo("$('coupon_code').removeClassName('required-entry');");
			echo("$('remove-coupone').value = '1';");
			echo("} ");
			echo("return VarienForm.prototype.submit.bind(discountForm)();}</script></div></div>");
			echo('<div class="totals"><table id="shopping-cart-totals-table"><colgroup><col><col width="1"></colgroup>');
			echo('<tfoot><tr><td style="" class="a-right" colspan="1"><strong>Total</strong></td>');
			
			echo('<td style="" class="a-right"><strong><span class="price">');
			echo($subtotal);
			echo('</span></strong></td>');
			
			
			echo('</tr></tfoot><tbody><tr>');
			echo('<td style="" class="a-right" colspan="1">Subtotal    </td>');
			echo('<td style="" class="a-right"><span class="price">');
		    echo($subtotal);
			echo('</span>    </td>');
			echo('</tr></tbody></table>');
			echo('<div><div class="lscart" style="width:135px;float:right;margin:-20px 15px 10px;"></div></div>');
			echo('<ul class="checkout-types"><li><p class="paypal-logo">');
			echo('<a data-action="checkout-form-submit" id="ec">');
			echo('<img src="http://www.motoraicer.com/micro/imagenes/checkout-logo-medium.png" alt="Pagos en Bancolombia" title="Pagos en Bancolombia"></a>');
			echo('<span class="paypal-or"></span></p>');
			echo('</li><li class="bml-checkout-type"><p class="paypal-logo"><span class="bml_button">');
			echo('<a>');
			echo('<img src="http://www.motoraicer.com/micro/imagenes/ppcredit-logo-medium.png" alt="Pagos Efecty" title="Pagos Efecti"></a>');
			//echo('<a href=""><img src="Shopping%20Cart_files/btn_bml_text.png"></a>');
			echo('</span></p></li><li><p class="paypal-logo"><span class="paypal-or"></span></p>');
			//*****************************************************************
			//*****************************************************************
			//*****************************************************************
			//*****************************************************************
			//*****************************************************************
			//*****************************************************************
			//*****************************************************************
			/*echo('</li><li>    <button type="button" title="Proceed to Checkout" class="button btn-proceed-checkout btn-checkout" onclick="	window.location=\'../../checo.php\'">');*/
			echo('<form action="../../checo.php" method="post"><input type="hidden" name="llave" value="fxmz45y">');
			echo('<button type="button" title="Proceder al pago" class="button btn-proceed-checkout btn-checkout" onclick="this.form.submit();">');
			echo('</form>');
		
			
			//*****************************************************************
			//*****************************************************************
			//*****************************************************************
			//*****************************************************************
			//*****************************************************************
			//*****************************************************************
			//*****************************************************************
			
		
			
			echo('<span><span>Proceder al Pago</span></span></button>');
			echo('</li><li></li></ul></div></div></div>');
			echo('<script type="text/javascript">');
			echo("var google_tag_params = {ecomm_prodid: ['M200-LED','B100'], ecomm_pagetype: 'cart', ecomm_totalvalue: 299.96}");
			echo('</script></div></div></div></div></div></div></div>');
			echo('<div id="wishlist_edit_action_container"></div>');
			include "motopartes/foter.php";
			
			echo('<form class="infoPago3" action="../checo.php" method="post">');
			echo('<input class="total" type="hidden" name="total" value="">');
			echo('<input class="descripcion" type="hidden" name="descripcion" value="">');
			echo('</form>');
		echo('</div></div></body></html>');
        }//Fin funcion Modificada
        
        public function validar($idcarro){
            //Verifica si el carro $idcarro, pertenece a la  session actual
            $var=new DriverBD();
            $enlace=mysqli_connect($var->gserv(), $var->guser(), $var->gpass(),$var->gnbd());
            if(!$enlace){echo mysqli_connect_error();echo("error en Compras.php 337 ");}
            $consulta="SELECT carros.id,carros.idsesion FROM carros where carros.id=".$idcarro;
            $resultado= mysqli_query($enlace,$consulta);
            $row = mysqli_fetch_array($result, MYSQLI_NUM);
            while($row =mysqli_fetch_array($resultado,MYSQLI_NUM)){
					    //$lacompra=null;
					    //$lacompra= new Shika($row[3],$row[4],$row[5],$row[6],$row[1],$row[7]);//los indices modificar
					    $this->validacion=$row[1];
				    }
			    mysqli_free_result($resultado);
			    mysqli_close($enlace);
            return $this->validacion;
        }
        public function borrarCarro($idcarro){
				$var=new DriverBD();
                $enlace=mysqli_connect($var->gserv(), $var->guser(), $var->gpass(),$var->gnbd());
                if(!$enlace){echo mysqli_connect_error();echo("error en Compras.php");}
				$consulta="DELETE FROM carros where carros.id=".$idcarro;
				$resultado= mysqli_query($enlace,$consulta);
				mysqli_close($enlace);
			}
		public function limpiarCarro($idcarro){
		    //Borra  TODOS los productos  de un carro el parametro es el idsession
				$var=new DriverBD();
                $enlace=mysqli_connect($var->gserv(), $var->guser(), $var->gpass(),$var->gnbd());
                if(!$enlace){echo mysqli_connect_error();echo("error en shikamaru.addvisi");}
				$consulta="DELETE FROM carros where carros.idsesion='".$idcarro."'";
				$resultado= mysqli_query($enlace,$consulta);
				mysqli_close($enlace);
			}	
		
		public function showCarroVacio(){ ?>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		 $descripcion="";
            $subtotal=0;
 echo("<!DOCTYPE html>");
 echo('<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" style="height: 100%;" lang="en">');
	echo('<head>');
		?>

		
		
<link href="../../autenticos/css.css" rel="stylesheet" type="text/css">
<link href="../../autenticos/translateelement.css"type="text/css" rel="stylesheet" charset="UTF-8" >
<link href="../../autenticos/buttons.css"rel="stylesheet" type="text/css" >
<link href="../../autenticos/cd3d4ebe845a93a761b3a60a6ae34052.css"rel="stylesheet" type="text/css"  media="all">
<link href="../../autenticos/a8d7bbe2916ed0f52877eaeee2bd058b.css"rel="stylesheet" type="text/css"  media="print">
<link rel="stylesheet" type="text/css" href="../../autenticos/flexslider.css" media="all">
<link rel="stylesheet" type="text/css" href="../../autenticos/font/css/font-awesome.min.css" media="all">

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="viewport" content="width=device-width,minimum-scale=1,maximum-scale=1">


<script src="../../autenticos/bat.js" async=""></script>
<script async="" src="../../autenticos/analytics.js"></script>
<script type="text/javascript" async="" src="../../autenticos/ga_002.js"></script>
<script type="text/javascript" async="" src="../../autenticos/114771.js"></script>
<script type="text/javascript" async="" src="../../autenticos/gate.js"></script>
<script type="text/javascript" src="../../autenticos/jquery-1.js"></script>
<script type="text/javascript" src="../../autenticos/superfish.js"></script>
<script type="text/javascript" src="../../autenticos/scripts.js"></script>

<script type="text/javascript" src="../../autenticos/prototype.js"></script>
<script type="text/javascript" src="../../autenticos/ccard.js"></script>
<script type="text/javascript" src="../../autenticos/validation.js"></script>
<script type="text/javascript" src="../../autenticos/builder.js"></script>
<script type="text/javascript" src="../../autenticos/effects.js"></script>
<script type="text/javascript" src="../../autenticos/dragdrop.js"></script>
<script type="text/javascript" src="../../autenticos/controls.js"></script>
<script type="text/javascript" src="../../autenticos/slider.js"></script>
<script type="text/javascript" src="../../autenticos/js.js"></script>
<script type="text/javascript" src="../../autenticos/form.js"></script>
<script type="text/javascript" src="../../autenticos/translate.js"></script>
<script type="text/javascript" src="../../autenticos/cookies.js"></script>
<script type="text/javascript" src="../../autenticos/cloud-zoom.js"></script>
<script type="text/javascript" src="../../autenticos/ga.js"></script>
<script type="text/javascript" src="../../autenticos/lightbox.js"></script>
<script type="text/javascript" src="../../autenticos/jquery_002.js"></script>
<script type="text/javascript" src="../../autenticos/jquery_004.js"></script>
<script type="text/javascript" src="../../autenticos/jquery_003.js"></script>
<script type="text/javascript" src="../../autenticos/bootstrap.js"></script>
<script type="text/javascript" src="../../autenticos/jquery_005.js"></script>
<script type="text/javascript" src="../../autenticos/jquery.js"></script>
<script type="text/javascript" src="../../autenticos/jquery_006.js"></script>
<script type="text/javascript" src="../../autenticos/catalogevent.js"></script>
<script type="text/javascript" src="../../autenticos/wishlist.js"></script>
<script type="text/javascript" src="../../autenticos/easytabs.js"></script>
<script type="text/javascript" src="../../autenticos/carousel.js"></script>
<script src="../../autenticos/integration-vendors.js"></script>
<script type="text/javascript" src="../../autenticos/deployment.js"></script>
<script type="text/javascript" charset="UTF-8" src="../../autenticos/main_es.js"></script>
<script type="text/javascript" charset="UTF-8" src="../../autenticos/element_main.js"></script>
<script type="text/javascript" src="../../autenticos/integration.js"></script>
<script type="text/javascript" src="../../autenticos/conversion.js"></script>
<script type="text/javascript" src="../../autenticos/element.js"></script>
<script src="../../autenticos/jquery_002.js"></script>

<!--Para que funcione el botstrap en esta pagina-->
<script type="text/javascript" src="../theframework/bootstrap/js/bootstrap.js"></script>	
<link rel="stylesheet" type="text/css" href="../theframework/bootstrap/css/bootstrap.css" media="all">
		
		
	
		<?PHP
	echo('</head>');
	
	echo('<body class="ps-static  checkout-cart-index" style="position: relative; min-height: 100%; top: 0px;">');
			echo('<div class="wrapper ps-static en-lang-class">');
    			echo('<noscript>');
    		    	echo('<div class="global-site-notice noscript">');
    			        echo('<div class="notice-inner">');
    		            	echo('<p>');
    			                echo('<strong>JavaScript seems to be disabled in your browser.</strong><br/>');
    		               	echo('You must have JavaScript enabled in your browser to utilize the functionality of this website.</p>');
    			echo('</div></div></noscript>');
			
			echo('<div class="page"><div class="shadow"></div><div class="swipe-left"></div>');
			?>
			
			<div class="swipe" style="height: 656px;">
 <div class="swipe-menu">
  <a href="../index.php" title="Home" class="home-link">Inicio</a>
    <ul class="links">
     <li class="first"><a href="../nosotros.php" title="Nosotros">Nosotros</a></li>
     <li><a href="../catalogo.php" title="Catalogo">Catalogo</a></li>
     <li class="top-car"><a href="" title="Mi lista de compras" class="top-link-cart">Mi Carro</a></li>
     <li><a href="../terminosycondiciones.php" title="Terminos y Condiciones" class="top-link-checkout">Terminos de Uso</a></li>
     <li class=" last"><a href="../privacidad.php" title="Politicas de Manejo de datos">Privacidad</a></li>
    </ul>                   
	<div class="footer-links-menu">   
	 <ul class="links-2">
	  <li class="first"><a href="">Product Sitemap</a></li>
	  <li><a href="">Category Sitemap</a></li>
	  <li><a href="">Contactenos</a></li>
	  <li><a href="">Orders and Returns</a></li>
	 </ul>        
	</div>
 </div>
</div>
    
<div class="top-icon-menu">
    <div class="swipe-control"><i class="icon-reorder"></i></div>
    <div class="top-search"><i class="icon-search"></i></div>
    <span class="clear"></span>
</div>
				
				
				
				
				
			<?php
		
			
			echo('<div class="header-container">');
			
			
			
		
		?>
		
		<div class="container">
	<div class="row">
		<div class="col-xs-12">
			<div class="header">
				<div class="header-border" > 
					<div class="header-buttons"></div>
					<div class="clear"></div>
				</div>
				<p class="welcome-msg"> Importando repuestos de alta calidad con los mejores precios desde 2009!  </p>
				<div class="quick-access">
					<ul class="links">
					    <li><a href="../index.php" title="Pagina Principal"><span style="font-size:22px;">Inicio</span></a></li>
						<li><a href="../nosotros.php" title="Sobre nuestra empresa"><span style="font-size:22px;">Nosotros</span></a></li>
                        <li class="top-car"><a href="" title="My Cart" class="top-link-cart"><span style="font-size:22px;">Mi Carro</span></a></li>
                        <li><a href="../contactenos.php" title="Preguntenos por el repuesto que busca" class="top-link-checkout"><span style="font-size:22px;">Contacto</span></a></li>
                        <li class=" last"><a href="../catalogo.php" title="Lista de productos"><span style="font-size:22px;">Catalogo</span></a></li>
					</ul>
				</div>
                <h1 class="logo"><strong>Moto repuestos</strong>
					<a href="" title="repuestos para moto motoraicer" class="logo"><img src="http://www.motoraicer.com/micro/imagenes/loboc.jpg" alt="Logo Motoraicer"></a>
				</h1>
                <div class="clear">
			        <div class="block-cart-header">
				        <h3>&nbsp;&nbsp;&nbsp;&nbsp;</h3>
			            <div class="block-content">
			                <div class="empty">
				                <div>0 item(s) - <span class="price">$0.00</span>&nbsp; 
				                    <div style="float:right;">
				                    <span class="glyphicon glyphicon-chevron-down"></span> </div>
				                </div>
				                <div class="cart-content">Usted no tiene productos en su lista</div>
				            </div>
                            <p class="mini-cart"><span class="glyphicon glyphicon-shopping-cart" style="color:#fff;margin-left:10px;"></span> <strong>&nbsp;0 </strong></p>
				        </div>
				    </div>
				    <form id="search_mini_form" action="" method="get">
                        <div class="form-search" style="z-index:150;">
                            <label for="search">Buscar:</label>
                            <input id="search" name="q" value="Busque su repuesto aqui..." class="input-text" maxlength="128" autocomplete="off" type="text">
                            <button type="submit" title="Search" class="button"><span><span>Buscar</span></span></button>
                            <div id="search_autocomplete" class="search-autocomplete" style="display: none;"></div>
                            <script type="text/javascript">
                                //<![CDATA[
                                    var searchForm = new Varien.searchForm('search_mini_form', 'search', 'Search entire store here...');
                                    searchForm.initAutocomplete('http://www..com/catalogsearch/ajax/suggest/', 'search_autocomplete');
                                //]]>
                            </script>
                        </div>
                    </form>
				    <div class="clear"></div>
				</div>
			</div>
		</div>
		<div class="clear"></div>
	</div>
</div>

		<?php
	
			echo('</div>');
			
			
		?>
		

		
		<?php
	
			echo('<script type="text/javascript">');
			echo('jQuery(document).ready(function() {');
			echo('var $ = jQuery;');
			echo('var currentUrl = "";');
			echo('if ((navigator.userAgent.match(/iPad/i))) {');
			echo("$('li.level-top a').click(function(){");
			echo('if($(this).parent().hasClass("level1")) return true;');
			echo("if(currentUrl != $(this).attr('href'))");
			echo("{currentUrl = $(this).attr('href');return false;}});}});</script>");
			echo('<div class="main-container col1-layout">');
			echo('<div class="container">');
			echo('<div class="row">');
			echo('<div class="col-xs-12">');
			echo('<div class="main">');
			echo('<div class="col-main">');
			echo('<div class="padding-s">');
			echo('<div class="cart">');
			echo('<div class="page-title title-buttons">');
			echo('<h1>Lista de Compras</h1>');
			echo('<ul class="checkout-types">');
			echo('<li><p class="paypal-logo">');
			echo('<a data-action="checkout-form-submit" id="ec_shortcut_ec41009aee834d031e403ba7b86fe030" href="">');
			echo('<img src="http://www.motoraicer.com/micro/imagenes/checkout-logo-medium.png" alt="Pagos Bancolombia" title="Pagos con Bancolombia"></a>');
			echo('<span class="paypal-or"></span></p></li>');
			echo('<li class="bml-checkout-type">');
			echo('<p class="paypal-logo">');
			echo('<span class="bml_button">');
			echo('<a id="ec_shortcut_bml_b4c272909db47b7df62e82759ea61fcb" href="">');
			echo('<img src="http://www.motoraicer.com/micro/imagenes/ppcredit-logo-medium.png" alt="Chect" title="Cht"></a>');
			echo('<a href=""><img src="Shopping%20Cart_files/btn_bml_text.png"></a></span></p></li>');
			echo('<li><p class="paypal-logo"><span class="paypal-or">-OR-</span></p></li>');
			echo('<li>    <button type="button" title="Proceed to Checkout" class="button btn-proceed-checkout btn-checkout" onclick="">');
			echo('<span><span>Proceed to Checkout</span></span></button>');
			echo('</li></ul></div>');
			echo('<!--    <form action="" method="">-->');
			echo('<fieldset>');
														
			echo("<script type='text/javascript'>decorateTable('shopping-cart-table')</script>");
			echo('</fieldset><!-- </form>-->');
			
			echo('<div class="cart-collaterals">');
			echo('<div class="col2-set">');
			echo('<div class="col-1"></div>');
			echo('<div class="col-2">');
			
			echo('<form id="discount-coupon-form" action="" method="post">');
			echo('<div class="discount">');
			echo('<h2>Cupones de Descuento</h2>');
			echo('<div class="discount-form">');
			echo('<label for="coupon_code">Digite el codigo de su cupon.</label>');
			echo('<input name="remove" id="remove-coupone" value="0" type="hidden">');
			echo('<div class="input-box">');
			echo('<input class="input-text form-control" id="coupon_code" name="coupon_code">');
			echo('</div><div class="buttons-set">');
			echo('<button type="button" title="Apply Coupon" class="button" onclick="alert(\'Codigo no valido\')" value="Apply Coupon">');
			echo('<span><span>Aplicar cupon</span></span></button></div></div></div></form>');
			echo('<script type="text/javascript">');
			echo("var discountForm = new VarienForm('discount-coupon-form');");
			echo('discountForm.submit = function (isRemove) {');
			echo('if (isRemove) {');
			echo("$('coupon_code').removeClassName('required-entry');");
			echo("$('coupon_code').removeClassName('required-entry');");
			echo("$('remove-coupone').value = '1';");
			echo("} ");
			echo("return VarienForm.prototype.submit.bind(discountForm)();}</script></div></div>");
			echo('<div class="totals"><table id="shopping-cart-totals-table"><colgroup><col><col width="1"></colgroup>');
			echo('<tfoot><tr><td style="" class="a-right" colspan="1"><strong>Total</strong></td>');
			
			echo('<td style="" class="a-right"><strong><span class="price">');
			echo($subtotal);
			echo('</span></strong></td>');
			
			
			echo('</tr></tfoot><tbody><tr>');
			echo('<td style="" class="a-right" colspan="1">Subtotal    </td>');
			echo('<td style="" class="a-right"><span class="price">');
		    echo($subtotal);
			echo('</span>    </td>');
			echo('</tr></tbody></table>');
			echo('<div><div class="lscart" style="width:135px;float:right;margin:-20px 15px 10px;"></div></div>');
			echo('<ul class="checkout-types"><li><p class="paypal-logo">');
			echo('<a data-action="checkout-form-submit" id="ec">');
			echo('<img src="http://www.motoraicer.com/micro/imagenes/checkout-logo-medium.png" alt="Pagos en Bancolombia" title="Pagos en Bancolombia"></a>');
			echo('<span class="paypal-or"></span></p>');
			echo('</li><li class="bml-checkout-type"><p class="paypal-logo"><span class="bml_button">');
			echo('<a>');
			echo('<img src="http://www.motoraicer.com/micro/imagenes/ppcredit-logo-medium.png" alt="Pagos Efecty" title="Pagos Efecti"></a>');
			//echo('<a href=""><img src="Shopping%20Cart_files/btn_bml_text.png"></a>');
			echo('</span></p></li><li><p class="paypal-logo"><span class="paypal-or"></span></p>');
			
			echo('</li><li>    <button type="button" title="Proceed to Checkout" class="button btn-proceed-checkout btn-checkout" onclick="	window.location=\'../../checo.php\'">');
		
			
			echo('<span><span>Proceder al Pago</span></span></button>');
			echo('</li><li></li></ul></div></div></div>');
			echo('<script type="text/javascript">');
			echo("var google_tag_params = {ecomm_prodid: ['M200-LED','B100'], ecomm_pagetype: 'cart', ecomm_totalvalue: 299.96}");
			echo('</script></div></div></div></div></div></div></div>');
			echo('<div id="wishlist_edit_action_container"></div>');
			include "motopartes/foter.php";
			
			echo('<form class="infoPago3" action="../checo.php" method="post">');
			echo('<input class="total" type="hidden" name="total" value="">');
			echo('<input class="descripcion" type="hidden" name="descripcion" value="">');
			echo('</form>');
	
		echo('</div></div></body></html>');?>
		
		
		
		
		
		
		
		
		
		    
		    
	<?php
		}//Fin del metodo shoCarroVacio	
           
    }//Fin Clase
 
?>