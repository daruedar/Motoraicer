<?php
//El objetivo de  esta clase es monitorear  a todos los visitantes de  todas  las  paginas
//Para temas  de estadisticas

class Visitantes{
    private $saludo;
    private $namebase;
	private $servidor;
	private $usuario;
	private $pass;
	
	private $ip;
	private $fecha;
	private $pagina;
	private $navegador;
	private $hora;

    
    public function __construct($ip,$fecha,$pagina,$navegador,$hora){
        $this->saludo="Pagos";//no editar
        $this->namebase="motoraic_motocicletas";
	    $this->servidor="204.197.244.149";
		$this->usuario="motoraic_rueda";
		$this->pass="3DMAXstudio@";
		
		$this->ip=$ip;
		$this->fecha=$fecha;
		$this->pagina=$pagina;
		$this->navegador=$navegar;
		$this->hora=$hora;
	
		//$this->addVisitante($ip,$fecha,$pagina,$navegador,$hora);
		//$this->reportar($ip,$fecha,$pagina,$navegador,$hora);
	
		
    }
     public  function reportar(){
         $cadena='Visitante en: '.$this->pagina;
         $mensaje="IP:".$this->ip."\nFecha:".$this->fecha."\nPagina:".$this->pagina."\n Hora:".$this->hora;
         mail('info@motoraicer.com', $cadena, $mensaje);
         
     }
     
    public  function reportarb($producto,$ses){
        $cadena='Visitante en: '.$this->pagina;
        $mensaje="IP:".$this->ip."\nFecha:".$this->fecha."\nPagina:".$this->pagina."\n Hora:".$this->hora."\n".$producto."\n".$ses;
        mail('info@motoraicer.com', $cadena, $mensaje);
         
     }
     
     /*
     public  function compraron($ip,$fecha,$pagina,$navegador,$hora,$descri,$total){
         $cadena='Visitante en: '.$pagina;
         $mensaje="IP:".$ip."\nFecha:".$fecha."\nPagina:".$pagina."\n Hora:".$hora."\n Descripcion:".$descr."\n Total:".$total;
         mail('info@motoraicer.com', $cadena, $mensaje);
         
     } */
     
      public function addVisitante($ip,$fecha,$pagina,$navegador,$hora){
            	$enlace=mysqli_connect($this->servidor, $this->usuario, $this->pass,$this->namebase);
                if(!$enlace)echo mysqli_connect_error();
				$consulta="insert into visitantes(ip,fecha,pagina,navegador,hor)values('".$ip."','".$fecha."','".$pagina."','".$navegador."','".$hora."')";
				$resultado= mysqli_query($enlace,$consulta);
				mysqli_close($enlace);
            }
      
   
        
        
    
}

?>