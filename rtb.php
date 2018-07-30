<?php
   class Respuesta
    {
        private $var="motoraic_motocicletas";
	
        public function __construct(){
            $this->var="motoraic_motocicletas";
        }
       
       
        public function saludar(){echo($this->var);}
        function mi_inicio_de_sesión() {
            session_start();
                // No permitir usar un ID de sesión demasiado antiguo
            //if (true) {session_destroy();session_start();}
       echo(session_id());
        }  
          
        function mi_regeneración_de_id_de_sesión() {
            // Llamar a session_create_id() mientras la sesión está activa para 
            // asegurarse de que no haya colisiones.
            
        
        if (session_status() != PHP_SESSION_ACTIVE) {session_start();}
        
        
        // ADVERTENCIA: ¡No utilizar nunca cadenas confidenciales para el prefijo!
    $nuevo_id = session_create_id('uiyi');
    // Establecer la marca de tiempo de borrado. Los datos de la sesión no deben eliminarse inmediatamente.
    $_SESSION['deleted_time'] = time();
    // Finalizar la sesión
    
    
    session_commit();
    
    
    // Asegurarse de aceptar ID de sesiones definidas por el usuario
    // NOTA: Se debe habilitar 'use_strict_mode' para operaciones normales.
    ini_set('session.use_strict_mode', 0);
    // Establecer el nuevo ID de sesión personalizado
    session_id($nuevo_id);
    // Empezar la sesión con el ID de sesión personalizado
    session_start();
    
   
}
 
          
        function seguridad(){
            
            ini_set('session.use_strict_mode', 1);
        }  
          
          
          
          
          
          
          
          
    }
   


?>