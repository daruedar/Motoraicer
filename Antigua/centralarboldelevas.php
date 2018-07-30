<?php 
//Este archivo es una mejora de la pagina 
//cenjulio6.php, el objetivo es visualizar
// nombre del producto y motos compatibles
//Fue editado por Diego Rueda el 23/07/2017
//La version final fue finalizada 09/08/17 
?>

<section> <div class="main_content"> 
<!--<h1>. </h1><!--Es visible esta arriba--> 
<br class="clearfix"> 

<div class="product_pad product_pad_mini"style="margin-left:224px;margin-top:162px;" >
<?php
	for($i=0;$i<count($productos);$i++){
	echo("<div class='product_box' style='position: relative; padding-bottom: 44px; overflow: hidden; height: 270px;'>");//ALTURA ROJA
            echo("<div class=''>");
                echo("<div class='exterior' style='width:250px;height:210px;'>");//COLOR ROJO
                    echo("<div style='width:100%;text-align:center;background-color:#cccccc;margin-left:-10px'><h1 style='height:45px;width:98%;margin-left:-8px;margin-top:-10px;'>");
						echo($productos[$i]->getName());
					echo("</h1></div>");
					
					echo("<div style='width:100%;background-color:#cccccc;margin-top:-10px;margin-left:-10px'>");
							$auxiliar=$productos[$i]->getId();
							echo('<select id="department" name="department" class="form-control input-lg esparta" onchange="dep();" style="width:99%;background: transparent;">');
						    $shika->getMotosdeProducto($auxiliar);
				        	echo("</select></div>");
					
					echo("<div  class='izq' style='width:100%;height:60%;float:left;'>");
                       
						echo("<div class='product_img' style='width: 99%;float: left;'>");										 
                            echo("<a href='' title=''>");
                                echo("<img src='imagenes/arboldelevas/");
										echo ($productos[$i]->getImagen());
										echo("'width='120' height='120'>");
                            echo("</a><br>");
                        echo("</div>");//Fin del  div contenedor de la imagen
					
					
                        
						echo("<div style='position: absolute;bottom: 6px;left:11px;'>");					 
//	echo("<a href='amortiguadoresparamoto.php?producto=".$productos[$i]->getId()."'><span class='css_wk_img_button'>Comprar</span></a>");
   // echo("<a href='javascript:abrirVentana()'><span class='css_wk_img_button'>Comprar</span></a>");
    echo("<a href='javascript:abrirVentana(");
    echo $productos[$i]->getId();
    echo(")'><span class='css_wk_img_button'>Comprar</span></a>");
  
    
    
    
    
    
    
    
    
    


							echo('<a title=""><span class="css_img_button">$'.$productos[$i]->getPrice().'</span></a>');
							
						echo("</div>");
						
					echo("</div>");//fin del div izquierdo	
		
	
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
		   
		    
		 	 
	
		    
		    
		    
		
	</div>


	
	
	
	
<div style="clear: both;"></div> <div class="fl"> </div> </div> 
<br class="clearfix"> 
<br> </div> </section>
