<?php 
require("MisClases/DriverBD.php");
$nombre=$_POST['name'];
$correo=$_POST['email'];
$telefono=$_POST['telephone'];
$mensaje=$_POST['comment'];
$year=date('Y');
$mes=date('n');
$dia=date('j');
$hora=date('g');
$minutos=date('i');
$segundos=date('s');
$fecha=$year."-".$mes."-".$dia." ".$hora.":".$minutos.":".$segundos;
//$fecha=$year."".$mes."".$dia." ".$hora."".$minutos."".$segundos;

$var= new DriverBD();
$enlace=mysqli_connect($var->gserv(), $var->guser(), $var->gpass(),$var->gnbd());
if(!$enlace)echo mysqli_connect_error();
$consulta="insert into contacto(nombre,correo,telefono,mensaje,fecha)values('".$nombre."','".$correo."','".$telefono."','".$mensaje."','".$fecha."')";

$resultado= mysqli_query($enlace,$consulta);
mysqli_close($enlace);
header("Location: ../index.php");
        


//echo($nombre.$correo.$telefono.$mensaje);
/*echo("<br>");
echo($correo);
echo("<br>");
echo($telefono);
echo("<br>");
echo($mensaje);*/
?>