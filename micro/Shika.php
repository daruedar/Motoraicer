<?php
class Shika
    {
        private $imagen;
        private $nombre;
        private $precio;
        private $cantidad;
        private $subtotal;
        private $idpro;
 
        public function __construct($id,$nom,$img,$pre,$cant){
            $this->idpro=$id;
            $this->nombre=$nom;
            $this->imagen=$img;
            $this->precio=$pre;
            $this->cantidad=$cant;
            $this->subtotal=($pre*$cant);
            echo("Llamado incorrecto de la funcion");
        }
        public function getImagen()  {echo($this->imagen);}
        public function getNombre()  {echo($this->nombre);}
        public function getPrecio()  {echo($this->precio);}
        public function getCantidad(){echo($this->cantidad);}
        public function getSubtotal(){echo($this->subtotal);}
        
    }

?>