<?php
session_start();
$sessionreal=session_id();
//include 'DriverBD.php';
include'MisClases/Compra.php';

$idpro=$_GET['motorepuesto'];
$idsess=$_GET['repuestodemoto'];
$listaCompras=array();

if (strcmp ($sessionreal , $idsess ) === 0){
  
    $alabase= new Compra($sessionreal);
    $alabase->addtoCar($idpro);
    //$alabase->showCar();
    
}


?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" style="height: 100%;" lang="en">
	<head>
			<link rel="stylesheet" type="text/css" href="css/micro.css" media="all">
			<link rel="stylesheet" type="text/css" href="css/diegostyle.css" media="all">
			<link rel="stylesheet" type="text/css" href="../theframework/bootstrap/css/bootstrap.css" media="all">
			
			
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
			<meta name="viewport" content="width=device-width,minimum-scale=1,maximum-scale=1">
			
			<script type="text/javascript" src="js/jquery-1.js"></script>
			<script type="text/javascript" src="js/scripts.js"></script>
			<script type="text/javascript" src="js/prototype.js"></script>
			<script type="text/javascript" src="../theframework/bootstrap/js/bootstrap.js"></script>
			<script type="text/javascript" src="js/jquery.js"></script>
	</head>
	<body class="ps-static  checkout-cart-index" style="position: relative; min-height: 100%; top: 0px;">
	
		<div class="wrapper ps-static en-lang-class">
			<noscript>
				<div class="global-site-notice noscript">
					<div class="notice-inner">
						<p>
							<strong>JavaScript seems to be disabled in your browser.</strong><br />
							You must have JavaScript enabled in your browser to utilize the functionality of this website.                </p>
					</div>
					</div>
			</noscript>
			
			<div class="page">
				<div class="shadow"></div>
				<div class="swipe-left"></div>
				<!--<div class="swipe" style="height: 659px; left: 0px;">
    				<div class="swipe-menu">
    			
    				<a href="" title="Home" class="home-link2" >
    				<span class=" glyphicon glyphicon-search" style="font-size:23px;margin-right:10px;" ></span>    
    				    mi Inicio
    				</a>
    					<a href="" title="Home" class="home-link2" >
    				<span class=" glyphicon glyphicon-search" style="font-size:23px;margin-right:10px;" ></span>    
    				    mi Inicio2
    				</a>
    					<a href="" title="Home" class="home-link2" >
    				<span class=" glyphicon glyphicon-search" style="font-size:23px;margin-right:10px;" ></span>    
    				    mi Inicio3
    				</a>
    				<a href="" title="Home" class="home-link2" >
    				<span class=" glyphicon glyphicon-search" style="font-size:23px;margin-right:10px;" ></span>    
    				    mi Inicio4
    				</a>
    				</div>
			    </div>-->
		
			    <div class="top-icon-menu"><!--1.2.4 Menu Celu-->
				    <div class="swipe-control active">
					    <span class=" glyphicon glyphicon-menu-hamburger " style="font-size:22px;"></span>
				    </div>
				    <div class="top-search"><span class=" glyphicon glyphicon-search" ></span></div>
				    <span class="clear"></span>
			    </div>
				
				
			
				
				<div class="header-container">
				 <?php include "motopartes/encabezado.php" ?>
    		    
    		    </div>   
				
			
    			  <?php include "motopartes/menumovil.php" ?>   
			
			
	
    			<script type="text/javascript">
    			// if(jQuery(document).width()  <=1024){
    			//     jQuery('.nav-container').addClass('nav-hide');
    			// }
    			jQuery(document).ready(function() {
    				var $ = jQuery;
    				var currentUrl = "";
    				if ((navigator.userAgent.match(/iPad/i))) {
    					$('li.level-top a').click(function(){
    						if($(this).parent().hasClass("level1")) return true;
    						if(currentUrl != $(this).attr('href'))
    						{
    							currentUrl = $(this).attr('href');
    							return false;
    						}
    					});
    				}
    			});
    		</script>
			
			<div class="main-container col1-layout">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="main">
								<div class="col-main">
									<div class="padding-s">
                                        <div class="cart">
										    <div class="page-title title-buttons">
									            <h1>Lista de Compras</h1>
									            <ul class="checkout-types">
            										<li><p class="paypal-logo">
                											<a data-action="checkout-form-submit" id="ec_shortcut_ec41009aee834d031e403ba7b86fe030" href="">
                											<img src="Shopping%20Cart_files/checkout-logo-medium.png" alt="Checkout with PayPal" title="Checkout with PayPal"></a>
                											<span class="paypal-or">-OR-</span>
            											</p>
            										</li>
            										<li class="bml-checkout-type">
            											<p class="paypal-logo">
            											<span class="bml_button">
            											<a id="ec_shortcut_bml_b4c272909db47b7df62e82759ea61fcb" href="">
            											<img src="Shopping%20Cart_files/ppcredit-logo-medium.png" alt="Checkout with PayPal Paypal Credit" title="Checkout with PayPal Paypal Credit"></a>
            											<a href=""><img src="Shopping%20Cart_files/btn_bml_text.png"></a>
            											</span>
            											</p>
            										</li>
										            <li><p class="paypal-logo"><span class="paypal-or">-OR-</span></p></li>
            										<li>    <button type="button" title="Proceed to Checkout" class="button btn-proceed-checkout btn-checkout" onclick="window.location='';">
            											<span><span>Proceed to Checkout</span></span></button>
            										</li>
									            </ul>
										    </div>
										    <form action="" method="post">
											    <input name="form_key" value="dpEf5orR8cW1jeRy" type="hidden">
											        <fieldset>
												        <table id="shopping-cart-table" class="data-table cart-table">
													    <colgroup>
													        <col width="1"><col><col width="1"><col width="1"><col width="1"><col width="1"><col width="1">
														</colgroup>
    													<thead>
    														<tr class="first last">
    														    <th rowspan="1">&nbsp;</th>
    														    <th rowspan="1"><span class="nobr">Nombre del Repuesto</span></th>
    														    <th rowspan="1"></th>
    															<th class="a-center" colspan="1"><span class="nobr">Precio unitario</span></th>
    														    <th rowspan="1" class="a-center">Can</th>
    														    <th class="a-center" colspan="1">Subtotal</th>
    														    <th rowspan="1" class="a-center">&nbsp;</th>
    														</tr>
    													</thead>
						                                <tfoot>
							                                <tr class="first last">
								                                    <td colspan="50" class="a-right last">
    																	<button type="button" title="Continue Shopping" class="button btn-continue" onclick="setLocation('')">
    																	    <span><span>Seguir Comprando</span></span>
    																	</button>
    																    <button type="submit" name="update_cart_action" value="update_qty" title="Update Shopping Cart" class="button btn-update">
    																        <span><span>Actualizar lista</span></span>
    																    </button>
    									                                <button type="submit" name="update_cart_action" value="empty_cart" title="Clear Shopping Cart" class="button btn-empty" id="empty_cart_button">
    									                                    <span><span>Borrar Compra</span></span>
    									                                </button>
							                                    	</td>
							                                </tr>
						                                </tfoot>
						                                <tbody>
						                                    <?php 
						                                        for($i=0;$i<count($listaCompras);$i++){
						                                            echo('<tr class="first odd">');
						                                            echo('<td><a href="" title="40x" class="product-image">');
						                                            echo('<img src="');
						                                            $listaCompras[$i]->getImagen();
						                                            echo('" alt="" height="75" width="75"></a></td>');
						                                            echo('<td><h2 class="product-name"> <a href="">');
						                                            $listaCompras[$i]->getNombre();
						                                            echo('</a></h2></td>');
						                                            echo('<td class="a-center"><a href="" title="Edit item parameters">Editar</a></td>');
						                                            echo('<td class="a-right"><span class="cart-price"><span class="price">');
						                                            $listaCompras[$i]->getPrecio();
						                                            echo('</span></span></td>');
						                                            echo('<td class="a-center">');
						                                            echo('<input name="" data-cart-item-id="" value="1" size="4" title="Qty" class="input-text qty form-control" maxlength="12">');
						                                            echo('</td>');
						                                            echo('<td class="a-right"><span class="cart-price"><span class="price">');
						                                            $listaCompras[$i]->getSubtotal();
						                                            echo('</span></span></td>');
						                                            echo('<td class="a-center last"><a href="" title="Remove item" class="btn-remove btn-remove2">Borrar</a></td>');
						                                            echo('</tr>');
						                                        }
						                                    ?>
						                                </tbody>
					                                </table>
					                                <script type="text/javascript">decorateTable('shopping-cart-table')</script>
				                                </fieldset>
			                                </form>
			                                <div class="cart-collaterals">
				                                <div class="col2-set">
					                                <div class="col-1"></div>
					                                <div class="col-2">
														<form id="discount-coupon-form" action="http://www.amscope.com/checkout/cart/couponPost/" method="post">
			                                                <div class="discount">
				                                                <h2>Discount Codes</h2>
				                                                <div class="discount-form">
					                                                <label for="coupon_code">Enter your coupon code if you have one.</label>
					                                                <input name="remove" id="remove-coupone" value="0" type="hidden">
					                                                <div class="input-box">
					                                                	<input class="input-text form-control" id="coupon_code" name="coupon_code">
					                                                </div>
					                                                <div class="buttons-set">
						                                                <button type="button" title="Apply Coupon" class="button" onclick="discountForm.submit(false)" value="Apply Coupon">
						                                                    <span><span>Aplicar cupon</span></span>
						                                                </button>
									                                </div>
				                                                </div>
			                                                </div>
		                                                </form>
                                                		<script type="text/javascript">
                                                		//<![CDATA[
                                                		var discountForm = new VarienForm('discount-coupon-form');
                                                		discountForm.submit = function (isRemove) {
                                                			if (isRemove) {
                                                				$('coupon_code').removeClassName('required-entry');
                                                				$('remove-coupone').value = "1";
                                                			} else {
                                                				$('coupon_code').addClassName('required-entry');
                                                				$('remove-coupone').value = "0";
                                                			}
                                                			return VarienForm.prototype.submit.bind(discountForm)();
                                                		}
                                                		//]]>
                                                		</script>
	                                                </div>
				                                </div>
				                                <div class="totals">
						                            <table id="shopping-cart-totals-table">
    				                                    <colgroup><col><col width="1"></colgroup>
    				                                    <tfoot>
    					                                    <tr>
    			                                                <td style="" class="a-right" colspan="1"><strong>Grand Total</strong></td>
    			                                                <td style="" class="a-right"><strong><span class="price">$299.96</span></strong></td>
    		                                                </tr>
    				                                    </tfoot>
    				                                    <tbody>
    					                                    <tr>
    					                                        <td style="" class="a-right" colspan="1">Subtotal    </td>
    			                                                <td style="" class="a-right"><span class="price">$299.96</span>    </td>
    		                                                </tr>
    				                                    </tbody>
			                                        </table>
			                                        <div><div class="lscart" style="width:135px;float:right;margin:-20px 15px 10px;"></div></div>
								                    <ul class="checkout-types">
    													<li><p class="paypal-logo">
    		                                                <a data-action="checkout-form-submit" id="ec_shortcut_e0d65aad06805ad0086c201f5cc8c62f" href="">
    		                                                <img src="Shopping%20Cart_files/checkout-logo-medium.png" alt="Checkout with PayPal" title="Checkout with PayPal"></a>
    			                                            <span class="paypal-or">-OR-</span></p>
    		                                            </li>
                                                		<li class="bml-checkout-type">
                                                			<p class="paypal-logo">
                                                			<span class="bml_button">
                                                				<a id="ec_shortcut_bml_9e8094fa9c6485e2f12aabf6a4c17df8" href="">
                                                				    <img src="Shopping%20Cart_files/ppcredit-logo-medium.png" alt="Checkout with PayPal Paypal Credit" title="Checkout with PayPal Paypal Credit"></a>
                                                				<a href=""><img src="Shopping%20Cart_files/btn_bml_text.png"></a>
                                                			</span>
                                                			</p>
                                                		</li>
                                                		<li>
                                                			<p class="paypal-logo">
                                                			<span class="paypal-or">-OR-</span>
                                                			</p>
                                                		</li>
														<li>    <button type="button" title="Proceed to Checkout" class="button btn-proceed-checkout btn-checkout" onclick="window.location='https://www.';">
														    <span><span>Proceed to Checkout</span></span></button>
		                                                </li>
			                                            <li></li>
												    </ul>
							                    </div>
		                                	</div>
		                                </div>
                                		<script type="text/javascript">var google_tag_params = {ecomm_prodid: ['M200-LED','B100'], ecomm_pagetype: 'cart', ecomm_totalvalue: 299.96}</script>                                    
                                	</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="wishlist_edit_action_container"></div>
			
			 <?php include "motopartes/foter.php" ?>
		</div>
	</div>
	</body>
</html>
