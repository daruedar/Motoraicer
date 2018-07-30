			<?php 
				//include'Shikamaru.php';
				$tusteno2= $shika->getListamotos();
			?>
			<div style="margin-top:170px;position:fixed;">
			<aside id="boxen" style=" height:1200px;"> 
				<div class="box"> 
					<h4 class="name_">Buscador de Repuestos</h4> 
					<div class="boxcontent"> 
						<div class="notranslate"> 
							<div style="position: relative" id="modelbox"> 
								<!--<p><label>Nombre del Repuesto</label></p> -->
								
							<!--	<input placeholder="Ej: Amortiguadores" class="search_model_input" type="text"> -->
								
							<!--	<input class="css_img_button search_model_button" value="Buscar" title="Go" type="button"> -->
								
								<p><label>Seleccione su Moto</label></p> 
								<select id="BTS_Marke" name="BTS_Marke" onChange="setRepuestosdeMoto()"> 
									<option selected="selected" value="">Modelo: </option> 
									<?php 
					for ($i=0;$i<count($shika->getListamotos());$i++)
						{	echo"<option class='mans bold'  value='";
							echo $tusteno2[$i]->getid();echo"'>";
							echo $tusteno2[$i]->getnombre();
							echo"</option>";
						}
									?>
								</select>
								<img id="waiting" src="Motorrad%20Shop%20-%20Original%20Parts_files/wait_green.gif" 
								style="display: none; position: absolute; top: 30; left: 70;"> 
							</div> 
						</div> 
					</div> 
				</div>					
				<div class="box box_categories_0"> 
					<h4 class="name_categories_0">Categorias</h4> 
					<div class="boxcontent boxcontent_categories_0"> 
							<ul id="main_nav"> 
								<li class="main_level_1">
                                     <a href="arboldelevasparamoto.php" title="Arbol de Levas para moto">
							        	Arbol de Levas</a>
							    </li> 
							    
								<li class="main_level_1">
									<a href="amortiguadoresparamoto.php" title="Amortiguadores para moto">
								Amortiguadores</a>
								</li>
								
								<li class="main_level_1"><a href="bandasdefrenoparamoto.php" title="Bandas de Freno">
								Bandas para Freno</a></li> 
							
								<li class="main_level_1"><a href="pastillasdefrenoparamoto.php" title="Pastillas de Freno para moto">
								Pastillas de Freno</a></li>
									
								<li class="main_level_1"><a href="baterias.php" title="Baterias">
								Baterias</a></li> 
								
								
								
									
								<li class="main_level_1"><a href="bobinas.php" title="Baterias">
								Bobinas</a></li> 
								
								<li class="main_level_1"><a href="kitdearrastreparamoto.php" title="Kit de arrastre para moto">
								Kit de Arrastre</a></li>
								<li class="main_level_1"><a href="kitdebiela.php" title="Kit de biela para moto">
								Kit de Biela</a></li>
								
								<li class="main_level_1"><a href="bujias.php" title="bujias para moto">
								Bujias</a></li>
								
							</ul>
					</div> 
				</div> 
			</aside>
			</div>
			<form class="busquedapormotocicleta" action="repuestosparamoto.php" method="post">
			    <input class="total" type="hidden" name="idmoto" value="0">
		    </form>
			
			
			
			<script type="text/javascript">
			    function setRepuestosdeMoto(){
			        var valor = $("#BTS_Marke").val();
			         idmoto =$(".busquedapormotocicleta input");
			         idmoto[0].value=valor;
			         $(".busquedapormotocicleta").submit();
			        
			    }
			</script>