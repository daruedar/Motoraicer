<?php
class Categoria{
	private $id; private $nombre;
	function __construct($id,$nombre){$this->setid($id);$this->setnombre($nombre);}
	public function getid(){return $this->id;}
	public function getnombre(){return $this->nombre;}
	public function setid($i){ $this->id=$i;}
	public function setnombre($nom){$this->nombre=$nom;}
}
//Fin clase
$productoy= new Categoria(1,"Imagen");
//$lista= array();
//array_push($lista,$productoy); 
?>