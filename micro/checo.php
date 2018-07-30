<?php 
    session_start();
    require_once("MisClases/Formulario.php");
    if (isset($_SESSION['subtotal']) and isset($_SESSION['descripcion']) ){
        $sub=$_SESSION['subtotal'];
        $des=$_SESSION['descripcion']; 

        $var= new Formulario();
        $var->showForm($sub);
    }
    else{echo("Ingreso Invalido");}
?>
