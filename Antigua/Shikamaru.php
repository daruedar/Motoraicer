<?php
include'Producto.php';
include'RelProCat.php';
include'Categoria.php';
include'Compra.php';



/**
 * Clase encargada de realizar consultas a la base de datos y posteriormente almacena
 *  los resusltatos en arrays para ser consultados desde distintos partes del sitio web
 */
class Shikamaru
	{	private $namebase;
		private $servidor;
		private $usuario;
		private $pass;
		
		public $secciones;//Arreglo para almacenar la tabla categorias2
		private $productosdeSeccion;//Arreglo de productos de  una seccion
		private $relMotosProd;//Arreglo de las motos asociadas a todos los productos
		
		public $listaproductos;//Arreglo de productos de una categoria(moto)*/
        public $listacompras;//Arreglo de productos de una session alguen los agrego)*/
		public $listamotos;//Arreglo para almacenar todas las categorias
		public $lasmotos;//Arreglo para almacenar las motos asociadas a un producto
		
        public function __construct(){
          
			$this->namebase="motoraic_motocicletas";
			$this->servidor="204.197.244.149";
			$this->usuario="motoraic_rueda";
			$this->pass="3DMAXstudio@";
			
		    $this->secciones=array();//contain table categorias2
		    $this->relMotosProd=   array();//contain relcapo Todas
		    $this->listamotos=array();
		    $this->listaproductos=array();//contain table productos
			$this->lasmotos=array();
		   
			
            $this->listacompras=array();
			$this->productosdeSeccion=array();
			
			$this->setSecciones();//Extrae de la BD la tabla categorias2
			$this->setMotosB();//Extrae de la BD la tabla relcapo
			$this->setCategorias();//Almacena la tabla  categorias en listamotos
			$this->esparta();//Almacena la tabla Productos en listaproductos
		
			}
		
		private function setSecciones(){  
			//almacena en el array secciones todas las secciones de la pagina
				$enlace=mysqli_connect($this->servidor, $this->usuario, $this->pass,$this->namebase);
				if(!$enlace){echo mysqli_connect_error();}
				$consulta4="SELECT categorias2.id,categorias2.nombre FROM categorias2 order by id";
				$resultado= mysqli_query($enlace,$consulta4);
				while($row =mysqli_fetch_array($resultado,MYSQLI_NUM)){
					$c=null;
					$seccion= new Categoria($row[0],$row[1]);
					$this->addSeccion($seccion);
					}
				mysqli_free_result($resultado);
				mysqli_close($enlace);
			}
		private function addSeccion($secc){$this->secciones[]=$secc;}	
		
		public function setSeccion($idseccion){// Productos de una seccion
		    $idsecc=$idseccion+0;
			$enlace=mysqli_connect($this->servidor, $this->usuario, $this->pass,$this->namebase);
			if(!$enlace)echo mysqli_connect_error();
			$consulta3="SELECT relcat2pro.idcat2,relcat2pro.idprod,productos.id,
			productos.nombre,productos.imagen,productos.precio,relcat2pro.id
			FROM relcat2pro,productos 
			WHERE (relcat2pro.idcat2=".$idsecc.")AND
			(relcat2pro.idprod=productos.id)ORDER BY relcat2pro.id";
		
			$resultado= mysqli_query($enlace,$consulta3);
			while($row =mysqli_fetch_array($resultado,MYSQLI_NUM)){
					$x=null;
				    $x= new Producto($row[2],$row[3],$row[4],$row[5]);
					$this->addProdaSeccion($x);
				}
			mysqli_free_result($resultado);
			mysqli_close($enlace);
			}//Almacena todos los productos que pertenecen a una seccion
		private function addProdaSeccion($pro){$this->productosdeSeccion[]=$pro;}
		public function &getProdeSeccion()   {return $this->productosdeSeccion;}
		
	    
        public function setMotosB(){//print motos de un repuesto
	    //Hace muchas llamadas a la basa, mejorar haciendo unica consulta
	    $enlace=mysqli_connect($this->servidor, $this->usuario, $this->pass,$this->namebase);
	    if(!$enlace)echo mysqli_connect_error();
	    $consulta5="SELECT productos.nombre,categorias.nombre,categorias.id,
				relcapo.idc,relcapo.idp,productos.id	FROM relcapo,
				productos,categorias
				WHERE(categorias.id=relcapo.idc)and(relcapo.idp=productos.id)ORDER BY productos.id";
		$resultado= mysqli_query($enlace,$consulta5);
		while($row=mysqli_fetch_array($resultado,MYSQLI_NUM)){
			$x=null;
			$x= new RelProCat($row[5],$row[0],$row[2],$row[1]);
			$this->relMotosProd[]=$x;
			}//Fin del while
		
		
		
	    mysqli_free_result($resultado);
		mysqli_close($enlace);
		}//Fin del metodo setMotos
        public function getMotosdeProducto($idproducto){
			for($i=0;$i< count($this->relMotosProd); $i++){
				    if($this->relMotosProd[$i]->getIdp()==$idproducto)
					{   //echo $this->relMotosProd[$i]->getName();
					      echo("<option>");
						  echo $this->relMotosProd[$i]->getName();  
						  echo("</option>");
					    $salida[$i]=$this->relMotosProd[$i]->getName();
					}
					
				}
			}//FingetMotosdeProducto
	   
	    private function setCategorias(){
			$enlace=mysqli_connect($this->servidor, $this->usuario, $this->pass,$this->namebase);
			if(!$enlace){echo mysqli_connect_error();}
			$consulta4="SELECT categorias.id,categorias.nombre FROM categorias order by nombre";
			$resultado= mysqli_query($enlace,$consulta4);
				while($row =mysqli_fetch_array($resultado,MYSQLI_NUM)){
					$c=null;
					$c= new Categoria($row[0],$row[1]);
					$this->addCategoria($c);
					}
				
				mysqli_free_result($resultado);
				mysqli_close($enlace);		
			}
		public function &getListamotos(){
			//echo(count($this->listamotos));	
			return $this->listamotos;}
		public function addCategoria($pro){$this->listamotos[]=$pro;}
		       
		
		
		public 	function esparta(){	//Almacena la tabla Productos	
			$enlace=mysqli_connect($this->servidor, $this->usuario, $this->pass,$this->namebase);
			//$bd_seleccionada=mysqli_select_db($enlace,$this->namebase);
			if(!$enlace)echo mysqli_connect_error();
			$consulta3="SELECT productos.id,productos.nombre,productos.imagen,
			productos.precio FROM productos ";
			$resultado= mysqli_query($enlace,$consulta3);
			while($row =mysqli_fetch_array($resultado,MYSQLI_NUM)){
					$x=null;
					$x= new Producto($row[0],$row[1],$row[2],$row[3]);
					$this->addProductos($x);
				}
			mysqli_free_result($resultado);
			mysqli_close($enlace);		
		}//Fin de la funcion esparta
	
		public function getListaProductos($idmoto){//Retorna un array con TODOS los productos de una moto
		    $aux=count($this->listaproductos);
		    $aux2=count($this->relMotosProd);
		    $salida=  array();
		    for($v=0;$v<$aux2;$v++){
		        if($this->relMotosProd[$v]->getIdm()==$idmoto){
		            for($w=0;$w<$aux;$w++){
		                if($this->listaproductos[$w]->getId()==$this->relMotosProd[$v]->getIdp() )
		                    { 
		                        $a=$this->listaproductos[$w]->getId();
		                        $b=$this->listaproductos[$w]->getName();
		                        $c=$this->listaproductos[$w]->getImagen();
		                        $d=$this->listaproductos[$w]->getPrice();
		                        $x=null;
		                        $x= new Producto($a,$b,$c,$d);
		                        $salida[]=$x;
		                        
		                     }//Fin del interno
		                 }//Fin del for interno
		        } //Fin del If externo 
	
		    }//Fin del for externo
		    return $salida;
		        
		}//Fin de la funcion getListaProductos
		    
		    
		
	
		public function addProductos($pro){$this->listaproductos[]=$pro;}
		
		
		
		public function jutsuClonesdeSombra($nombre) {
				//crea todos los en blanco de las paginas para cada moto
				$nombre_archivo = $nombre.".php"; 
				file_exists($nombre_archivo);
				
				//if(file_exists($nombre_archivo)){$mensaje = "El Archivo $nombre_archivo se ha modificado";}
				//else{$mensaje = "El Archivo $nombre_archivo se ha creado";}
				$archivo = fopen($nombre_archivo, "w");
				$pagina="Jugando al bolo";
				fwrite($archivo,$pagina);
				fclose($archivo);
				
				/*if($archivo = fopen($nombre_archivo, "a"))
				{
					if(fwrite($archivo, date("d m Y H:m:s"). " ". $mensaje. "\n"))
						{echo "Se ha ejecutado correctamente";}
					else{echo "Ha habido un problema al crear el archivo";}
					fclose($archivo);
				}*/
			}	//fin jutsu clones de sombra
		function edotensei(){
			//funcion que crea la pagina de cada categoria
			echo('<html  dir="ltr" id="index-page" lang="en">');
			echo('<head>');
			echo('<meta http-equiv="content-type" content="text/html; charset=UTF-8">');
			echo('<meta charset="utf-8">
	<meta name="generator" content="(c) by commerce:SEO v2Next"><link rel="stylesheet" href="Motorrad%20Shop%20-%20Original%20Parts_files/cseo_css.css" type="text/css" media="projection, screen"><link rel="stylesheet" href="Motorrad%20Shop%20-%20Original%20Parts_files/google_translator_ff.css" type="text/css">    <title>Motorrad Shop - Original Parts</title> 
	<meta name="keywords" content="Motorrad, Shop, Original, Parts, unserem, BTS, bieten, wir, Ihnen, mehr, als, 65000, günstige, Motorradersatzteile, und, für, Quad, oder, Roller, von, qualitativ, hochwertigen, Herstellern, Wir, beraten, Sie, gern, egal&nbsp;, Hilfe, beim, Kauf, Einbau, der, Motorradteile, benötigen, Hier, kaufen, die, entspannt, bequem, ohne, Risiko, ein, liefern, schnell, Unsere, Suchmashine, hilft, das, richtige, Motorradteil, finden, Die, Suche, ist, einfach, nach, Hersteller, Model, Marke, orientiert, Sollten, trotzdem, Fragen, haben-, steht, unseres, Team, telefonisch, per, E-mail, verfügung, Nach, einer, wären, eine, Bewertung, dankbar, sind, Ihrer, Meinung, über, sehr, interessiert, Ihr, wünsch, viel, Spaß, Shoppen"> 
	<meta name="description" content="Original Parts: In unserem BTS Shop bieten wir Ihnen mehr als 65.000 günstige Motorradersatzteile und Originalteile für Motorrad, Quad oder Roller von ..."> 
	<meta name="robots" content="index,follow,noodp">
	<meta name="author" content="BTS GmbH">
	<link rel="alternate" type="application/rss+xml" title="BTS GmbH RSS Feed von biketeile-service.de" href="https://www.biketeile-service.de/rss_news.php">
	<link rel="canonical" href="https://www.biketeile-service.de/">
	<link href="https://www.biketeile-service.de/favicon.ico" rel="shortcut icon" type="image/x-icon">
	<link rel="apple-touch-icon" href="https://www.biketeile-service.de/apple-touch-icon.png">
	<script type="text/javascript" async="" src="Motorrad%20Shop%20-%20Original%20Parts_files/ga.js"></script>
	<script type="text/javascript" src="Motorrad%20Shop%20-%20Original%20Parts_files/jquery.js"></script>
	<script type="text/javascript" src="Motorrad%20Shop%20-%20Original%20Parts_files/jquery-migrate.js"></script>
	<script type="text/javascript" src="Motorrad%20Shop%20-%20Original%20Parts_files/jquery_004.js"></script>
	<script type="text/javascript" src="Motorrad%20Shop%20-%20Original%20Parts_files/jquery_003.js"></script>
	<script type="text/javascript" src="Motorrad%20Shop%20-%20Original%20Parts_files/ajaxsuggest.js"></script>
	<script type="text/javascript" src="Motorrad%20Shop%20-%20Original%20Parts_files/formsizecheck.js"></script>
	<script type="text/javascript" src="Motorrad%20Shop%20-%20Original%20Parts_files/sel.js"></script>
	<script type="text/javascript" src="Motorrad%20Shop%20-%20Original%20Parts_files/main_slider.js"></script>
	<script type="text/javascript" src="Motorrad%20Shop%20-%20Original%20Parts_files/responsiveslides.js"></script>
	<script type="text/javascript" src="Motorrad%20Shop%20-%20Original%20Parts_files/xajax.js"></script><script type="text/javascript" src="Motorrad%20Shop%20-%20Original%20Parts_files/jquery-ui-1.js"></script>
	<script type="text/javascript" src="Motorrad%20Shop%20-%20Original%20Parts_files/xajax_002.js"></script><script type="text/javascript" src="Motorrad%20Shop%20-%20Original%20Parts_files/jquery_002.js"></script>
	<script type="text/javascript" src="Motorrad%20Shop%20-%20Original%20Parts_files/main.js"></script><script type="text/javascript" src="Motorrad%20Shop%20-%20Original%20Parts_files/main_2.js"></script><!-- base href="https://www.biketeile-service.de/" -->

	');
		
			echo('</head>');
			
			echo('<body>');
			echo('<div id="bodywrapper"> ');
			echo('<header class="header ">');
			echo('<div id="logo"> <a href="https://www.biketeile-service.de/" class="logo-link" title="Startseite">');
			echo('&nbsp;</a> </div>');
			echo('<div class="header-img1"> <div class="ebay_info"> <div> ');
			echo('<a href="http://stores.ebay.com/BikeTeile-Service" target="_blank">');
			echo('<img src="Motorrad%20Shop%20-%20Original%20Parts_files/2000px-EBay_logo.png" style="float: left;" width="50"></a> ');
			echo('<h2 class="si-ttl">motorcycle parts topseller</h2>');
			echo('	<div style="clear: both;"></div> </div> ');
			echo('<a href="http://feedback.ebay.com/ws/eBayISAPI.dll?ViewFeedback&amp;userid=www_biketeile-service_de&amp;ssPageName=STRK:ME:UFS" target="_blank">180.430</a> ');
			echo('<a href="http://feedback.ebay.com/ws/eBayISAPI.dll?ViewFeedback&amp;userid=www_biketeile-service_de&amp;ssPageName=STRK:ME:UFS" target="_blank">');
			
			echo('<span class="ebay_info_star"></span></a> <span class="ebay_info_score">');
			echo('(<a href="http://feedback.ebay.com/ws/eBayISAPI.dll?ViewFeedback&amp;userid=www_biketeile-service_de&amp;ssPageName=STRK:ME:UFS" target="_blank">99.8%</a>) Positive Feedback');
			echo('</span> ');
			echo('<div class="ebay_info_desc">More than 10 years of success on the market</div> ');
			echo('<div class="ebay_info_desc">Over 2,5 Mill. parts available</div>');
			echo('<div class="ebay_info_desc">');
			echo('<a href="http://www.biketeile-service.de/en/shipping-.html"></a></div>');
			echo('</div> </div>');
			//Fin del class header-img1 
			
			echo('<div class="header-trusted-shops"> 
				<a href="https://sslanalyzer.comodoca.com/?url=www.biketeile-service.de" id="comodoTL" target="_blank"> 
				<img class="img-responsive hidden-xs" src="Motorrad%20Shop%20-%20Original%20Parts_files/img2.png"> 
				</a> 
			</div>');
			
			echo('<nav> <ul class="navi"> <div class="shoplinks" >');
			echo('<li class="home"> <a href="" title="Startseite">Home</a> </li>');
			echo('<li class="contact"> <a href="">Contact</a> </li>');
			echo('<li class="merkzettel"> <a href="">Wishlist</a> </li>');
			echo('<li class="login"> <a href="" title="Login">Login</a> </li>');
			echo('<li class="impressum"> <a href="" title="Impressum">Imprint</a> </li>');
			echo('<li class="mycseo"> <a href="" title="Your account">Your account</a></li>');
			echo('<li class="wk_button"> <a href="" title="Shopping Cart">');
			echo('<img alt="shopping_cart" title="shopping_cart" src="Motorrad%20Shop%20-%20Original%20Parts_files/wk_icon.png" height="13"> </a> </li>');
			echo('</div><div class="shoprechts">');
			echo('<div class="nav_search">');
			echo('<form rel="nofollow" class="pure-form" id="quick_find" action="" method="get">');
			echo('<input id="n" name="n" value="1" type="hidden"> <div>');
			echo('<input name="keywords" value="Search" id="txtSearch" autocomplete="off" size="20" accesskey="s" maxlength="60" style="margin-right: 5px;padding: 2px 3px 3px 3px;" type="search">');
			echo('<input class="css_img_button" value="Go" title="Go" type="submit"></div> ');
			echo('</form></div>');
			echo('			<div class="header-languages"> 
					<a href="">
					<img src="Motorrad%20Shop%20-%20Original%20Parts_files/icon_002.gif" alt="Deutsch" title="Deutsch" width="18" height="12"></a> 
					<a href="">
					<img src="Motorrad%20Shop%20-%20Original%20Parts_files/icon.gif" alt="English" title="English" width="18" height="12"></a> 
				</div> ');
			echo('</div> </ul> </nav></header><div id="sectionpad"> <div class="navtrail">');
			echo('<span itemscope="" itemtype=""><a href="" itemprop="url"><span itemprop="title">Main page</span></a>');
			echo('</span></div><aside id="boxen"> <div class="box">');
			echo('<h4 class="name_">Buscador de Repuestos</h4> <div class="boxcontent">');
			echo('<div class="notranslate"> <div style="position: relative" id="modelbox">');
			echo('<p><label>Nombre del Repuesto</label></p> ');
			echo('<input placeholder="Ej: Amortiguadores" class="search_model_input" type="text">');
			echo('<input class="css_img_button search_model_button" value="Buscar" title="Go" type="button">');
			echo('<p><label>Seleccione su Moto</label></p>');
			echo('<form id="formulario" method="post" action="diego.php">');
			echo('<select id="BTS_Marke" name="BTS_Marke" onChange=this.form.submit()>');
			echo('<option selected="selected" value=""onClick=saludar()>Modelo: </option>');	
		}
		function edotensei2(){
			echo("ARTE NINJA");
			/*
			echo('<img id="waiting" src="Motorrad%20Shop%20-%20Original%20Parts_files/wait_green.gif" 
					style="display: none; position: absolute; top: 30; left: 70;"> ');
			echo('</div> </div> </div> </div>');
			echo('<div class="box box_categories_0"> <h4 class="name_categories_0">Categorias</h4> ');
			echo('<div class="boxcontent boxcontent_categories_0"> ');
			echo('<ul id="main_nav"> <li class="main_level_1">');
			echo('<a href="" title="Accessories * Fußmatte * Arrancador">Accesorios</a></li>');
			echo('<li class="main_level_1">');
			echo('<a href="" title="Bicycles * Accessori * Abstellständer">');
			echo('Bicicletas</a></li> <li class="main_level_1">');
			echo('<a href="" title="Brakes * Bremsklötze Braketec Sattel * Freno de mano">');
			echo('Frenos</a></li>');
			echo('<li class="main_level_1"><a href="" title="Electrics * Accendi sigari * Encendedor de cigarrillos">');
			echo('Electricos</a></li> <li class="main_level_1"><a href="" title="Engine * Kurbelwelle * Rodamiento primario, juego">');
			echo('Motor</a></li> <li class="main_level_1"><a href="" title="Exhaust system parts * Distanzscheibe * 28 mm">');
			
			echo('Escape</a></li> <li class="main_level_1"><a href="" title="Filters and Accessories * Racingluftfilter * Fairchief">');
			echo('Filtros y Accesorios</a></li> <li class="main_level_1"><a href="https://www.biketeile-service.de/en/frameandsuspension/" title="Frame and Suspension * HC1 Ersatzteile / Zubehör * Cojinete de basculante">');
			
			*/
			echo('</body>');
			echo('</html>');
		
		}
        public function addVisitante($s,$fecha,$ip,$navegador){
				$enlace=mysqli_connect($this->servidor, $this->usuario, $this->pass,$this->namebase);
                if(!$enlace){echo mysqli_connect_error();echo("error en shikamaru.addvisi");}
				$cadena1="INSERT INTO visitantes (idsesio,fecha,ip,navegador) VALUES (";
				$cadena2= "'".$s."',"."'".$fecha."',"."'".$ip."',"."'".$navegador."')";
				$consulta=$cadena1.$cadena2;
				$resultado= mysqli_query($enlace,$consulta);
				mysqli_close($enlace);
			}
         
        public function addCarro($i,$c,$p){
			
				$enlace=mysqli_connect($this->servidor, $this->usuario, $this->pass,$this->namebase);
                if(!$enlace)echo mysqli_connect_error();
				$consulta="insert into carros(idsesion,cantidad,idproduc)values('".$i."',".$c.",".$p.")";
				
				$resultado= mysqli_query($enlace,$consulta);
				mysqli_close($enlace);
				}
         /**Consulta los productos que pertenecen a una session y los almacena  en el array listacompras de la clase*/
        public function setCarro($idsession){
             //PENDIENTE POR  LIMPIAR EL CARRO CADA VEZ QUE LLAMEN ESTE METODO   
                $enlace=mysqli_connect($this->servidor, $this->usuario, $this->pass,$this->namebase);
			$bd_seleccionada=mysqli_select_db($enlace,$this->namebase);
			if(!$enlace)echo mysqli_connect_error();
			$consulta3="SELECT carros.idsesion,carros.cantidad,carros.idproduc,productos.id,productos.nombre,productos.imagen,productos.precio,carros.id FROM carros, productos WHERE(carros.idproduc=productos.id)AND(carros.idsesion='".$idsession."')";
			$resultado= mysqli_query($enlace,$consulta3);
			while($row =mysqli_fetch_array($resultado,MYSQLI_NUM)){
					$lacompra=null;
					$lacompra= new Compra($row[2],$row[4],$row[5],$row[6],$row[1],$row[7]);//los indices modificar
					$this->addListadeCompras($lacompra);
				}
			/* free result set */
			mysqli_free_result($resultado);
			/* close connection */
			mysqli_close($enlace);	
                
            }
        public function addListadeCompras($compra1){$this->listacompras[]=$compra1;}
		public function borrarCarro($idcarro){
				$enlace=mysqli_connect($this->servidor, $this->usuario, $this->pass,$this->namebase);
                if(!$enlace){echo mysqli_connect_error();echo("error en shikamaru.addvisi");}
				$consulta="DELETE FROM carros where carros.id=".$idcarro;
				$resultado= mysqli_query($enlace,$consulta);
				mysqli_close($enlace);
				}
			public function setCantidad($idcarro,$cantidad){
				$enlace=mysqli_connect($this->servidor, $this->usuario, $this->pass,$this->namebase);
                if(!$enlace){echo mysqli_connect_error();echo("error en shikamaru.addvisi");}
				$consulta= "UPDATE carros SET cantidad=".$cantidad." WHERE id =".$idcarro;
				//echo($consulta);
				$resultado= mysqli_query($enlace,$consulta);
				mysqli_close($enlace);
				}
				
		
	
	}//Fin de la clase Shikamaru
	
	$shika= new  Shikamaru();
	
	
	
	
	
	
?>