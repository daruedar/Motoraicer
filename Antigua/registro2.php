<?php 
//echo ($_POST['total']);
/*if (isset($_POST['total'])) 
	{	
		
		echo($_POST['descripcion']);
		echo("<br>");
		echo($_POST['total']);
	}*/

?>

<html>
<head><?php include 'encabezado.php';?>
<?php include 'hidrogeno.php';?>
	<script type="text/javascript">
		function dep(){var t=document.getElementById('department');}
		
		function hacercompra(){
			
			//var descri = "<?php echo ($_POST['descripcion']); ?>" ;
			//var total="<?php echo ($_POST['total']); ?>" ;
			
			var descri="linea24 registro2";
			var total="320000";
			
			var nameCliente=$(".nombreCliente").val();
			var apelliCli=$(".apelli").val();
			var email=$(".corre").val();
			var addres=$(".address").val();
			var city=$(".city").val()+"-"+$(".esparta option:selected").text();
			var tel=$(".phone").val();
			var cedula=$(".cedu").val();
			//alert(nameCliente);
			
			$(".descripcion").val(descri);
			$(".total").val(total);
			$(".comprador").val(nameCliente);
			$(".apellido").val(apelliCli);
			$(".correo").val(email);
			$(".direccion").val(addres);
			$(".ciudad").val(city);
			$(".telefono").val(tel);
				alert("la order se ha ejecutado");	
			//$(".infoPago2").submit();
 
		}
		
		
	</script>
</head>
<body>
	<div id="bodywrapper" style="margin-top:-5px;width:970px;margin: 0 auto;height:400px;"> 
	<?php include 'header2.php';?>
	<div id="sectionpad" style="height:630px;"> 
	<!--		<div class="navtrail" style="background-color:red;">
				<span itemscope="" itemtype="">
				<a href="" itemprop="url">
				<span itemprop="title">Main page</span></a></span>
			</div>-->
			<?php //include 'izquierda.php';?>
			<?php include 'centralreg.php';?>
			<?php //include 'derecha.php';?>
	</div>	
	
	</div>
	<?php //include 'desplegable.php';?>
	
	
	<script>
$( "select.esparta" )
  .change(
			function () 
			{
				//alert($("select.esparta").val());
				//$( "select.grecia" ).innerHTML=" <option>Cookie</option> <option>Cookie</option> <option>Cookie</option>";
				
				if($("select.esparta").val() ==''){$( "#demo" ).prop( "disabled", true );}
				
				if($("select.esparta").val() =='AN')
					{
						$( "#demo" ).prop( "disabled", false );
						document.getElementById("demo").innerHTML = '<option value="" style="display: block;">Ciudad:</option><option value="MEDELLIN-ANTIOQUIA" data-departmentkey="AN" style="display: block;">MEDELLIN</option><option value="ABEJORRAL-ANTIOQUIA" data-departmentkey="AN" style="display: block;">ABEJORRAL</option><option value="AMAGA-ANTIOQUIA" data-departmentkey="AN" style="display: block;">AMAGA</option><option value="ANDES-ANTIOQUIA" data-departmentkey="AN" style="display: block;">ANDES</option><option value="APARTADO-ANTIOQUIA" data-departmentkey="AN" style="display: block;">APARTADO</option><option value="ARGELIA-ANTIOQUIA" data-departmentkey="AN" style="display: block;">ARGELIA</option><option value="ARMENIAMANTEQUILLA-ANTIOQUIA" data-departmentkey="AN" style="display: block;">ARMENIAMANTEQUILLA</option><option value="BARBOSA-ANTIOQUIA" data-departmentkey="AN" style="display: block;">BARBOSA</option><option value="BELLO-ANTIOQUIA" data-departmentkey="AN" style="display: block;">BELLO</option><option value="BELMIRA-ANTIOQUIA" data-departmentkey="AN" style="display: block;">BELMIRA</option><option value="BETANIA-ANTIOQUIA" data-departmentkey="AN" style="display: block;">BETANIA</option><option value="BETULIA-ANTIOQUIA" data-departmentkey="AN" style="display: block;">BETULIA</option><option value="BOLOMBOLO-ANTIOQUIA" data-departmentkey="AN" style="display: block;">BOLOMBOLO</option><option value="CALDAS-ANTIOQUIA" data-departmentkey="AN" style="display: block;">CALDAS</option><option value="CANASGORDAS-ANTIOQUIA" data-departmentkey="AN" style="display: block;">CAÑASGORDAS</option><option value="CARAMANTA-ANTIOQUIA" data-departmentkey="AN" style="display: block;">CARAMANTA</option><option value="CAREPA-ANTIOQUIA" data-departmentkey="AN" style="display: block;">CAREPA</option><option value="CARMEN DE VIBORAL-ANTIOQUIA" data-departmentkey="AN" style="display: block;">CARMEN VIB.</option><option value="CAROLINA-ANTIOQUIA" data-departmentkey="AN" style="display: block;">CAROLINA</option><option value="CAUCASIA-ANTIOQUIA" data-departmentkey="AN" style="display: block;">CAUCASIA</option><option value="CONCORDIA-ANTIOQUIA" data-departmentkey="AN" style="display: block;">CONCORDIA</option><option value="COPACABANA-ANTIOQUIA" data-departmentkey="AN" style="display: block;">COPACABANA</option><option value="EBEJICO-ANTIOQUIA" data-departmentkey="AN" style="display: block;">EBEJICO</option><option value="EL DOCE-ANTIOQUIA" data-departmentkey="AN" style="display: block;">EL DOCE</option><option value="EL PENOL-ANTIOQUIA" data-departmentkey="AN" style="display: block;">EL PEÑOL</option><option value="EL RETIRO-ANTIOQUIA" data-departmentkey="AN" style="display: block;">EL RETIRO</option><option value="EL TIGRE-ANTIOQUIA" data-departmentkey="AN" style="display: block;">EL TIGRE</option><option value="ENTRERIOS-ANTIOQUIA" data-departmentkey="AN" style="display: block;">ENTRERIOS</option><option value="ENVIGADO-ANTIOQUIA" data-departmentkey="AN" style="display: block;">ENVIGADO</option><option value="GIRARDOTA-ANTIOQUIA" data-departmentkey="AN" style="display: block;">GIRARDOTA</option><option value="GOMEZ PLATA-ANTIOQUIA" data-departmentkey="AN" style="display: block;">GOMEZ PLATA</option><option value="GRANADA-ANTIOQUIA" data-departmentkey="AN" style="display: block;">GRANADA</option><option value="GUADALUPE-ANTIOQUIA" data-departmentkey="AN" style="display: block;">GUADALUPE</option><option value="GUARNE-ANTIOQUIA" data-departmentkey="AN" style="display: block;">GUARNE</option><option value="GUATAPE-ANTIOQUIA" data-departmentkey="AN" style="display: block;">GUATAPE</option><option value="HISPANIA-ANTIOQUIA" data-departmentkey="AN" style="display: block;">HISPANIA</option><option value="ITAGUI-ANTIOQUIA" data-departmentkey="AN" style="display: block;">ITAGUI</option><option value="JARDIN-ANTIOQUIA" data-departmentkey="AN" style="display: block;">JARDIN</option><option value="JARDIN DE CACERES-ANTIOQUIA" data-departmentkey="AN" style="display: block;">JARDIN DE CACERES</option><option value="LA CEJA-ANTIOQUIA" data-departmentkey="AN" style="display: block;">LA CEJA</option><option value="LA CRUZADA-ANTIOQUIA" data-departmentkey="AN" style="display: block;">LA CRUZADA</option><option value="LA ESTRELLA-ANTIOQUIA" data-departmentkey="AN" style="display: block;">LA ESTRELLA</option><option value="LA PINTADA-ANTIOQUIA" data-departmentkey="AN" style="display: block;">LA PINTADA</option><option value="LA SIERRA-ANTIOQUIA" data-departmentkey="AN" style="display: block;">LA SIERRA</option><option value="LA TABLAZA-ANTIOQUIA" data-departmentkey="AN" style="display: block;">LA TABLAZA</option><option value="LIBORINA-ANTIOQUIA" data-departmentkey="AN" style="display: block;">LIBORINA</option><option value="MARINILLA-ANTIOQUIA" data-departmentkey="AN" style="display: block;">MARINILLA</option><option value="MONTEBELLO-ANTIOQUIA" data-departmentkey="AN" style="display: block;">MONTEBELLO</option><option value="NARINO-ANTIOQUIA" data-departmentkey="AN" style="display: block;">NARIÑO</option><option value="OLAYA-ANTIOQUIA" data-departmentkey="AN" style="display: block;">OLAYA</option><option value="PALMITAS-ANTIOQUIA" data-departmentkey="AN" style="display: block;">PALMITAS</option><option value="PUERTO BERRIO-ANTIOQUIA" data-departmentkey="AN" style="display: block;">PUERTO BERRIO</option><option value="RIONEGRO-ANTIOQUIA" data-departmentkey="AN" style="display: block;">RIONEGRO</option><option value="SABANETA-ANTIOQUIA" data-departmentkey="AN" style="display: block;">SABANETA</option><option value="SALGAR-ANTIOQUIA" data-departmentkey="AN" style="display: block;">SALGAR</option><option value="SAN ANTONIO DE PRADO-ANTIOQUIA" data-departmentkey="AN" style="display: block;">SAN ANTONIO DE PRADO</option><option value="SAN CARLOS-ANTIOQUIA" data-departmentkey="AN" style="display: block;">SAN CARLOS</option><option value="SAN JERONIMO-ANTIOQUIA" data-departmentkey="AN" style="display: block;">SAN JERONIMO</option><option value="SAN JOSE DEL NUS-ANTIOQUIA" data-departmentkey="AN" style="display: block;">SAN JOSE DEL NUS</option><option value="SAN LUIS-ANTIOQUIA" data-departmentkey="AN" style="display: block;">SAN LUIS</option><option value="SAN PEDRO DE LOS MILAGROS-ANTI" data-departmentkey="AN" style="display: block;">SAN PEDRO DE LOS MILAGROS</option><option value="SAN PEDRO URA-ANTIOQUIA" data-departmentkey="AN" style="display: block;">SAN PEDRO URA</option><option value="SAN VICENTE-ANTIOQUIA" data-departmentkey="AN" style="display: block;">SAN VICENTE</option><option value="SANTA BARBARA-ANTIOQUIA" data-departmentkey="AN" style="display: block;">SANTA BARBARA</option><option value="SANTA ISABEL-ANTIOQUIA" data-departmentkey="AN" style="display: block;">SANTA ISABEL</option><option value="SANTA ROSA DE OSOS-ANTIOQUIA" data-departmentkey="AN" style="display: block;">SANTA ROSA DE OSOS</option><option value="SANTAFE DE ANTIOQUIA-ANTIOQUIA" data-departmentkey="AN" style="display: block;">SANTAFE DE ANTIOQUIA</option><option value="SANTIAGO-ANTIOQUIA" data-departmentkey="AN" style="display: block;">SANTIAGO</option><option value="SANTUARIO-ANTIOQUIA" data-departmentkey="AN" style="display: block;">SANTUARIO</option><option value="SONSON-ANTIOQUIA" data-departmentkey="AN" style="display: block;">SONSON</option><option value="TITIRIBI-ANTIOQUIA" data-departmentkey="AN" style="display: block;">TITIRIBI</option><option value="TURBO-ANTIOQUIA" data-departmentkey="AN" style="display: block;">TURBO</option><option value="VEGACHI-ANTIOQUIA" data-departmentkey="AN" style="display: block;">VEGACHI</option><option value="YALI-ANTIOQUIA" data-departmentkey="AN" style="display: block;">YALI</option><option value="YONDO-ANTIOQUIA" data-departmentkey="AN" style="display: block;">YONDO</option>';
					}
				if($("select.esparta").val() =='AR'){
							$( "#demo" ).prop( "disabled", false );
							document.getElementById("demo").innerHTML='<option value="" style="display: block;">Ciudad:</option><option value="" style="display: block;">ARAUCA</option><option value="" style="display: block;">ARAUQUITA</option><option value="" style="display: block;">CRAVO NORTE</option><option value="" style="display: block;">FORTUL</option><option value="" style="display: block;">PUERTO RONDÓN</option><option value="" style="display: block;">SARAVENA</option><option value="" style="display: block;">TAME</option>';
					}
				if($("select.esparta").val()=='AT'){
					$( "#demo" ).prop( "disabled", false );
					document.getElementById("demo").innerHTML ='<option value="" style="display: block;">Ciudad</option><option value="" style="display: block;">BARANOA</option><option value="" style="display: block;">BARRANQUILLA</option><option value="" style="display: block;">CAMPO DE LA CRUZ</option><option value="" style="display: block;">CANDELARIA</option><option value="" style="display: block;">GALAPA</option><option value="" style="display: block;">JUAN DE ACOSTA</option><option value="" style="display: block;">LURUACO</option><option value="" style="display: block;">MALAMBO</option><option value="" style="display: block;">MANATÍ</option><option value="" style="display: block;">PALMAR DE VARELA</option><option value="" style="display: block;">PIOJO</option><option value="" style="display: block;">POLONUEVO</option><option value="" style="display: block;">PONEDERA</option><option value="" style="display: block;">PUERTO COLOMBIA</option><option value="" style="display: block;">REPELÓN</option><option value="" style="display: block;">SABANAGRANDE</option><option value="" style="display: block;">SABANALARGA</option><option value="" style="display: block;">SANTA LUCÍA</option><option value="" style="display: block;">SANTO TOMÁS</option><option value="" style="display: block;">SOLEDAD</option><option value="" style="display: block;">SUÁN</option><option value="" style="display: block;">TUBARA</option><option value="" style="display: block;">USIACURÍ</option>';
					}
				if($("select.esparta").val()=='BL'){
					$( "#demo" ).prop( "disabled", false );
					document.getElementById("demo").innerHTML ='<option value="" style="display: block;">Ciudad</option><option value="" style="display: block;">ACHÍ</option><option value="" style="display: block;">ARJONA</option><option value="" style="display: block;">CALAMAR</option><option value="" style="display: block;">CANTAGALLO</option><option value="" style="display: block;">CARTAGENA</option><option value="" style="display: block;">CÓRDOBA</option><option value="" style="display: block;">CLEMENCIA</option><option value="" style="display: block;">EL CARMEN</option><option value="" style="display: block;">EL GUAMO</option><option value="" style="display: block;">EL PEÑÓN</option><option value="" style="display: block;">MAGANGUÉ</option><option value="" style="display: block;">MAHATES</option><option value="" style="display: block;">MARGARITA</option><option value="" style="display: block;">MONTECRISTO</option><option value="" style="display: block;">MORALES</option><option value="" style="display: block;">PINILLO</option><option value="" style="display: block;">REGIDOR</option><option value="" style="display: block;">RÍO VIEJO</option><option value="" style="display: block;">SAN CRISTÓBAL</option><option value="" style="display: block;">SAN JACINTO</option><option value="" style="display: block;">SAN FERNANDO</option><option value="" style="display: block;">SAN ESTANISLAO</option><option value="" style="display: block;">SAN JACINTO DEL CAUCA</option><option value="" style="display: block;">SAN JUAN NEPOMUCENO</option><option value="" style="display: block;">SAN MARTÍN DE LOBA</option><option value="" style="display: block;">SAN PABLO</option><option value="" style="display: block;">SANTA CATALINA</option><option value="" style="display: block;">MONPOX</option><option value="" style="display: block;">SANTA ROSA</option><option value="" style="display: block;">SIMITÍ</option><option value="" style="display: block;">SOPLAVIENTO</option><option value="" style="display: block;">TIQUISIO</option><option value="" style="display: block;">TURBACO</option><option value="" style="display: block;">TURBANA</option><option value="" style="display: block;">VILLANUEVA</option><option value="" style="display: block;">ZAMBRANO</option>';
					
					}	
				
			})
  //.change();
  
 function galleta(){var p=$("select.grecia option");
 //var combo = documento.getElementById('demo');
//if(combo.selectedIndex<0)
    //alert('No hay opción seleccionada');
//else
    //alert('La opción seleccionada es: '+combo.options[combo.selectedIndex].value);
 
// alert($("#demo").prop('selectedIndex'));
 //.prop('selected', true);
 //$("#demo").prop('selectedIndex')
 //p[$("#demo").prop('selectedIndex')].prop('selected', true);
 
 $(function(){
	 
			//alert($("select.grecia option:selected").text());
			
		}
		)
 
 }
  
</script>
	<form class="infoPago2" action="pagos.php" method="post">
		<input class="total" type="hidden" name="total" value="">
		<input class="descripcion" type="hidden" name="descripcion" value="">
		<input class="comprador" type="hidden" name="comprador" value="">
		<input class="apellido" type="hidden" name="apellido" value="">
		<input class="correo" type="hidden" name="correo" value="">
		<input class="direccion" type="hidden" name="direccion" value="">
		<input class="ciudad" type="hidden" name="ciudad" value="">
		<input class="telefono" type="hidden" name="telefono" value="">
		<input class="cedul" type="hidden" name="cedula" value="">
	</form>
	
	
		<script>
		var expr=/^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
		var cedu=/^[0-9]/;

			$(function() 
				{

					$( "#thebutton" ).click(
						function() 
						{
							var nombre=$("#itNombre").val();
							var apellido=$("#itApellido").val();
							var correo=$("#itCorreo").val();
							var cedula=$("#itCedu").val();
							var depart=$('#department').val();
							var ciudad=$('#itCity').val();
							var direccion=$("#itAddress").val();
							var tel=$("#itPhone").val();
							if(nombre==""){$("#mensaje1").fadeIn();}
							else{$("#mensaje1").fadeOut();
									if(apellido==""){$("#mensaje2").fadeIn();}
									else{
											$("#mensaje2").fadeOut();
											if(correo=="" || !expr.test(correo))
												{$("#mensaje3").fadeIn();}
											else{
													$("#mensaje3").fadeOut();
													if(cedula=="")
														{$("#mensaje4").fadeIn();}
													else{
															$("#mensaje4").fadeOut();
															if ($('#department').val().trim() === '') 
																{$("#mensaje5").fadeIn();}
														 
															else {
																	$("#mensaje5").fadeOut();
																	if(ciudad=="")
																		{$("#mensaje6").fadeIn();}
																	else{
																			$("#mensaje6").fadeOut();
																			if(direccion=="")
																				{$("#mensaje7").fadeIn();}
																			else{
																				$("#mensaje7").fadeOut();
																				if(tel=="")
																					{$("#mensaje8").fadeIn();}
																				else{
																					$("#mensaje8").fadeOut();
																					var descri="linea24 registro2";
																					var total="320000";
																					
																					var nameCliente=$(".nombreCliente").val();
																					var apelliCli=$(".apelli").val();
																					var email=$(".corre").val();
																					var addres=$(".address").val();
																					var city=$(".city").val()+"-"+$(".esparta option:selected").text();
																					var tel=$(".phone").val();
																					var cedula=$(".cedu").val();
																					//alert(nameCliente);
																					
																					$(".descripcion").val(descri);
																					$(".total").val(total);
																					$(".comprador").val(nameCliente);
																					$(".apellido").val(apelliCli);
																					$(".correo").val(email);
																					$(".direccion").val(addres);
																					$(".ciudad").val(city);
																					$(".telefono").val(tel);
																					$(".cedul").val(cedula);
																						//alert("la order se ha ejecutado");	
																					$(".infoPago2").submit();

																					
																					
																					
																					
																					
																					
																					
																					
																					
																					
																					
																					
																					
																					
																				}
																			}
																		}
																 }
														}
												}
												
												
										}
								}
							
							//alert( "Handler for .click() called." );
						}
					);
			
				});
				
				

				
				
				
				
				
				
		</script>
	
	
</body>
</html>