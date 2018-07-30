<?php
//El objetivo de  esta clase es generar pdf. Cuando se crea una instancia, 
//se consultan todos  los productos de la base de datos

class Pdf
    {
        private $namebase;
	    private $servidor;
	    private $usuario;
	    private $pass;

	    public $id;
	    public $nombre;
	    public $imagen;
	    public $precio;
	    
	    private $salida;

        public function __construct(){
        $this->namebase="motoraic_motocicletas";
	    $this->servidor="204.197.244.149";
		$this->usuario="motoraic_rueda";
		$this->pass="3DMAXstudio@";
	
		$this->id= array();
		$this->nombre= array();
		$this->imagen= array();
		$this->precio= array();
		$this->setProductos();
		
		$this->salida= array();
    }
        private function setProductos(){
            $enlace=mysqli_connect($this->servidor, $this->usuario, $this->pass,$this->namebase);
		    $bd_seleccionada=mysqli_select_db($enlace,$this->namebase);
			if(!$enlace)echo mysqli_connect_error();
			$consulta3="SELECT productos.id,productos.nombre,productos.imagen,productos.precio FROM  productos ORDER BY nombre";
			$resultado= mysqli_query($enlace,$consulta3);
			$row = mysqli_fetch_array($resultado, MYSQLI_NUM);
			    while($row =mysqli_fetch_array($resultado,MYSQLI_NUM)){
			        
			            $this->id[]= $row[0];
			            $this->nombre[]= $row[1];
			            $this->imagen[]= $row[2];
			            $this->precio[]= $row[3];
			           
				    }
			mysqli_free_result($resultado);
			mysqli_close($enlace);
        } 
        public function  getProducto($id){
            $aux='';
            for($i=0;$i<count($this->nombre);$i++){
               //echo($this->id[$i]);
               //echo("-----");
               //echo($id);
               //echo("<br>");
               if($this->id[$i]==$id){
                   //echo($this->id[$i]);echo("-----");echo($id);echo("<br>");
                   $aux=$this->id[$i]." ".$this->nombre[$i];
               }
            }
            return $aux;
        }
    }
?>