<div style="width:800px;height:430px; margin-top:20px;margin-left:100px;">
	<div style="width:33%;float:left;margin-left:10px;height:1020px;">
		<button type="button" style="display:block;width:100%;padding:10px 16px;font-size:18px;line-height:1.333;border-radius:6px;background-color:#5bc0de;border-color:#46b8da;margin-bottom:0;font-weight:normal;text-align:center;vertical-align:middle;cursor:pointer;text-transform:none;overflow:visible;"> Datos de Facturación</button>
		<form>
			<br><input id="itNombre" class="nombreCliente" placeholder="Nombres" maxlength="100" type="text" style="color:#999;opacity:1;height:46px;padding:10px 16px;font-size:18px;line-height:1.33;border-radious:6px;display:block;width:100%">
			<div id="mensaje1" style="display:none;">Escribe tu nombre</div>
			<br><input id="itApellido" class="apelli" placeholder="Apellidos" maxlength="25" type="text" style="height:46px;padding:10px;16px;font-size:18px;line-height:1.333;border-radius:6px;display:block;width:100%;">	
			<div id="mensaje2" style="display:none;">Escribe tu apellido</div>
			<br><input  id="itCorreo"class="corre" placeholder="Correo electrónico" maxlength="100" type="email" style="color:#999;opacity:1;height:46px;padding:10px 16px;font-size:18px;line-height:1.33;border-radious:6px;display:block;width:100%">
			<div id="mensaje3" style="display:none;">Escribe tu correo</div>
			<br><input id="itCedu" class="cedu" placeholder="Cédula de ciudadania" maxlength="100" type="text" style="color:#999;opacity:1;height:46px;padding:10px 16px;font-size:18px;line-height:1.33;border-radious:6px;display:block;width:100%">
			<div id="mensaje4" style="display:none;">Escribe tu cedula</div>
	</div>

	<div style="width:60%;float:right;margin-left:37px;">
		<div style="width:50%;float:left;">
			<button type="button" style="display:block;width:97%;padding:10px 16px;font-size:18px;line-height:1.333;border-radius:6px;background-color:#5bc0de;border-color:#46b8da;margin-bottom:0;font-weight:normal;text-align:center;vertical-align:middle;cursor:pointer;text-transform:none;overflow:visible;"> Datos de Envio</button>
			<div id="mensaje5" style="display:none;">Selecciona un departamento</div>
			<div class="form-group" style="width:100%;height:90px;"><br>
				<div class="col-sm-8">
					<select id="department" name="department" class="form-control input-lg esparta" onchange="dep();" style="margin-left:-15px;width:230px;">
						<option value="" selected="selected">Departamento:</option>
						<option value="AN">ANTIOQUIA</option>
						<option value="AR">ARAUCA</option>
						<option value="AT">ATLANTICO</option>
						<option value="BL">BOLIVAR</option><option value="BY">BOYACA</option><option value="CA">CAUCA</option><option value="CE">CESAR</option><option value="CH">CHOCO</option><option value="CL">CALDAS</option><option value="CO">CORDOBA</option><option value="CQ">CAQUETA</option><option value="CS">CASANARE</option><option value="CU">CUNDINAMARCA</option><option value="GN">GUAJIRA</option><option value="GV">GUAVIARE</option><option value="HU">HUILA</option><option value="MA">MAGDALENA</option><option value="ME">META</option><option value="NA">NARIÑO</option><option value="NS">NORTE DE SANTANDER</option><option value="PU">PUTUMAYO</option><option value="QD">QUINDIO</option><option value="RI">RISARALDA</option><option value="ST">SANTANDER</option><option value="SU">SUCRE</option><option value="TO">TOLIMA</option><option value="VC">VALLE</option>
					</select>
				</div>
				
			</div>
			
			<input  id="itAddress"class="address"placeholder="*Direccion:" maxlength="100" type="text" style="margin-top:-19px;color:#999;opacity:1;height:46px;padding:10px 16px;font-size:18px;line-height:1.33;border-radious:6px;display:block;width:80%">
			<div id="mensaje7" style="display:none;">Ingresa tu dirección</div>
		</div>
		<div style="float:right;width:50%"><br><br><br>
		<div id="mensaje6" style="margin-top:9px;z-index:5;display:none;">Escribe tu ciudad</div>
		<input id="itCity" class="city" placeholder="Ciudad" maxlength="25" type="text" style="margin-top:8px;height:46px;padding:10px;16px;font-size:18px;line-height:1.333;border-radius:6px;display:block;width:80%;">
		<br><input id="itPhone" class="phone" placeholder="*No Telefono:" maxlength="100" type="text" style="color:#999;opacity:1;height:46px;padding:10px 16px;font-size:18px;line-height:1.33;border-radious:6px;display:block;width:80%">	
		<div id="mensaje8" style="display:none;">Ingresa tu número de telefono</div>
		<br>
		<!--<button onclick="hacercompra()" type="button" style="display:block;width:80%;padding:10px 16px;font-size:18px;line-height:1.333;border-radius:6px;background-color:#5bc0de;border-color:#46b8da;margin-bottom:0;font-weight:normal;text-align:center;vertical-align:middle;cursor:pointer;text-transform:none;overflow:visible;">realizar Pago</button>-->
		<button id="thebutton"  type="button" style="display:block;width:80%;padding:10px 16px;font-size:18px;line-height:1.333;border-radius:6px;background-color:#5bc0de;border-color:#46b8da;margin-bottom:0;font-weight:normal;text-align:center;vertical-align:middle;cursor:pointer;text-transform:none;overflow:visible;">realizar Pago</button>
		
		<br><br><br><br>
		</div>
		
		</form>
	
	
	</div>
	
		
</div>