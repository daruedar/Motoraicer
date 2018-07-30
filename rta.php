<?php
  // Mi función de inicio de sesión admite la gestión de marcas de tiempo
    function mi_inicio_de_sesión() {
        session_start();
        // No permitir usar un ID de sesión demasiado antiguo
        if (true) {
            session_destroy();
            session_start();
        }
       
    }

    // Mi función de regeneración de ID de sesión
    function mi_regeneración_de_id_de_sesion() {
            // Llamar a session_create_id() mientras la sesión está activa para 
            // asegurarse de que no haya colisiones.
        //if (session_status() != PHP_SESSION_ACTIVE) {session_start();}
        // ADVERTENCIA: ¡No utilizar nunca cadenas confidenciales para el prefijo!
    $nuevo_id = session_create_id('miprefijo-');
    // Establecer la marca de tiempo de borrado. Los datos de la sesión no deben eliminarse inmediatamente.
    //$_SESSION['deleted_time'] = time();
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

// Asegurarse de que 'use_strict_mode' está habilitado.
// 'use_strict_mode' es obligatorio por razones de seguridad.
ini_set('session.use_strict_mode', 1);
//function saludar(){echo("Esto es esparta");}
mi_inicio_de_sesión();
//echo(session_id());
// EL ID de sesión debe regenerarse cuando
//  - El usuario inicia la sesión
//  - El usuario cierra la sesión
//  - Ha transcurrido un cierto perido de tiempo
mi_regeneración_de_id_de_sesion();
//echo ini_get('display_errors');
//echo(session_id());
/*$estado = $_GET['transactionState'];
$estadofinal='';
$valor=$_GET['TX_VALUE'];
$metod=$_GET['lapPaymentMethod'];
$descri=$_GET['description'];
$referencia=$_GET['transactionId'];*/



?>

