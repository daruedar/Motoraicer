<?php
//require_once("rtb.php");
//$objeto= new Respuesta();
//$objeto->seguridad();
//$objeto->mi_inicio_de_sesión();
//$objeto->mi_regeneración_de_id_de_sesión();
//session_regenerate_id();
//echo '¡Hola ' . htmlspecialchars($_COOKIE["PHPSESSID"]) . '!';
$antes=$_COOKIE["PHPSESSID"];
setcookie("PHPSESSID", "2fdfddsddv");
//$sessionAntes=session_id()."id no iniciado porque no hainiciadola  session";
session_start();
session_regenerate_id();
$renew=session_id();
//setcookie("PHPSESSID", "2fdfdgdgdv");  /* expira en una hora */
//$post=$_COOKIE["PHPSESSID"];
//echo($antes."<br>".$renew."<br>");

//echo '¡Hola ' . htmlspecialchars($_COOKIE["PHPSESSID"]) . '!';
?>
<html>
    <head>
    <script type="text/javascript">
        function volar(){ document.formu100.submit();}
            //alert("You could like manipulate");
            //$(document).ready(function() {alert("jQuery esta funcionando !!");});
            //$(function(){$(".pay").submit();});
            // $(".pag").submit();
</script>
        
    </head>
    <body onload="volar()">
        <form action="respuesta.php" method="post" name="formu100">
            <input name="transactionState"    type="hidden"  value="
            <?php echo($_GET['transactionState']);?>
            ">
            <input name="TX_VALUE"    type="hidden"  value="
            <?php echo($_GET['TX_VALUE']); ?>">
            <input name="lapPaymentMethod"    type="hidden"  value="
            <?php echo($_GET['lapPaymentMethod']); ?>">
            <input name="description"    type="hidden"  value="
            <?php echo($_GET['description']); ?>">
            <input name="transactionId"    type="hidden"  value="
            <?php echo($_GET['transactionId']); ?>">
        </form>
    </body>
</html>
