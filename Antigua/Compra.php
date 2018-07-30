<?php
//Clase en un archivo independiente
class Compra extends Producto{
	private $cantidad;
	private $idcarro;//Toda compra pertenece a un carro y tiene un id propio
	function __construct($id,$nombre,$imagen,$precio,$cantidad,$idcar) {
		parent::__construct($id,$nombre,$imagen,$precio);
		$this->cantidad=$cantidad;
		$this->idcarro=$idcar;
	}
	public function getCantidad(){return $this->cantidad;}	
	public function setCantidad($cantidad){$this->cantidad=$cantidad;}
	
	public function getidcarro(){return $this->idcarro;}	
	public function setidcarro($id){$this->idcarro=$id;}
}
?>


