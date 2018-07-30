<?php
include 'micro/MisClases/DriverBD.php';
include 'micro/MisClases/Shika.php';
//require_once("MisClases/Shika.php");
//require_once("MisClases/DriverBD.php");
require_once("micro/MisClases/Producto.php");
$var= new Producto();
$lista=$var->getLista();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" style="height: 100%;" lang="en">
<head>
    <!--**********************EDITAR METADATOS Y PALABRAS CLAVES-->
    
<link href="autenticos/css.css" rel="stylesheet" type="text/css">
<link href="autenticos/translateelement.css"type="text/css" rel="stylesheet" charset="UTF-8" >
<link href="autenticos/buttons.css"rel="stylesheet" type="text/css" >
<link href="autenticos/cd3d4ebe845a93a761b3a60a6ae34052.css"rel="stylesheet" type="text/css"  media="all">
<link href="autenticos/a8d7bbe2916ed0f52877eaeee2bd058b.css"rel="stylesheet" type="text/css"  media="print">
<link rel="stylesheet" type="text/css" href="autenticos/flexslider.css" media="all">
<link rel="stylesheet" type="text/css" href="autenticos/font/css/font-awesome.min.css" media="all">

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="viewport" content="width=device-width,minimum-scale=1,maximum-scale=1">


<script src="autenticos/bat.js" async=""></script>
<script async="" src="autenticos/analytics.js"></script>
<script type="text/javascript" async="" src="autenticos/ga_002.js"></script>
<script type="text/javascript" async="" src="autenticos/114771.js"></script>
<script type="text/javascript" async="" src="autenticos/gate.js"></script>
<script type="text/javascript" src="autenticos/jquery-1.js"></script>
<script type="text/javascript" src="autenticos/superfish.js"></script>
<script type="text/javascript" src="autenticos/scripts.js"></script>

<script type="text/javascript" src="autenticos/prototype.js"></script>
<script type="text/javascript" src="autenticos/ccard.js"></script>
<script type="text/javascript" src="autenticos/validation.js"></script>
<script type="text/javascript" src="autenticos/builder.js"></script>
<script type="text/javascript" src="autenticos/effects.js"></script>
<script type="text/javascript" src="autenticos/dragdrop.js"></script>
<script type="text/javascript" src="autenticos/controls.js"></script>
<script type="text/javascript" src="autenticos/slider.js"></script>
<script type="text/javascript" src="autenticos/js.js"></script>
<script type="text/javascript" src="autenticos/form.js"></script>
<script type="text/javascript" src="autenticos/translate.js"></script>
<script type="text/javascript" src="autenticos/cookies.js"></script>
<script type="text/javascript" src="autenticos/cloud-zoom.js"></script>
<script type="text/javascript" src="autenticos/ga.js"></script>
<script type="text/javascript" src="autenticos/lightbox.js"></script>
<script type="text/javascript" src="autenticos/jquery_002.js"></script>
<script type="text/javascript" src="autenticos/jquery_004.js"></script>
<script type="text/javascript" src="autenticos/jquery_003.js"></script>
<script type="text/javascript" src="autenticos/bootstrap.js"></script>
<script type="text/javascript" src="autenticos/jquery_005.js"></script>
<script type="text/javascript" src="autenticos/jquery.js"></script>
<script type="text/javascript" src="autenticos/jquery_006.js"></script>
<script type="text/javascript" src="autenticos/catalogevent.js"></script>
<script type="text/javascript" src="autenticos/wishlist.js"></script>
<script type="text/javascript" src="autenticos/easytabs.js"></script>
<script type="text/javascript" src="autenticos/carousel.js"></script>
<script src="autenticos/integration-vendors.js"></script>
<script type="text/javascript" src="autenticos/deployment.js"></script>
<script type="text/javascript" charset="UTF-8" src="autenticos/main_es.js"></script>
<script type="text/javascript" charset="UTF-8" src="autenticos/element_main.js"></script>
<script type="text/javascript" src="autenticos/integration.js"></script>
<script type="text/javascript" src="autenticos/conversion.js"></script>
<script type="text/javascript" src="autenticos/element.js"></script>
<script src="autenticos/jquery_002.js"></script>
<script type="text/javascript" src="autenticos/uno.js"></script>
</head>
<body class="ps-static  cms-index-index cms-home" style="position: relative; min-height: 100%; top: 0px;">   
	<div class="wrapper ps-static en-lang-class"><!--1-->
		<noscript><!--1.1-->
        <div class="global-site-notice noscript">
            <div class="notice-inner">
                <p>
                    <strong>JavaScript seems to be disabled in your browser.</strong><br />
                    You must have JavaScript enabled in your browser to utilize the functionality of this website. </p>
            </div>
        </div>
		</noscript>
		
		<div class="page"><!--1.2-->
			<div class="shadow"></div><!--1.2.1  VACIO-->
			<div class="swipe-left"></div><!--1.2.2   VACIO-->
			<?php include "micro/motopartes/menusuperiormovil.php" ?>
			<div class="header-container"><!--1.2.5-->
			    <?php include "micro/motopartes/encabezado.php" ?>
			    <?php //include "micro/motopartes/menumovil.php" ?>
			    <script type="text/javascript"><!--1.2.7-->
				    jQuery(document).ready(function() {
				        var $ = jQuery;var currentUrl = "";
				    if ((navigator.userAgent.match(/iPad/i))) {
				        $('li.level-top a').click(function(){
                     if($(this).parent().hasClass("level1")) return true;if(currentUrl != $(this).attr('href')){currentUrl = $(this).attr('href');return false;}});
				    }});
				
			    </script>
			    <div class="main-container col2-left-layout"><!--1.2.8--><!--El mas denso-->
				    <div class="container">
					    <div class="row">
					    <div class="col-xs-12">
						    <div class="main">
							    <div class="row">
	<!-- Baner  new  -->			<div class="col-main col-xs-12 col-sm-9">
							

<div class="padding-s">
    <div class="account-create">
        <div class="page-title">
            <h1>Crear una Cuenta</h1>
        </div>
        <form action="" method="post" id="form-validate">
            <div class="fieldset">
                <input type="hidden" name="success_url" value="" />
                <input type="hidden" name="error_url" value="" />
                <input type="hidden" name="form_key" value="ldcLqCcSx7tO8OGb" />
                <h2 class="legend">Información Personal</h2>
                <ul class="form-list">
                    <li class="fields">
                        <div class="customer-name-middlename">
                            <div class="field name-firstname">
                                <label for="firstname" class="required"><em>*</em>Primer Nombre</label>
                                <div class="input-box">
                                    <input type="text" id="firstname" name="firstname" value="" title="First Name" maxlength="255" class="input-text required-entry"  />
                                </div>
                            </div>
                            <div class="field name-middlename">
                                <label for="middlename">Segundo Nombre</label>
                                <div class="input-box">
                                    <input type="text" id="middlename" name="middlename" value="" title="Middle Name/Initial" class="input-text "  />
                                </div>
                            </div>
                            <div class="field name-lastname">
                                <label for="lastname" class="required"><em>*</em>Apellidos</label>
                                <div class="input-box">
                                    <input type="" id="lastname" name="lastname" value="" title="Last Name" maxlength="255" class="input-text required-entry"  />
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <label for="email_address" class="required"><em>*</em>correo electrónico</label>
                        <div class="input-box">
                            <input type="email" name="email" id="email_address" value="" title="Email Address" class="input-text validate-email required-entry" />
                        </div>
                    </li>
                    <li class="control">
					    <input type="checkbox" name="is_subscribed" title="Sign Up for Newsletter" value="1" id="is_subscribed" class="checkbox" />
                        <label for="is_subscribed">Inscribirme al boletín</label>
                    </li>
                </ul>
                </div>
                <div class="fieldset">
                    <h2 class="legend">Informaciónde Ingreso</h2>
                    <ul class="form-list">
                            <li class="fields">
                                <div class="field">
                                    <label for="password" class="required"><em>*</em>Password</label>
                                    <div class="input-box">
                                        <input type="text" name="password" id="password" title="Password" class="input-text required-entry validate-password" />
                                    </div>
                                </div>
                                <div class="field">
                                    <label for="confirmation" class="required"><em>*</em>Confirmar Password</label>
                                    <div class="input-box">
                                        <input type="text" name="confirmation" title="Confirm Password" id="confirmation" class="input-text required-entry validate-cpassword" />
                                    </div>
                                </div>
                            </li>
                            <!--
                            <li id="captcha-input-box-user_create">
                                <label for="captcha_user_create" class="required"><em>*</em>Please type the letters below</label>
                                 <div class="input-box captcha">
                                    <input name="captcha[user_create]" type="text" class="input-text required-entry" id="captcha_user_create" />
                                </div>
                            </li>
                            <li>
                                <div class="captcha-image" id="captcha-image-box-user_create">
                                    <img id="captcha-reload" class="captcha-reload" src="https:///skin/frontend/base/default/images/reload.png" alt="Reload captcha" onclick="$('user_create').captcha.refresh(this)">
                                    <img id="user_create" class="captcha-img" height="50" src="https://pe.com/media/captcha/base/9e6ad9e246dff7592dcb67d3e498b778.png"/>
                                        </div>
                                <script type="text/javascript">//<![CDATA[
                                    $('user_create').captcha = new Captcha('https://www..com/captcha/refresh/', 'user_create');
                                //]]></script>
                            </li>-->

                        </ul>
                    <div id="window-overlay" class="window-overlay" style="display:none;"></div>
                    <div id="remember-me-popup" class="remember-me-popup" style="display:none;">
                        <div class="remember-me-popup-head">
                            <h3>What's this?</h3>
                            <a href="#" class="remember-me-popup-close" title="Close">Close</a>
                        </div>
                        <div class="remember-me-popup-body">
                            <p>Checking &quot;Remember Me&quot; will let you access your shopping cart on this computer when you are logged out</p>
                            <div class="remember-me-popup-close-button a-right">
                                <a href="#" class="remember-me-popup-close button" title="Close"><span>Close</span></a>
                            </div>
                        </div>
                    </div>
                    <script type="text/javascript">
//<![CDATA[
    function toggleRememberMepopup(event){
        if($('remember-me-popup')){
            var viewportHeight = document.viewport.getHeight(),
                docHeight      = $$('body')[0].getHeight(),
                height         = docHeight > viewportHeight ? docHeight : viewportHeight;
            $('remember-me-popup').toggle();
            $('window-overlay').setStyle({ height: height + 'px' }).toggle();
        }
        Event.stop(event);
    }

    document.observe("dom:loaded", function() {
        new Insertion.Bottom($$('body')[0], $('window-overlay'));
        new Insertion.Bottom($$('body')[0], $('remember-me-popup'));

        $$('.remember-me-popup-close').each(function(element){
            Event.observe(element, 'click', toggleRememberMepopup);
        })
        $$('#remember-me-box a').each(function(element) {
            Event.observe(element, 'click', toggleRememberMepopup);
        });
    });
//]]>
</script>
                </div>
                <div class="buttons-set">
                    <!--<p class="required">* Required Fields</p>
                    <p class="back-link"><a href="https://www..com/customer/account/login/" class="back-link"><small>&laquo; </small>Back</a></p>-->
                    <button type="submit" title="Submit" class="button"><span><span>Enviar</span></span></button>
                </div>
            </form>
            <script type="text/javascript">
            //<![CDATA[
                var dataForm = new VarienForm('form-validate', true);
                    //]]>
            </script>
    </div>
</div>






















								
							

								    </div>

							        <?php include "micro/motopartes/menuizq3.php" ?>
							    
							    </div><!--Fin de clase row-->
	                        </div><!--Fin de clase main-->
	                    </div><!--Fin de clase col-xs-12-->
	                    </div><!--Fin de clase row-->
                    </div><!--Fin de clase container-->
                </div><!--main-container   El mas denso-->
		
		
			 <?php include "micro/motopartes/foter.php" ?>
		</div><!--Fin del Page-->
	</div>
    <?php //include "micro/motopartes/ventas.php" ?>
	
	
</body>

</html>


















								
								
    				
				
				
								
					
						