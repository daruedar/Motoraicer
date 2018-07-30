<?php //include 'encabezado.php';//ESTE INCLUDE NO ES NECESARIO, FALTA DEPURACION
session_start();
require_once("micro/MisClases/Clientes.php");
//require_once("micro/MisClases/Visitantes.php");
$var= new Clientes();


$nam= $_POST['comprador']." ".$_POST['apellido'];
$ced=$_POST['cedula'];
$dir=$_POST['direccion'];
$tel=$_POST['telefono'];
$email=$_POST['correo'];
$pass="repuestospassword";
$idcar=session_id();
$ip=$_SERVER['REMOTE_ADDR'];
$fecha=date("Y-m-d");
date_default_timezone_set('America/Bogota');
$hora=date('H:i:s');
$pagos='Pagos';
//$navegador=$_SERVER['HTTP_USER_AGENT'];
//$visitador=new Visitante($ip,$fecha,$pagina,$navegador,$hora);
//$visitador->compraron($ip,$fecha,$pagina,$navegador,$hora,$_SESSION['descripcion'],$_SESSION['subtotal']);

if(isset($_POST['apellido'])){
    $var-> addCliente($nam,$ced,$dir,$tel,$email,$pass,$idcar,$ip,$fecha,$hora);
    
   // session_destroy();
}


//$apikey="82EZgG6STxXO8emz3F0X12Fomi";
//$merchantId="536834";
//$referenceCod=session_id();
$amount=$_POST['total'];
$currency="COP";
$descrip=substr($_SESSION['descripcion'],0,110);

//$apikey="4Vj8eK4rloUd272L48hsrarnUA";//Cuando estoy en modo de pruebas
$apikey="82EZgG6STxXO8emz3F0X12Fomi";//Modo de produccion

//$merchantId="508029";//Cuando estoy en modo de pruebas
$merchantId="536834";//Cuando estoy en modo produccion

$aux= substr(session_id(),0,8);//El $referenceCod se compone de los diez primeros caracteres de la session_id- la fecha-la hora
$referenceCod=$aux.date("FdY").date("hms");

//$amount=$_POST['total'];
//$currency="COP";

$signatu=$apikey."~".$merchantId."~".$referenceCod."~".$amount."~".$currency;
$signature= md5($signatu);

//$accountId="512321";//Cuando estoy en modo de pruebas
$accountId="538848";//Cuando estoy en modo Produccion

//$destino="https://sandbox.gateway.payulatam.com/ppp-web-gateway/";//Modo Pruebas
$destino="https://checkout.payulatam.com/ppp-web-gateway-payu";//modo produccion

	
?>
<html>
    <head>
        
        <script type="text/javascript">


function jutsudeinvocacion(){ document.formulario1.submit();}
    //alert("You could like manipulate");
    //$(document).ready(function() {alert("jQuery esta funcionando !!");});
    //$(function(){$(".pay").submit();});
    // $(".pag").submit();
  
   

</script>
    </head>
    
    <body onload="jutsudeinvocacion();">
<form  name="formulario1" class="pag" method="post" action="<?php echo($destino); ?>">
  <input name="merchantId"    type="hidden"  value="<?php echo($merchantId); ?>"   >
  <input name="referenceCode" type="hidden"  value="<?php echo($referenceCod); ?>" >
  <input name="description"   type="hidden"  value="<?php echo ($descrip); ?>"  >
  <input name="amount"        type="hidden"  value="<?php echo ($_POST['total']);?>"   >
  <input name="tax"           type="hidden"  value="0"  >
  <input name="taxReturnBase" type="hidden"  value="0" >
  <input name="signature"     type="hidden"  value="<?php echo($signature); ?>" >
  <input name="accountId"     type="hidden"  value="<?php echo($accountId); ?>" >
  <input name="currency"      type="hidden"  value="COP" >
  <input name="payerFullName"      type="hidden"  value="<?php echo ($_POST['comprador'].' '); echo($_POST['apellido']); ?>" >
  <input name="payerDocument"    type="hidden"  value="<?php echo($_POST['cedula']); ?>" >
  <input name="buyerEmail"    type="hidden"  value="<?php echo($_POST['correo']);?>" >
  <input name="shippingAddress"    type="hidden"  value="<?php echo($_POST['direccion']);?>" >
  <input name="billingAddress"    type="hidden"  value="<?php echo($_POST['direccion']);?>" >
  
  
  <input name="shippingCity"    type="hidden"  value="<?php echo($_POST['ciudad']);?>" >
  <input name="shippingCountry"    type="hidden"  value="CO" >
 
  <input name="test"    type="hidden"  value="0" ><!--O EN PRODUCCION , 1 EN PRUEBAS-->
  <input name="mobilePhone"    type="hidden"  value="<?php echo($_POST['telefono']);?>" >
  <input name="telephone"    type="hidden"  value="<?php echo($_POST['telefono']);?>" >
  <input name="officeTelephone"    type="hidden"  value="<?php echo($_POST['telefono']);?>" >
  <input name="responseUrl"    type="hidden"  value="http://www.motoraicer.com/rtc.php" >
  <input name="confirmationUrl"    type="hidden"  value="http://www.motoraicer.com/confirmation.php" >
</form>

</body>
</html>
