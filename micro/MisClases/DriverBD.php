<?php
class DriverBD
    {
        private $namebase="motoraic_motocicletas";
		private $servidor="204.197.244.149";
		private $usuario="motoraic_rueda";
		private $pass="3DMAXstudio@";
		private $productosdeSeccion;//Arreglo de productos de  una seccion
        
        public function __construct(){
            $this->namebase="motoraic_motocicletas";
			$this->servidor="204.197.244.149";
			$this->usuario="motoraic_rueda";
			$this->pass="3DMAXstudio@";
        }
        public function gnbd()  {return $this->namebase;} 
        public function gserv() {return $this->servidor;} 
        public function guser() {return $this->usuario;}
        public function gpass() {return $this->pass;}
        public function saludar($cadena){echo($cadena);}
    }
?>