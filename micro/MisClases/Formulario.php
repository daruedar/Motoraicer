<?php
class Formulario
    {
        private $imagen;
        
        public function __construct(){$this->imagen="nada.jpg";}
        public function showForm($total)  {
        echo('<!DOCTYPE html>');
        echo('<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" style="height: 100%;" lang="en">');
            echo('<head>');
            echo('<link rel="stylesheet" type="text/css" href="css/micro.css" media="all">');
            echo('<link rel="stylesheet" type="text/css" href="css/diegostyle.css" media="all">');
            echo('<link rel="stylesheet" type="text/css" href="../theframework/bootstrap/css/bootstrap.css" media="all">');
            echo('<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">');
            echo('<meta name="viewport" content="width=device-width, initial-scale=1.0">');
            echo('<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">');
            echo('	<meta name="viewport" content="width=device-width,minimum-scale=1,maximum-scale=1">');
            echo('	<script type="text/javascript" src="frameworkjquery/jquery.js"></script>');
            echo('	<script type="text/javascript" src="js/uno.js"></script>');
           
            
            echo('</head>');
            
            echo('<body class="ps-static  checkout-onepage-index" style="position: relative; min-height: 100%; top: 40px;">');
            echo('<div class="wrapper en-lang-class">');
            
             include "motopartes/encabezado.php" ;
    		        
    		 include "motopartes/menumovil.php" ;
    		 
            echo('<div class="main-container col2-right-layout">');
              echo('<div  class="page">');
               echo('<div class="container">');
                echo('<div class="row">');
                 echo('<div class="col-xs-12">');
                  echo('<div class="main">');
                   echo('<div class="row">');
                    echo('<div class="col-main col-xs-12 col-sm-9">');
                     echo('<div class="padding-s">');
                      echo('<div class="page-title"><h1>Checkokxut</h1></div>');
                       echo('<ol class="opc" id="checkoutSteps">');
                        echo('<li id="opc-billing" class="section allow active">');
                         echo('<div class="step-title"><span class="number">2</span><h2>Datos de Facturacion</h2><a href="#">Edit</a></div>');
                          echo('<div id="checkout-step-billing" class="step a-item" style="">');
                           echo('<form id="co-billing-form" action="">');
                            echo('	<div class="fieldset">');
                             echo('<p class="required">*Campo Obligatorio</p>');
                              echo('<ul class="form-list">');
                               echo('<li id="billing-new-address-form" class="scaffold-form">');
                                echo('<div class="fieldset">');
                                 echo('<input name="billing[address_id]" value="" id="billing:address_id" type="hidden">');
                                  echo('<ul>');
                                   echo('<li class="fields">');
                                    echo('<div class="customer-name-middlename">');
                                     echo('<div class="field name-firstname">');
                                      echo('<label for="billing:firstname" class="required"><em>*</em>Primer Nombre</label>');
                                       echo('<div class="input-box">');
                                        echo('<input id="billing:firstname" name="nombre1" title="First Name" maxlength="255" class="input-text required-entry form-control" type="text">');
                                        echo('<div id="mensaje1" style="display:none;z-index:300;">Escriba su nombre</div>');
                                       echo('</div>');
                                     echo('</div>');
                                     echo('<div class="field name-middlename">');
                                      echo('<label for="billing:middlename">Segundo Nombre</label>');
                                      echo('<div class="input-box">');
                                      echo('<input id="billing:middlename" name="nombre2" title="Middle Name/Initial" class="input-text  form-control" type="text">');
                                     echo('</div></div>');
                                     echo('<div class="field name-lastname">');
                                      echo('<label for="billing:lastname" class="required"><em>*</em>Apellidos</label>');
                                      echo('<div class="input-box">');
                                       echo('<input id="billing:lastname" name="apellido" title="Last Name" maxlength="255" class="input-text required-entry form-control" type="text">');
                                       echo('<div id="mensaje2" style="display:none;z-index:300;">Escriba su apellido</div>');
                                  echo('</div></div></div></li>');//Fin del li
                                  echo('<li class="fields">');
                                   echo('<div class="field">');
                                    echo('<label for="billing:company">Nombre Empresa</label>');
                                    echo('<div class="input-box">');
                                     echo('<input id="billing:company" name="billing[company]" title="Company" class="input-text  form-control" type="text">');
                                   echo('</div></div>');
                                   echo('<div class="field">');
                                    echo('<label for="billing:email" class="required"><em>*</em>Correo</label>');
                                    echo('<div class="input-box">');
                                     echo('<input autocapitalize="off" autocorrect="off" spellcheck="false" name="correo" id="billing:email" title="Email Address" class="input-text validate-email required-entry form-control" type="text">');
                                     echo('<div id="mensaje3" style="display:none;z-index:300;">Verifique su correo</div>');
                                  echo('</div></div></li>');
                                  echo('<li class="wide">');
                                   echo('<label for="billing:street1" class="required"><em>*</em>Direccion de Envio</label>');
                                   echo('<div class="input-box">');
                                    echo('<input title="Street Address" name="street" id="billing:street1" class="input-text  required-entry form-control" type="text">');
                                    echo('<div id="mensaje4" style="display:none;z-index:300;">Verifique su direccion</div>');
                                   echo('</div></li><li class="fields"><div class="field">');//Inicia otro li
                                   echo('<label for="billing:region_id" class="required"><em>*</em>Tipo de Documento </label>');
                                    echo('<div class="input-box">');
                                     echo('<select id="doc" name="billing[region_id]" title="State/Province" class="validate-select required-entry form-control" style="" defaultvalue="">');
                                      echo('<option value="" selected="selected">Cedula</option>');
                                      echo('<option value="1">Pasaporte</option><option value="2">Nit</option><option value="2">Otro</option>');
                                     echo('</select>');
                                     echo('<div id="mensaje5" style="display:none;z-index:300;">Seleccione un tipo de documento</div>');
                                     echo('<input id="billing:region" name="billing[region]" title="State/Province" class="input-text required-entry form-control" style="display:none;" type="text">');
                                   echo('</div></div><div class="field"><label for="billing:city" class="required"><em>*</em>Numero Identificacion</label>');
                                   echo('<div class="input-box">');
                                   echo('<input title="City" name="docnum" class="input-text  required-entry form-control" id="billing:city" type="text">');
                                   echo('<div id="mensaje6" style="display:none;z-index:300;">Escriba el numero de documento</div>');
                                  echo('</div></div></li>');
                                  echo('<li class="fields">');
                                   echo('<div class="field">');
                                    echo('<label for="billing:postcode" class="required"><em>*</em>Municipio</label>');
                                    echo('<div class="input-box">');
                                     echo('<input title="Zip" name="municipio" id="billing:postcode" class="input-text validate-zip-international  required-entry form-control" type="text">');
                                     echo('<div id="mensaje7" style="display:none;z-index:300;">Escriba el municipio</div>');
                                    echo('</div></div><div class="field"><label for="billing:country_id" class="required"><em>*</em>Departamento </label>');
                                    echo('<div class="input-box">');
                                     echo('<select name="billing[country_id]" id="dep" class="validate-select form-control" title="Country">');
                                      echo('<option value="An">Antioquia </option><option value="AF">Afghanistan</option><option value="AX">Åland Islands</option>');
                                     echo('</select> ');
                                    echo('<div id="mensaje8" style="display:none;z-index:300;">Seleccione el departamento</div>');
                                  echo('</div></div></li>');
                                  echo('<li class="fields">');
                                   echo('<div class="field">');
                                    echo('<label for="billing:telephone" class="required"><em>*</em>Telefono No</label>');
                                    echo('<div class="input-box">');
                                     echo('<input name="tel" title="Telephone" class="input-text  required-entry form-control" id="billing:telephone" type="text">');
                                     echo('<div id="mensaje9" style="display:none;z-index:300;">Escriba su numero de telefono</div>');
                                  echo('</div></div><div class="field">');
                                  echo('<label for="billing:fax">Celular No</label>');
                                  echo('	<div class="input-box">');
                                   echo('<input name="cel" title="Fax" class="input-text  form-control" id="billing:fax" type="text">');
                                   echo('<div id="mensaje10" style="display:none;z-index:300;">Escriba su numero Celular</div>');
                            echo('</div></div></li></ul></div>	</li></ul>');//Cierre del ul 48
                        /*****************************/
                    echo('	<div class="buttons-set" id="billing-buttons-container">');
                        echo('<button id="thebutton" type="button" title="Continue" class="button" onclick="validarform()"><span><span>Continuar</span></span></button>');
            echo('</div></div></form>	</div>');
            echo('</li>	</ol></div></div></div></div></div></div>	</div></div>');
            include "motopartes/foter.php"; 
            echo('</div></div>');
            
            
            echo('<form class="infoPago2" action="../../pagos.php" method="post">');
            echo('<input class="total" type="hidden" name="total" value="');
            echo($total);
            echo('">');
            echo('<input class="descripcion" type="hidden" name="descripcion" value="">');
            echo('<input class="comprador" type="hidden" name="comprador" value="">');
            echo('<input class="apellido" type="hidden" name="apellido" value="">');
            echo('<input class="correo" type="hidden" name="correo" value="">');
            echo('<input class="direccion" type="hidden" name="direccion" value="">');
            echo('<input class="ciudad" type="hidden" name="ciudad" value="">');
            echo('<input class="telefono" type="hidden" name="telefono" value="">');
            echo('<input class="cedul" type="hidden" name="cedula" value="">');
           
            echo('</form>');
            
            
            echo('</body>');
        echo('</html>');
            
        }
     
    }

?>

    		