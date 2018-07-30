<?php
$nombre = $_POST['nombre']; 
$apellido=$_POST['apellido'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];
$mensaje=$_POST['mensaje'];

$mensajeX = "Este mensaje fue enviado por " . $nombre ."  ".$apellido. " \r\n";
$mensajeX .= "Su e-mail es: " . $correo . " \r\n";
$mensajeX .= "Telefono No" . $telefono . " \r\n";
//$mensaje .= "aficiones " . $_POST['comentarios'] . " \r\n";
//$mensaje .= "que opinas de nuestra pagina" . $_POST['GrupoOpciones2'] . " \r\n";
$mensajeX .="El mensaje es: ".$mensaje . " \r\n";
$mensajeX .= "Enviado el " . date('d/m/Y', time());


$para = 'info@motoraicer.com';
$asunto = 'Visitante de la  pagina';

  // Please use or modify for any purpose but leave this notice unchanged.
   $cabecera  = "MIME-Version: 1.0\n";
   $cabecera .= "Content-type: text/plain; charset=iso-8859-1\n";
   $cabecera .= "X-Priority: 3\n";
   $cabecera .= "X-MSMail-Priority: Normal\n";
   $cabecera .= "X-Mailer: php\n";
   //$headers .= "From: \"".$fromname."\" <".$fromaddress.">\n";

$cabecera="From: info@motoraicer.com";
//$cabecera .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

mail($para, $asunto, utf8_decode($mensajeX),$cabecera); 

$para      = 'info@motoraicer.com';
$titulo    = 'Servicio al Cliente Motoraicer';
$mensaje   = 'Hola';
$cabeceras = 'From: daruedar@hotmail.com' . "\r\n" .
    'Reply-To: ventas@motoraicer.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

//mail($para, $titulo, $mensajeX, $cabeceras);




header('Location: amortiguadoresparamoto.php');

//echo("Sigote");
//echo ($nombre);

?>