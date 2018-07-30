//Este archivo es una mejora de la pagina 
//cenjulio6.php, el objetivo es visualizar
// nombre del producto y motos compatibles
//Fue editado por Diego Rueda el 23/07/2017
//La version final fue finalizada 09/08/17 
?>

<div style="margin-top:150px;">
    
    <div style="float:left;width:50%">
        
    <section style="width:480px;"> 
        <div class="main_content"style="margin-left:0px;width:500px;height:730px;margin-top:10px;z-index:1;"> 
        <br class="clearfix"> 
        <div class="product_pad product_pad_mini"style="width:100%;margin-left:4px;margin-top:-15px;" >
<?php
	//for($i=0;$i<count($productos);$i++){
	for($i=0;$i<4;$i++){
	echo("<div class='product_box' style='position: relative; padding-bottom: 44px; overflow: hidden; height: 200px;'>");//ALTURA ROJA
            echo("<div class=''>");
                echo("<div class='product_img' style='width: 49%;float: left; '>");
            	    echo("<a href='' title=''>");
	            echo("<img src='imagenes/todas/");
	           
	            //echo ($shika->productosdeSeccion[$i]->getImagen());
	            echo ($productos[$i]->getImagen());
	            echo("'  width='120' height='120'>");
	            echo("</a></div>");
	            echo("<div class='' style='float: left;width: 49%;margin-left: 2%;'>");
	            
	            echo("<div class='product_stock_img'><br>Disponible:");
	                   echo("<img class='product_stock_img' src='imagenes/todas/icon_stock_1.png' width='37' height='10'>"); 
	            echo("</div>"); 
	          
	            echo("<div class='price'>"); 
	                 echo("<span ><meta itemprop='highPrice' content='1.46'>");					 
	                echo("<meta itemprop='lowPrice' content='");
	                echo("'>");
                	echo("<meta itemprop='priceCurrency' content='EUR'>");
	                echo("<meta itemprop='offerCount' content='10'>");
	                echo("<span class='product_info_old'>Desde <span>");
	                
	                echo ($productos[$i]->getPrice()+12500);
	                echo("</span></span>");	
	                echo("<br><span itemprop='Price' class='product_info_real_price'> ");
	                echo ($productos[$i]->getPrice());
	            echo("</span></span></div> ");
	               
	                echo("<div class='product_shipping_link'>19 % Iva Incluido.");	
	                echo("<a class='shipping cboxElement' href=''><br>$0 Costos de Envio</a></div>");
	               	
	                //echo("<div style='background-color:blue;width:100%;'>7</div>");
	                
	               
	                	
	                //echo("</div> <div style='clear: both;'></div> </div>");
	                
	                echo("<div class='product_name' style=';text-align:center;'>");
	                echo("<h3 class='plisting' >");
                	echo("<a>");echo  $productos[$i]->getName();
	                echo("</a> </h3></div>");
	                
	                	echo("<div style='position: absolute;bottom: 6px;left:24px;'>");					 
	echo("<a href=''><span class='css_wk_img_button'>Ver todos</span></a>");					
	//<!--<a title="" href=""><span class="css_img_button">Details</span></a> -->
	echo("</div>");
	                
	                
	              
	
				echo("</div>");//fin del div exterior
		
			echo("</div>");
		echo("</div>");	
	}//FIN DEL FOR
	
	
?>

<div id="capaVentana" style="visibility:hidden;
		position:absolute;width:100%;height:100%;
		padding:0px;
		left:0px;
		top:0%;
		z-index:10;
		background:red;
		border:1px solid #000;
		 display: flex;
        justify-content: center;
        align-items: center;
		">
		
	<!--	<form name="formulario">
		    <input id="cancelarSolicitud" type="buton" value="Ver lista de compras" class="inputBtn" onclick="notificar(1)">
		    <input id="enviarSolicitud"   type="buton" value="Seguir comprando"    class="inputBtn" onclick="notificar(2)">
		</form>-->
		<div style="width:300px;height:250px;background-color:blue;margin-left: auto;margin-right: auto; ">
		    <i class style="content:'\ea0b'">::before</i>
		    <h2>Agregado</h2>
		    
		    </div>
		   
		    
		 	 
		 <!--<div class=" modal-active overlay-active">
	<div  		class="fb-overlay" 	id="fb-overlay" style="background-color:purple;">
	<div  		class="fb-overlay__content">
	<div  		class="fb-overlay__inject" style="position: relative; top: 0px;"><div>
	<div  		class="fb-added-to-basket" 													id="fb-modal-add" >
	<div  		class="fb-added-to-basket__header">
	<h2   		class="fb-added-to-basket__title">
	<i 			class="icon-check"></i> Agregado</h2><div>
	<button 	class="js-close-overlay fb-overlay__close">
	<span 		class="icon-close"></span> 
	<span 		class="visuallyhidden">Close the overlay</span></button></div></div>
	<div 		class="fb-added-to-basket__body">
	<div 		class="fb-added-to-basket__product">
	<div 		class="fb-added-to-basket__image">
	<span 		class="fb-added-to-basket__quantity">1</span><img src="agragado_files/3103559.jpg" alt=""></div>
	<div 		class="fb-added-to-basket__description">
	<h3 		class="fb-added-to-basket__product-brand">Jeep</h3>
	<h4 		class="fb-added-to-basket__product-title">Bicicleta 2 baltoro Rin 29 pulgadas
	<span 		class="fb-added-to-basket__product-title-extras">Gris/Rojo</span></h4>
	<div  		class="fb-pod__prices-wrapper">
	<p 			class="fb-product-sets__product-price">$799.900(Internet)</p>
	<p 			class="fb-product-sets__internet-price">$1.499.990(Precio normal)</p></div></div></div></div>
	<div 		class="fb-added-to-basket__footer">
	<div 		class="fb-added-to-basket__basket">
	<!-<h3 		class="fb-added-to-basket__basket-title">Sub-total <span>(2 productos)</span></h3>

	<div 		class="fb-product-item__prices">
	<div  		class="fb-pod__prices-wrapper">
	<p 			class="fb-product-sets__product-price">$969.800(Internet)</p></div></div></div>
    <div 		class="fb-added-to-basket__ctas">
    <a  		class="fb-btn fb-btn-primary fb-added-to-basket__cta fb-added-to-basket__cta--basket">Ver Bolsa de Compras</a></div>
    <div 		class="fb-added-to-basket__continue">o 
	<a  		class="js-close-overlay js-fb-inspector__close" href="#">Seguir comprando</a></div></div></div></div></div></div></div>
	</div>-->
	
	   
		    
		    
		    
		    
		    
		    
		
	</div>


	
	
	
	
<div style="clear: both;"></div> <div class="fl"> </div> </div> 
<br class="clearfix"> 
<br> </div> </section>
  
    </div>
<!--**********************************************************-->
     <div style="float:right;width:50%">
        
    <section style="width:480px;"> 
        <div class="main_content"style="margin-left:0px;width:500px;height:730px;margin-top:10px;z-index:1;"> 
        <br class="clearfix"> 
        <div class="product_pad product_pad_mini"style="width:100%;margin-left:4px;margin-top:-15px;" >
<?php
	//for($i=0;$i<count($productos);$i++){
	for($i=0;$i<4;$i++){    
	echo("<div class='product_box' style='position: relative; padding-bottom: 44px; overflow: hidden; height: 200px;'>");//ALTURA ROJA
            echo("<div class=''>");
                echo("<div class='product_img' style='width: 49%;float: left; '>");
            	    echo("<a href='' title=''>");
	            echo("<img src='imagenes/todas/");
	           
	            //echo ($shika->productosdeSeccion[$i]->getImagen());
	            echo ($productos[$i]->getImagen());
	            echo("'  width='120' height='120'>");
	            echo("</a></div>");
	            echo("<div class='' style='float: left;width: 49%;margin-left: 2%;'>");
	            
	            echo("<div class='product_stock_img'><br>Disponible:");
	                   echo("<img class='product_stock_img' src='imagenes/todas/icon_stock_1.png' width='37' height='10'>"); 
	            echo("</div>"); 
	          
	            echo("<div class='price'>"); 
	                 echo("<span ><meta itemprop='highPrice' content='1.46'>");					 
	                echo("<meta itemprop='lowPrice' content='");
	                echo("'>");
                	echo("<meta itemprop='priceCurrency' content='EUR'>");
	                echo("<meta itemprop='offerCount' content='10'>");
	                echo("<span class='product_info_old'>Desde <span>");
	                
	                echo ($productos[$i]->getPrice()+12500);
	                echo("</span></span>");	
	                echo("<br><span itemprop='Price' class='product_info_real_price'> ");
	                echo ($productos[$i]->getPrice());
	            echo("</span></span></div> ");
	               
	                echo("<div class='product_shipping_link'>19 % Iva Incluido.");	
	                echo("<a class='shipping cboxElement' href=''><br>$0 Costos de Envio</a></div>");
	               	
	                //echo("<div style='background-color:blue;width:100%;'>7</div>");
	                
	               
	                	
	                //echo("</div> <div style='clear: both;'></div> </div>");
	                
	                echo("<div class='product_name' style=';text-align:center;'>");
	                echo("<h3 class='plisting' >");
                	echo("<a>");echo  $productos[$i]->getName();
	                echo("</a> </h3></div>");
	                
	                	echo("<div style='position: absolute;bottom: 6px;left:24px;'>");					 
	echo("<a href=''><span class='css_wk_img_button'>Ver todos</span></a>");					
	//<!--<a title="" href=""><span class="css_img_button">Details</span></a> -->
	echo("</div>");
	                
	                
	              
	
				echo("</div>");//fin del div exterior
		
			echo("</div>");
		echo("</div>");	
	}//FIN DEL FOR
	
	
?>

<div id="capaVentana" style="visibility:hidden;
		position:absolute;width:100%;height:100%;
		padding:0px;
		left:0px;
		top:0%;
		z-index:10;
		background:red;
		border:1px solid #000;
		 display: flex;
        justify-content: center;
        align-items: center;
		">
		
	<!--	<form name="formulario">
		    <input id="cancelarSolicitud" type="buton" value="Ver lista de compras" class="inputBtn" onclick="notificar(1)">
		    <input id="enviarSolicitud"   type="buton" value="Seguir comprando"    class="inputBtn" onclick="notificar(2)">
		</form>-->
		<div style="width:300px;height:250px;background-color:blue;margin-left: auto;margin-right: auto; ">
		    <i class style="content:'\ea0b'">::before</i>
		    <h2>Agregado</h2>
		    
		    </div>
		   
		    
		 	 
		 <!--<div class=" modal-active overlay-active">
	<div  		class="fb-overlay" 	id="fb-overlay" style="background-color:purple;">
	<div  		class="fb-overlay__content">
	<div  		class="fb-overlay__inject" style="position: relative; top: 0px;"><div>
	<div  		class="fb-added-to-basket" 													id="fb-modal-add" >
	<div  		class="fb-added-to-basket__header">
	<h2   		class="fb-added-to-basket__title">
	<i 			class="icon-check"></i> Agregado</h2><div>
	<button 	class="js-close-overlay fb-overlay__close">
	<span 		class="icon-close"></span> 
	<span 		class="visuallyhidden">Close the overlay</span></button></div></div>
	<div 		class="fb-added-to-basket__body">
	<div 		class="fb-added-to-basket__product">
	<div 		class="fb-added-to-basket__image">
	<span 		class="fb-added-to-basket__quantity">1</span><img src="agragado_files/3103559.jpg" alt=""></div>
	<div 		class="fb-added-to-basket__description">
	<h3 		class="fb-added-to-basket__product-brand">Jeep</h3>
	<h4 		class="fb-added-to-basket__product-title">Bicicleta 2 baltoro Rin 29 pulgadas
	<span 		class="fb-added-to-basket__product-title-extras">Gris/Rojo</span></h4>
	<div  		class="fb-pod__prices-wrapper">
	<p 			class="fb-product-sets__product-price">$799.900(Internet)</p>
	<p 			class="fb-product-sets__internet-price">$1.499.990(Precio normal)</p></div></div></div></div>
	<div 		class="fb-added-to-basket__footer">
	<div 		class="fb-added-to-basket__basket">
	<!-<h3 		class="fb-added-to-basket__basket-title">Sub-total <span>(2 productos)</span></h3>

	<div 		class="fb-product-item__prices">
	<div  		class="fb-pod__prices-wrapper">
	<p 			class="fb-product-sets__product-price">$969.800(Internet)</p></div></div></div>
    <div 		class="fb-added-to-basket__ctas">
    <a  		class="fb-btn fb-btn-primary fb-added-to-basket__cta fb-added-to-basket__cta--basket">Ver Bolsa de Compras</a></div>
    <div 		class="fb-added-to-basket__continue">o 
	<a  		class="js-close-overlay js-fb-inspector__close" href="#">Seguir comprando</a></div></div></div></div></div></div></div>
	</div>-->
	
	   
		    
		    
		    
		    
		    
		    
		
	</div>


	
	
	
	
<div style="clear: both;"></div> <div class="fl"> </div> </div> 
<br class="clearfix"> 
<br> </div> </section>
  
    </div>
</div>

