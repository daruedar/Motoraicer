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
function mi_regeneración_de_id_de_sesión() {
    // Llamar a session_create_id() mientras la sesión está activa para 
    // asegurarse de que no haya colisiones.
    if (session_status() != PHP_SESSION_ACTIVE) {session_start();}
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
mi_inicio_de_sesión();
echo(session_id());
// EL ID de sesión debe regenerarse cuando
//  - El usuario inicia la sesión
//  - El usuario cierra la sesión
//  - Ha transcurrido un cierto perido de tiempo
mi_regeneración_de_id_de_sesión();

// Escribir código útil

/*
$value='';
setcookie("PHPSESSID", $value);
//setcookie("PHPSESSID", $value);
session_start();
echo(session_id());
echo('<br>La cookie');
echo($_COOKIE['PHPSESSID']);
session_destroy();

echo(session_id());
echo('<br>La cookie');
echo($_COOKIE['PHPSESSID']);*/
/*
echo("La vieja");
echo(session_id());
session_destroy();
session_regenerate_id() ;
session_start();
$m=session_id();
echo("La nueva");
echo($_COOKIE['PHPSESSID']);echo("</br>");
echo($_COOKIE['PHPSESSID']);
echo("</br>");
echo($_COOKIE['PHPSESSID']);
echo("</br>");
echo($_COOKIE['PHPSESSID']);
echo("</br>");
echo($_COOKIE['PHPSESSID']);
$cookie_name='PHPSESSIDT';
$value='vcxxvxvxvxcvxv';
setcookie("PHPSESSID", $value);


echo("</br></br></br>");
echo($_COOKIE['PHPSESSID']);*/
//echo("Intento1");
//echo(session_id()); echo('<br>');
//sleep(10);
//echo("Intento2");
//session_id("kjsdhjsdhjsdhuisdfsdl");
//echo "Your session identification number is ".session_id();
//echo(session_id()); echo('<br>');
 /*session_write_close().
 session_destroy();
 echo(session_id()); echo('<br>');
 session_regenerate_id() ;
 session_start();
 echo(session_id());
 echo('<br>');
echo(date('Y-m-d'));
date_default_timezone_set('America/Bogota');
$hora=date('H:i:s');
echo($hora);*/
//echo(count($_COOKIE));

 //echo('<br>');
 
 
// $hora=date('H:i:s');
//echo($hora)
 //echo('<br>');
 //session_name('idsess');
 //echo($_COOKIE['idsess']);

?>
<script type="text/javascript">
    
    //var currentState = history.state;
    //var c = window.history.length;
    //var c=5;
    //var quinta = window.history[4];
    /*window.onpopstate = function(event) {
  alert("location: " + document.location + ", state: " + JSON.stringify(event.state));};*/

//history.pushState({page: 1}, "title 1", "?page=1");
//history.pushState({page: 2}, "title 2", "?page=2");
//history.replaceState({page: 3}, "title 3", "?page=3");
//history.back(); // alerts "location: http://example.com/example.html?page=1, state: {"page":1}"
//history.back(); // alerts "location: http://example.com/example.html, state: null
//history.go(2);  // alerts "location: http://example.com/example.html?page=3, state: {"page":3}
    //var sal="vacio<br>";
    
    
  
    //history.pushState({page: 10}, "title 10", "?page=10");
    //history.pushState({page: 11}, "title 11", "?page=11");
   // var c = window.history.length;
    //document.write(c);
    //history.go(-5);
</script>