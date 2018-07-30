<?php
/*echo("La cantidad de productos para la sessin actual es<br>");
 echo(count($shika->listacompras));*/
 

?>
<div style="margin-left:220px;margin-top:10px;"class="page-template-default page page-id-141 woocommerce-cart woocommerce-page res1170 kl-follow-menu kl-skin--light zn-wc-pages-classic" itemscope="itemscope" itemtype="https://schema.org/WebPage">
		<div id="page_wrapper" style="height: auto;">
			<div class="zn_pb_wrapper clearfix zn_sortable_content" data-droplevel="0" >		
				<section class="zn_section eluidf94c5c3b     section-sidemargins    section--no " id="eluidf94c5c3b">	
					<div class="zn_section_size container zn-section-height--auto zn-section-content_algn--top ">
						<div class="row zn_columns_container zn_content " data-droplevel="1">	
							<div class="eluid7094e272      col-md-9 col-sm-9   znColumnElement" id="eluid7094e272">
								<div class="znColumnElement-innerWrapper znColumnElement-innerWrapper--valign-top znColumnElement-innerWrapper--halign-left ">
									<div class="znColumnElement-innerContent zn_sortable_content zn_content" data-droplevel="2">
										<div class="kl-title-block clearfix tbk--text- tbk--left text-left tbk-symbol--line  tbk-icon-pos--after-title eluid344b264b ">
											<h2 class="tbk__title" itemprop="headline">Su lista de compras</h2>
												<span class="tbk__symbol "><span></span></span>
												<!--<h4 class="tbk__subtitle" itemprop="alternativeHeadline">Su lista de Repuestos</h4>-->
										</div>
										<div class="zn_text_box eluide8b333e6  zn_text_box-light element-scheme--light">
											<p></p>
											<div class="woocommerce">
												<div class="zn-cartpage-classic">
													<form>
														<table class="shop_table shop_table_responsive cart" cellspacing="0" border="1px;" id="repuestosdeMoto">
															<thead>
																<tr>
																	<th class="product-remove">&nbsp;</th>
																	<th class="product-thumbnail">&nbsp;</th>
																	<th class="product-name">Producto</th>
																	<th class="product-price">Precio</th>
																	<th class="product-quantity">Cantidad</th>
																	<th class="product-subtotal">Total</th>
																</tr>
															</thead>
															<tbody> 
															
																<script type="text/javascript">
		
																
		for(var i=0;i<nombres.length;i++){
				var cadena='<tr class="cart_item">'+'<td class="product-remove">'+'<a id="'+idcarros[i]+'"class="remove" onclick="turquia('+i+',this.id)" >×</a></td>'+
				'<td class="product-thumbnail">'+'<a><img src=""class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image"  width="18" height="18"></a></td>'+
				'<td class="product-name" data-title="Producto"><a>'+nombres[i]+'</a></td>'+
				'<td class="product-price" data-title="Precio"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>'+precios[i]+'</span>	</td>'+
                '<td class="product-quantity" data-title="Cantidad"><div class="quantity"><input  step="1" min="1" max="100" name="'+i+'" value="'+cantidades[i]+'" title="Cantidad" class="input-text qty text" size="4" pattern="[0-9]*" inputmode="numeric" type="number" onchange="espia('+idcarros[i]+',this.value)" ></div></td>'+
                '<td class="product-subtotal" data-title="Total">'+'<span class="woocommerce-Price-amount amount portugal">'+'<span class="woocommerce-Price-currencySymbol">$</span>'+totales[i]+
				'</span><small class="tax_label">  (  impuesto incluido)</small> </td></tr>';
				'<form class="formula" action="carros.php" method="post" enctype="text/plain"><input type="hidden" name="borrable" value="'+idcarros[i]+'"></form>';
				document.write(cadena);
				
			}
	</script>
															
															
															
															

                                                                                                                                
																<tr>
																	<td colspan="6" class="actions">
																		<div class="coupon">
																			<label for="coupon_code">Cupón:</label> 
																			<input name="coupon_code" class="input-text" id="coupon_code" placeholder="Código de cupón" type="text"> 
																			<input class="button" name="apply_coupon" value="Aplicar cupón" type="submit">
																		</div>
																		<input class="button" name="update_cart" value="Seguir Comprando" type="submit" onclick="locatioin.href='julio6.php'">
																		<input id="_wpnonce" name="_wpnonce" value="61a3baee97" type="hidden">
																		<input name="_wp_http_referer" value="/carrito/" type="hidden">			
																	</td>
																</tr>
															</tbody>
														</table>
													</form>

													
													<div class="cart-collaterals">
														<div class="cart_totals ">
															<h2>Total</h2>
															<table class="shop_table shop_table_responsive" cellspacing="0" border="1px">
																<tbody>
																	<tr class="cart-subtotal">
																		<th>Subtotal</th>
																		<td data-title="Subtotal">
																			<span class="woocommerce-Price-amount amount biela">
																				<span class="woocommerce-Price-currencySymbol">$</span>
																				<script type="text/javascript">document.write(getSubtotal());</script>
																			</span> 
																			<small class="tax_label"><br>(impuesto incluido)</small>
																		</td>
																	</tr>
																	<tr class="fee">
																		<th>Seguro</th>
																			<td data-title="Seguro">
																				<span class="woocommerce-Price-amount amount">
																				<span class="woocommerce-Price-currencySymbol">$</span>0
																				<small class="tax_label">(impuesto incluido)</small></span>
																			</td>
																	</tr>
																	<tr class="order-total">
																		<th>Total</th>
																		<td data-title="Total"><strong>
																			<span class="woocommerce-Price-amount amount">
																			<span class="woocommerce-Price-currencySymbol">$</span>
										<script type="text/javascript">document.write(getSubtotal());</script>									</span></strong>
										<!--									<small class="includes_tax">(incluye <span class="woocommerce-Price-amount amount">
																			<span class="woocommerce-Price-currencySymbol">$</span>12.426</span> Impuesto)</small>-->
																		</td>
																	</tr>
																</tbody>
															</table>
															<div class="wc-proceed-to-checkout">
																<a  class="checkout-button button alt wc-forward" onclick="comprar();">
																	Finalizar compra</a>
															</div>
														</div>
													</div>
												</div>
											</div>
											
										</div>				
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>	
		</div><!-- end page_wrapper -->
		</div>
		
		<form class="diego" action="cielo.php" method="post">
			<input type="hidden" name="carro" value=5987978>
			<input type="hidden" name="idcarro" value=0>
			<input type="hidden" name="cantidad" value=6>
			<input type="hidden" name="accion" value=6><!--1 borrar 2 actualizar-->
		</form>
		
		<form class="infoPago" action="registro2.php" method="post">
			<input class="total" type="hidden" name="total" value="">
			<input class="descripcion" type="hidden" name="descripcion" value="">
		</form>