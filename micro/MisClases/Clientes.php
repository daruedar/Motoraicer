<?php
/*
Esta clase tiene como objetivo,  save la customer's information in table Clientes
Quien usa esta clase es el archivo pagos.php*/

require_once("DriverBD.php");
class Clientes
    {
        private $cadena;
        public function __construct(){$this->cadena="2";}
        public function addCliente($a,$b,$c,$d,$e,$f,$g,$h,$i,$j){
                $var=new DriverBD();
            	$enlace=mysqli_connect($var->gserv(), $var->guser(), $var->gpass(),$var->gnbd());
                if(!$enlace)echo mysqli_connect_error();
				$consulta="insert into clientes(nombre,cedula,direccion,telefono,correo,pass,idcar,ip,fecha,hora)values('"
				.$a."','"
				.$b."','"
				.$c."','"
				.$d."','"
				.$e."','"
				.$f."','"
				.$g."','"
				.$h."','"
				.$i."','"
				.$j."'"
				
				.")";
				//echo($consulta);
				$resultado= mysqli_query($enlace,$consulta);
				mysqli_close($enlace);
            }
       
       	
           
    }//Fin Clase
 
?>