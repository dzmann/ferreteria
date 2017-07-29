<body>
<br><br>
<div class="contenedor">
<div class="formulario">

	<center><span style="font-family: sans-serif; font-size: 25px">Haga su consulta</span></center>
	<br><br>
	
	

	<table style="position: relative; left:30%;">
		<tr>
			<th>
				<label>Nombre: </label>
			</th>
			<th>
				<input class="inputC"  type="text" maxlength="20" name="nombre">
			</th>
			<th>
				<label class="celdaMsgP" id="errorNombre"></label>
			</th>
		</tr>
		<tr>
			<th>
				<label>Apellido: </label>
			</th>
			<th>
				<input class="inputC" type="text" maxlength="30" name="apellido">
			</th>
			<th>
				<label class="celdaMsgP" id="errorApellido"></label>
			</th>
		</tr>
		<tr>
			<th>
				<label>E-mail: </label>
			</th>
			<th>
				<input class="inputC" id="email" type="text" name="email">
			</th>
			<th>
				<label class="celdaMsgP" id="errorEmail"></label>
			</th>
		</tr>
		<tr>
			<th>
				<label>Teléfono: </label>
			</th>
			<th>
				<input class="inputC" id="telefono" type="text" name="telefono">
			</th>
			<th>
				<label class="celdaMsgP" id="errorTelefono"></label>
			</th>
		</tr>

		<tr>
			<th>
				<label>Celular: </label>
			</th>
			<th>
				<input class="inputC" id="celular" type="text" name="celular">
			</th>
			<th>
				<label class="celdaMsgP" id="errorCelular"></label>
			</th>
		</tr>
		<tr>
			<th>
				<label>Consulta:</label>
			</th>
			<th>
				<textarea maxlength="250" style="width: 300px; height: 190px" id="consulta"></textarea>
			</th>
			<th>
				<p class="celdaMsgP" id="consultaCantCaracteres"></p>
			</th>
		</tr>
		<tr>
			<th colspan="3" style="align-content: right" class="celdaMsgP">
				<p id="mensajeEnviado"></p>
			</th>
		</tr>
		<tr>
			<th colspan="3" style="align-content:center">
				<button  id="enviarConsulta">Enviar</button>
			</th>
		</tr>

	</table>
</div>
</div>
</body>

		

	
