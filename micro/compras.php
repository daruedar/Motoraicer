<?php
session_start();
$sessionreal=session_id();
include("MisClases/Visitantes.php");
include("MisClases/Pdf.php");
$ip=$_SERVER['REMOTE_ADDR'];
date_default_timezone_set('America/Bogota');
$fecha=date("Y-m-d");
$pagina='Carro de Compras';
$navegador=$_SERVER['HTTP_USER_AGENT'];;
$hora=date('H:i:s');
$prueba = new Visitantes($ip,$fecha,$pagina,$navegador,$hora);
$nombre= new Pdf();
$aux=$nombre->getProducto($_POST['motorepuesto']);
$prueba->reportarb($aux,$_POST['repuestodemoto']);

require_once("MisClases/Compra.php");
$cantidad=$_GET['cantidad'];
$precio=$_GET['precio'];
//Si  Agregaron un  producto    muestre el carro
    if(isset($_POST['motorepuesto']) and isset($_POST['repuestodemoto']) ){
        $idpro=$_POST['motorepuesto'];//Informacion del repuesto
        $idsess=$_POST['repuestodemoto'];//Info de la session
        if (strcmp ($sessionreal , $idsess ) === 0){
            $var= new Compra();
            $var->addtoCar($idpro,1,$sessionreal);
            $var->setCarro($sessionreal);
            $listaCompras=$var->getLista();
            $var->showCar($listaCompras);
        }
    }
    else{//Si no agregaron un producto, miré si en esta session ya existe algun producto
        $var= new Compra();
        $var->setCarro($sessionreal);
        $listaCompras=$var->getLista();//Get los productos de esta session
        $totalProductos=count($listaCompras);//Cantidad de productos en esta session
        //echo($totalProductos);
        //Si no tiene productos en el carro, muestra un mensaje de carro vacio en la pagina sucarro.php
        if($totalProductos==0){header('Location: /sucarro.php');}
        else{$var->showCar($listaCompras);}//Si tiene productos en el carro, pues show
             
        
        
        
    }
    /*if (isset($_GET['motorepuesto']) and isset($_GET['repuestodemoto']) ){
        //Mejore este metodo para no dejar rastro en el navegador, cambiando GET  por POST
            $idpro=$_GET['motorepuesto'];
            $idsess=$_GET['repuestodemoto'];
            if (strcmp ($sessionreal , $idsess ) === 0){
                $var= new Compra();
                $var->addtoCar($idpro,1,$sessionreal);
                $var->setCarro($sessionreal);
                $listaCompras=$var->getLista();
                $var->showCar($listaCompras);
            }
            else{echo("Ingreso No Autorizado");}
        }*/
        
    if(isset($_GET['cantidad']) and isset($_GET['precio'])){
            //echo("Buen Comienzo!");echo("<br>");echo($cantidad);echo("<br>");echo($precio); 
            $cantidad=$_GET['cantidad'];
            $idcarro=$_GET['precio'];
            $var= new Compra();
            $var->setCantidad($idcarro,$cantidad);
            
            $var->setCarro($sessionreal);
            $listaCompras=null;
            sleep(1);
            $listaCompras=$var->getLista();
            $var->showCar($listaCompras);
        }
        
    if(isset($_POST['borrar']) ){
            $idcarro=$_POST['borrar'];
            $var= new Compra();
            $rta=$var->validar($idcarro);
             if (strcmp ($sessionreal , $rta ) === 0)
                {
                    $var->borrarCarro($idcarro);
                    $var->setCarro($sessionreal);
                    $listaCompras=null;
                    sleep(1);
                    $listaCompras=$var->getLista();
                    $var->showCar($listaCompras);
                    
                }
             else{header('Location: ../index.php'); }    
            
        } 
    if(isset($_GET['borrartodo']) ){
            //$idcarro=$_GET['borrar'];
            $var= new Compra();
            $var->limpiarCarro($sessionreal);
            //echo("<script language='javascript'>window.location='https://www.motoraicer.com/index2.php'</script>;");
             header('Location: ../index.php'); 
            //echo("<script language='javascript'>window.location='https://www.motoraicer.com/index.php'</script>;");
        }     
?>
