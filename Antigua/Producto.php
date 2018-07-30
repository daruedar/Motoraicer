<?php
class Producto{
	private $name;
	private $imagen;
	private $price;
	private $id;
	function __construct($id,$nombre,$imagen,$precio){
		$this->name=$nombre;
		$this->imagen=$imagen;
		$this->price=$precio;
		$this->id=$id;
	}
		
	public function getId(){return $this->id;}	
	public function getName(){return $this->name;}
	public function getImagen(){return $this->imagen;}
	public function getPrice(){return $this->price;}
	public function setName($nombre){ $this->name=$nombre;}
	public function setImagen($imagen){$this->imagen=$imagen;}
	public function setPrice($precio){$this->price=$precio;}

}
 //$elprod= new Producto(1,'Nombrescdf','imagen.jpg',32000);
 

