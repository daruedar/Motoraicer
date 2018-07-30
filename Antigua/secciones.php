<?php include'Shikamaru.php';
	session_start();
	$sesionh=session_id();

	if (isset($_GET['seccion'])) {$idprod=$_GET['seccion'];}
	else{$idprod=2;}
	$idprod=1;

	if (isset($_POST['idproducto'])) //Agreando  productos al carro
		{
			$item=$_POST['idproducto'];
			$shika->addCarro($sesionh,1,$item);
			
		}

    $shika->setSeccion(2);
	$productos= $shika->getProdeSeccion();	
?><html>
	<head>	<?php include 'encabezado.php';?>
			<?php include 'hidrogeno.php';?>
			
	<script type='text/javascript'>

	function abrirVentana(s)
	{
	    // alert(s)
	     addtoCarro(s);
		 document.getElementById("capaVentana").style.visibility="visible";
	}
	
	function cerrarVentana(){document.getElementById("capaVentana").style.visibility="hidden";}
	
	function notificar(t)
	{
	if(t==1){cerrarVentana();
	$(".comprado").submit();
	    
	}
	if(t==2){
	    
	    cerrarVentana();
	    $(".formu2").submit();
	    }
	if(t==3){cerrarVentana();
	    $(".comprado").submit();
	    }
	}
	function addtoCarro(t){
	    input =$(".comprado input");
	    input2=$(".formu2 input");
	    input[0].value=t;
	    input2[0].value=t;
	    //$(".comprado").submit();
	    
	}

	

</script>

<link rel="stylesheet" href="thecss/ventanaemergente/browse.css" type="text/css"> 
	</head>
	
	<body>
		<div id="bodywrapper"style="width:970px;"> 
		
			
		<div id="capaVentana" style="visibility:hidden;position:fixed;width:100%;height:100%;padding:0px;left:0px;top:0%;z-index:10;background:red;
		border:1px solid #000;display: flex;justify-content: center;align-items: center;  background-color: rgba(0, 0, 0, 0.6);
    color:#0000FF;">
	
	    	<div style="width:480px;height:100px;background-color:#EFFBFB;margin-left: auto;margin-right: auto; opacity: 1; ">
		    
		    <div style="height:40px;width:100%;">
                <div id="izq" style="width:7%;float:left;margin-left:4px;margin-top:10px;" ><span class="glyphicon glyphicon-ok" style="color:#0000FF;font-size:22px;"></span></div>
                
                <div id="der" style="width:90%;float:right;">
                    <div  style="width:80%;float:left;margin-top:12px;margin-left:1px;" ><span style="color:#0000FF;font-size:22px">Producto Agregado</span></div>
                    <div style="width:10%;float:right;margin-right:7px;margin-top:0px;">
                        <button type="button" class="btn btn-primary"onclick="notificar(1)">
                           <span class="glyphicon glyphicon-remove" style="color:#FFB700;font-size:22px"></span>
                        </button>
                    </div>
                </div>
             </div>
	        </br>
	        <div style="width:100%">
	            <div style="float:left;margin-left:90px"><button type="button" class="btn btn-success"onclick="notificar(2)">Ver lista de compras</button></div>
	            <div style="float:right;margin-right:90px"><button type="button" class="btn btn-success"onclick="notificar(3)">Seguir comprando</button></div>
	            
	        </div>
	        
		    </div>
	
	</div>

			<?php include 'header2.php';?>
			<div id="sectionpad" style="background-image:baner/shop.jpg"> 
		
			<!--		<div class="navtrail" style="background-color:red;">
						<span itemscope="" itemtype="">
						<a href="" itemprop="url">
						<span itemprop="title">Main page</span></a></span>
					</div>-->
					<?php //include 'izquierda.php';?>
					<?php //include 'cenjulio6.php';?><!--Este es el archivo originl funcionia bien, se comento para hacer pruebas con la linea  inferior-->
					<?php include 'centralsecciones.php';?>
					<?php //include 'derecha.php';?>
			</div>
		</div>
		<?php// include 'desplegable.php';?>
		
			<form class="comprado" action="amortiguadoresparamoto.php" method="post">
			    <input class="total" type="hidden" name="idproducto" value="">
		    </form>
		    <form class="formu2" action="carros.php" method="post">
			    <input class="total" type="hidden" name="idproducto" value="">
		    </form>
		    
	
	
	</body>
</html>






