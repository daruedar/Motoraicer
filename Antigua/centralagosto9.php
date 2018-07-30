<?php 
//Este archivo es una mejora de la pagina 
//cenjulio6.php, el objetivo es visualizar
// nombre del producto y motos compatibles
//Fue editado por Diego Rueda el 23/07/2017
//La version final fue finalizada 09/08/17 
?>

<section> <div class="main_content"> 
<h1>. </h1><!--Es visible esta arriba--> 
<br class="clearfix"> 

<div class="product_pad product_pad_mini"style="margin-left:232px;margin-top:120px;" >
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
							echo("<a href='julio6.php?producto=".$productos[$i]->getId()."'><span class='css_wk_img_button'>Comprar</span></a>");
							echo('<a title=""><span class="css_img_button">$'.$productos[$i]->getPrice().'</span></a>');
						echo("</div>");
						
					echo("</div>");//fin del div izquierdo	
		
	
				echo("</div>");//fin del div exterior
		
			echo("</div>");
		echo("</div>");	
	}//FIN DEL FOR
	
?>
<div style="clear: both;"></div> <div class="fl"> </div> </div> 
<br class="clearfix"> 
<br> </div> </section>
