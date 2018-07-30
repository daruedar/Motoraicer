<?php 
include'Shikamaru.php';
include 'encabezado.php';
//header('Location: carros.php');


if (isset($_POST['accion'])) {
    $accion=(int)$_POST['accion'];
   // echo("el valor enviado es");echo((int)$_POST['accion']);
  //  $shika->borrarCarro((int)$_POST['carro']);
  
    }
    
?>

<html>
    <head>
   <script type='text/javascript'>
        	function notificar(t)
	{
	if(t==1){$(".regresar").submit();}
	if(t==2){$(".regresar").submit();}

	}

	</script>
        
    </head>
   <body >
       <?php 
       if ($accion==1) {
       $shika->borrarCarro((int)$_POST['carro']);
       
       ?>
     		
		<div id="capaVentana" style="position:fixed;width:100%;height:100%;padding:0px;left:0px;top:0%;z-index:10;background:red;
		border:1px solid #000;display: flex;justify-content: center;align-items: center;  background-color: rgba(0, 0, 0, 0.6);
    color:#0000FF;">
	
	    	<div style="width:480px;height:100px;background-color:#EFFBFB;margin-left: auto;margin-right: auto; opacity: 1; ">
		    
		    <div style="height:40px;width:100%;">
                <div id="izq" style="width:7%;float:left;margin-left:4px;margin-top:10px;" ><span class="glyphicon glyphicon-ok" style="color:#0000FF;font-size:22px;"></span></div>
                
                <div id="der" style="width:90%;float:right;">
                    <div  style="width:80%;float:left;margin-top:12px;margin-left:1px;" ><span style="color:#0000FF;font-size:22px">Producto Borrado</span></div>
                    <div style="width:10%;float:right;margin-right:7px;margin-top:0px;">
                        <button type="button" class="btn btn-primary"onclick="notificar(1)">
                           <span class="glyphicon glyphicon-remove" style="color:#FFB700;font-size:22px"></span>
                        </button>
                    </div>
                </div>
             </div>
	        </br>
	        <div style="width:100%">
	            <div style="float:left;margin-left:90px"><button type="button" class="btn btn-success"onclick="notificar(2)">Aceptar</button></div>
	        </div>
	        
		    </div>
	</div>
	 <?php }
	 //else echo("naja");
	    if($accion==2){
	        $shika->setCantidad(
        (int)$_POST['idcarro'],
        (int)$_POST['cantidad']);
    
	    ?>
	        
	        	<div id="capaVentana" style="position:fixed;width:100%;height:100%;padding:0px;left:0px;top:0%;z-index:10;background:red;
		border:1px solid #000;display: flex;justify-content: center;align-items: center;  background-color: rgba(0, 0, 0, 0.6);
    color:#0000FF;">
	
	    	<div style="width:480px;height:100px;background-color:#EFFBFB;margin-left: auto;margin-right: auto; opacity: 1; ">
		    
		    <div style="height:40px;width:100%;">
                <div id="izq" style="width:7%;float:left;margin-left:4px;margin-top:10px;" ><span class="glyphicon glyphicon-ok" style="color:#0000FF;font-size:22px;"></span></div>
                
                <div id="der" style="width:90%;float:right;">
                    <div  style="width:80%;float:left;margin-top:12px;margin-left:1px;" ><span style="color:#0000FF;font-size:22px">Lista  actualizada</span></div>
                    <div style="width:10%;float:right;margin-right:7px;margin-top:0px;">
                        <button type="button" class="btn btn-primary"onclick="notificar(1)">
                           <span class="glyphicon glyphicon-remove" style="color:#FFB700;font-size:22px"></span>
                        </button>
                    </div>
                </div>
             </div>
	        </br>
	        <div style="width:100%">
	            <div style="float:left;margin-left:90px"><button type="button" class="btn btn-success"onclick="notificar(2)">Aceptar</button></div>
	        </div>
	        
		    </div>
	</div>
	 <?php   }?>


	
				<form class="regresar" action="carros.php" method="post">
			    <input class="total" type="hidden" name="volver" value="">
		    </form>
	
        
    </body>
</html>