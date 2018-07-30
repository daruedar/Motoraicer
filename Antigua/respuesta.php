<?php
$value="";
setcookie("PHPSESSID", $value);
//session_start();
//echo(session_id());
header('Location: micro/productos.php');
?>
<html>
	<head>
	</head>
	<body>
	<h1>Respuesta</h1>
	</body>
</html>