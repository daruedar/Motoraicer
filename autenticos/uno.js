//$('input.qty').keypress(function (e) {if(e.which ==13){alert("Presionaron enter");}});

//$(function(){alert("Viernes desde uno");});

//$(
    //function()
        //{
           // var nomb = $('input:text[name=nombre1]').val();
        //    alert('Comprando');
       // $('div.swipe').css('background-color','red');
      //  }
    //);

//$(document).ready(function() {alert("jQuery esta funcionando !!");});



	function validarform(){
	  
	    	var expr=/^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
	    	
	        var nomb = $('input:text[name=nombre1]').val();
	        var aux=$('input:text[name=nombre2]').val();
	        var nombre=nomb+" "+aux;
	        var apellido= $('input:text[name=apellido]').val();
	        var correo= $('input:text[name=correo]').val();
	        var street= $('input:text[name=street]').val();
	        var doc=$( "#doc option:selected" ).text();
	        var docnum=  $('input:text[name=docnum]').val();
	        var municipio=  $('input:text[name=municipio]').val();
	        var dep=$( "#dep option:selected" ).text();
	        var tel=  $('input:text[name=tel]').val();
	        var cel=  $('input:text[name=cel]').val();
	        
	        if(nomb==""){$("#mensaje1").fadeIn();}
		    else{
		            $("#mensaje1").fadeOut();
		            if(apellido==""){$("#mensaje2").fadeIn();}
		            else{
		                 $("#mensaje2").fadeOut();
		                 if(correo=="" || !expr.test(correo)){$("#mensaje3").fadeIn();}
		                 else{
		                        $("#mensaje3").fadeOut();
		                        if(street==""){$("#mensaje4").fadeIn();}
		                        else{
		                                $("#mensaje4").fadeOut();
		                                 if(doc==""){$("#mensaje5").fadeIn();}
		                                 else{
		                                     $("#mensaje5").fadeOut();
		                                      if(docnum==""){$("#mensaje6").fadeIn();}
		                                      else{
		                                          $("#mensaje6").fadeOut();
		                                          if(municipio==""){$("#mensaje7").fadeIn();}
		                                          else{
		                                                $("#mensaje7").fadeOut();
		                                                if(dep==""){$("#mensaje8").fadeIn();}
		                                                else{ 
		                                                    $("#mensaje8").fadeOut();
		                                                    if(tel==""){$("#mensaje9").fadeIn();}
		                                                    else{
		                                                        $("#mensaje9").fadeOut();
		                                                        if(cel==""){$("#mensaje10").fadeIn();}
		                                                        else{
		                                                            $("#mensaje10").fadeOut();
		                                                            
		                                                            $(".descripcion").val("Aca va la descripcion");
																	//$(".total").val("50000");
																	$(".comprador").val(nombre);
																	$(".apellido").val(apellido);
																	$(".correo").val(correo);
																	$(".direccion").val(street);
																	$(".ciudad").val(municipio);
																	$(".telefono").val(tel);
																	$(".cedul").val(docnum);
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
		            }
			}
	     
	     
            //alert(nomb);
	   // alert("op");
	    //var nomb = $('input:text[name=nombre1]').val();
	    //alert($('input:text[name=nombre]').val());
	    //alert(nomb);
	   //$(document).ready(function(){alert("Jue")})}); 
	}
	
	function pagar(){
	    alert("Llamaron una funcion");
	}
	function desplegar(){
	    //$('div.swipe').css('display','block');
	    //alert("El color del texto es " + $(".swipe").css("display"));
	    //$('div.swipe').css('background-color','red');
	    //alert('spartaXX');
	    $(".form7").submit();
	    //$(".swipe").fadeIn();
	}
