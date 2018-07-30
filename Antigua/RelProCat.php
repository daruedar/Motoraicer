<?php
//Clase para almacenar   en un array de estos objetos todas las motos
//de cada producto, diseñada por Diego Rueda  en 08/2017
 class RelProCat{
	private $idproducto;
	private $nameproducto;
	private $idmoto;
	public $namemoto;
	function __construct($idp,$p,$idm,$m)
		{	$this->idproducto=$idp;
			$this->nameproducto=$p;
			$this->idmoto=$idm;
			$this->namemoto=$m;
		}
	public function  getName(){$salida=$this->namemoto;return $salida;}
	public function  getIdp(){$salida=$this->idproducto;return $salida;}
	public function  getIdm(){$salida=$this->idmoto;return $salida;}
    }//fIN cLASE

?>