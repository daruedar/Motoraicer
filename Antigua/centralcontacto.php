<?php ?>
<div style="width:500px;height:460px;margin-left:230px;zindex:4;float:left;margin-top:180px;position:fixed;">
<h3>
Usted tiene alguna pregunta sobre un producto, una pregunta sobre su pedido, quiere simplemente decirnos su opinión? Estamos aquí para colaborarle.
</h3>
<form class="formcontact" action="ventas.php"method="post">
    <div>
        <div class="col-xs-6" style="float: left,">
            <label for="ex3">Nombres</label>
            <input class="form-control" id="nombre" type="text" name="nombre">
        </div>
        <div class="col-xs-6" style="float: right,">
            <label for="ex3">Apellidos</label>
            <input class="form-control" id="apellido" type="text" name="apellido">
        </div>
  <!---*****************************************************-->
        <div class="col-xs-6" style="float: left,">
             <label for="ex3">Email</label>
                <input class="form-control" id="correo" type="text" name="correo">
        </div>
  
         <div class="col-xs-6" style="float: right,">
             <label for="ex3">Telefono</label>
             <input class="form-control" id="telefono" type="text" name="telefono">
        </div>
   <!---*****************************************************-->
   
        <div class="col-xs-12" style="float: right,">
             <label for="ex3">Mensaje</label>
             <textarea id="mensaje"class="form-group"  name="mensaje"  rows="4" cols="68" style="resize:none;"></textarea>
        </div>
    </div>

     <div class="row-fluid">
			<div class="regPreferences">
							<h5>Preferencia de notificaciones</h5>
							<p>Recibe toda la información de  en tu correo electrónico</p>
							<label>
								<input id="incribirse"  value="true" tabindex="17" checked="checked" type="checkbox">
								&nbsp; Acepto recibir alertas por correo electrónico
							</label>
						</div>
    </div>
    <div style="width:100%;">
        <button type="button" class="btn btn-success" style="width:100%;"onclick="sendform()">Enviar</button>
    </div>
</form> 
</div>

 