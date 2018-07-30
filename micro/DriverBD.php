<?php

class DriverBD
    {
        private $namebase;
		private $servidor;
		private $usuario;
		private $pass;
		private $productosdeSeccion;//Arreglo de productos de  una seccion
		private $sessionfalsa;
    
        public function __construct(){
            $this->namebase="motoraic_motocicletas";
			$this->servidor="204.197.244.149";
			$this->usuario="motoraic_rueda";
			$this->pass="3DMAXstudio@";
			$this->productosdeSeccion=array();
			$this->sessionfalsa='mlg35lim643ihu6eh9rajpdvh5';
			echo("Ingreso Correcto al constructor equivocado");
        }
        
        
        
        public function addtoCar($i,$c,$p){
           echo("Llamada incorrecta de Driver  borrela");
				$enlace=mysqli_connect($this->servidor, $this->usuario, $this->pass,$this->namebase);
                if(!$enlace)echo mysqli_connect_error();
				$consulta="insert into carros(idsesion,cantidad,idproduc)values('".$i."',".$c.",".$p.")";
				$resultado= mysqli_query($enlace,$consulta);
				mysqli_close($enlace);
        }
        
         public function &setCarro($idsession){
             echo("Llamado a  uUNA  FUNCION INCORRECTA...BORRELA");
            //$idsession='b2v2qlga52jqulupv95eherm67';//SE DEBE MODIFICAR 
            $enlace=mysqli_connect($this->servidor, $this->usuario, $this->pass,$this->namebase);
			$bd_seleccionada=mysqli_select_db($enlace,$this->namebase);
			if(!$enlace)echo mysqli_connect_error();
			$consulta3="SELECT carros.idsesion,carros.cantidad,carros.idproduc,productos.id,productos.nombre,productos.imagen,productos.precio,carros.id FROM carros, productos WHERE(carros.idproduc=productos.id)AND(carros.idsesion='".$idsession."')";
			$resultado= mysqli_query($enlace,$consulta3);
			$row = mysqli_fetch_array($result, MYSQLI_NUM);
			while($row =mysqli_fetch_array($resultado,MYSQLI_NUM)){
					$lacompra=null;
					$lacompra= new Shika($row[3],$row[4],$row[5],$row[6],$row[1]);//los indices modificar
					$this->addListadeCompras($lacompra);
				}
			mysqli_free_result($resultado);
			mysqli_close($enlace);
			return $this->productosdeSeccion;
			
            }
        
         public function addListadeCompras($compra1){$this->productosdeSeccion[]=$compra1;
    
         }
         
         public function saludar($cadena){echo($cadena);}
       
        
    }

?>