<?php

	include'Shikamaru.php';
	session_start();
	//$sesionh=session_id();//Pendiente implementar  que la session original se asigne a esta variable
	$sesionh=$_SESSION['idsesion'];
	
	if (isset($_GET['seccion'])) {$idprod=$_GET['seccion'];}
	else{$idprod=2;}
	$idprod=1;

	if (isset($_GET['producto'])) //Agreando  productos al carro
		{
			$item=$_GET['producto'];
			$shika->addCarro($sesionh,1,$item);
			header('Location: carros.php');
		}


	   
       // $shika->setSeccion($idprod);
	    $productos= $shika->getListaProductos(1);	
	
	
?>

<html>
	<head>	<?php include 'encabezado.php';?>
			<?php include 'hidrogeno.php';?>
	</head>
	
	<body>
		<div id="bodywrapper"style="width:970px;"> 
			<?php include 'header2.php';?>
			<div id="sectionpad" style="background-image:baner/shop.jpg"> 
			<!--		<div class="navtrail" style="background-color:red;">
						<span itemscope="" itemtype="">
						<a href="" itemprop="url">
						<span itemprop="title">Main page</span></a></span>
					</div>-->
					<?php include 'izquierda.php';?>
					<?php //include 'cenjulio6.php';?><!--Este es el archivo originl funcionia bien, se comento para hacer pruebas con la linea  inferior-->
					<?php include 'centralagosto9.php';?>
					<?php include 'derecha.php';?>
			</div>
		</div>
		<!--<div style="width:100%;height:5000px;background-color:purple;z-index:6;position:absolute;background-color: rgba(255, 0, 0, 0.5)">
		yuu
		</div>-->
		<?php// include 'desplegable.php';?>
	</body>
</html>
