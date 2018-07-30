<?php
//include 'micro/MisClases/DriverBD.php';
//include 'MisClases/Shika.php';
//require_once("MisClases/Shika.php");
//require_once("MisClases/DriverBD.php");
class Producto
    {
        private $nombre;
        private $precio;
        private $productos;
        public function __construct(){
          
                $this->productos= array();
                //    $this->idsesion=$id;
                $this->alabase=new DriverBD();
                $this->setLista();
                
            }
        private function setLista(){
                 //Almacena  todos los productos  de la base
            $var=new DriverBD();
            $enlace=mysqli_connect($var->gserv(), $var->guser(), $var->gpass(),$var->gnbd());
		    $bd_seleccionada=mysqli_select_db($enlace,$this->namebase);
			if(!$enlace)echo mysqli_connect_error();
			$consulta3="SELECT productos.id,productos.nombre,productos.imagen,productos.precio FROM  productos ORDER BY nombre";
			$resultado= mysqli_query($enlace,$consulta3);
			$row = mysqli_fetch_array($resultado, MYSQLI_NUM);
			    while($row =mysqli_fetch_array($resultado,MYSQLI_NUM)){
					    $lacompra=null;
					    $lacompra= new Shika($row[0],$row[1],$row[2],$row[3],0,0);//los indices modificar
					    $this->addListadeCompras($lacompra);
				    }
			    mysqli_free_result($resultado);
			    mysqli_close($enlace);
            }
            
        private function addListadeCompras($compra1){$this->productos[]=$compra1;}  
        public function getLista(){return $this->productos;}
         public function hello(){echo("invocacion");}
            
    }        
            ?>