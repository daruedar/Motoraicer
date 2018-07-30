<?php
class Shika
    {
        private $imagen;
        private $nombre;
        private $precio;
        private $cantidad;
        private $subtotal;
        private $idpro;
        private $idcar;
 
        public function __construct($id,$nom,$img,$pre,$cant,$idcar){
            $this->idpro=$id;
            $this->nombre=$nom;
            $this->imagen=$img;
            $this->precio=$pre+0;
            $this->cantidad=$cant+0;
            $this->idcar=$idcar;
            $this->subtotal=($pre*$cant)+0;
        }
       
        
        
        
        public function getImagen()  {echo($this->imagen);}
        public function getNombre()  {return $this->nombre;}
        public function getPrecio()  {return $this->precio;}
        public function getCantidad(){return $this->cantidad;}
        public function getSubtotal(){return $this->subtotal;}
        public function getIdCar()   {echo($this->idcar);}
        
    }

?>