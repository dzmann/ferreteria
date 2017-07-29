<body>
<br>
<center><span style="font-family: sans-serif; font-size: 25px">Ingreso de artículo</span></center>
<br>

<div class="formularioNuevoArticulo">
<center>
<form id="formNuevoArt"  method="post" action="<?php echo base_url().'index/guardarArticulo'?>" enctype="multipart/form-data">
<table>
	<tr>
		<th>
			<label>Subir imagen (hasta 4 mb):</label>
		</th>
		<th>
			<input class="inputArt" type="file" id="subirImagen" name="subirImagen">
		</th>
		<th style="width: 150px;">
			<label style="color:red" id="msgArchivo"></label>
		</th>
	</tr>
	<tr>
		<th>
			<label>Código: </label>
		</th>
		<th>
			<input class="inputArt"  type="text" id="codigo" name="codigo">
		</th>
		<th>
			<label id="errorCodigo"></label>
		</th>
	</tr>
	<tr>
		<th>
			<label>Precio: </label>
		</th>
		<th>
			<input class="inputArt"  type="text" id="precio" name="precio">
		</th>
		<th>
			<label id="errorPrecio"></label>
		</th>
	</tr>
	<tr>
		<th>
			<label>Stock: </label>
		</th>
		<th>
			<input class="inputArt"  type="text" id="stock" name="stock">
		</th>
		<th>
			<label id="errorStock"></label>
		</th>
	</tr>
	<tr>
		<th>
			<label>Descripción:</label>
		</th>
		<th>
			<textarea class="inputArt"  rows="7" cols="10" maxlength="180" name="descripcion" id="descripcion"></textarea>
			
		</th>
		<th style="width: 200px;">
			<label  id="errorDescripcion"></label>
		</th>
	</tr>
	<tr>
		<th style="text-align: right" colspan="3"> 
			<label id="cantDescripcion"></label>
		</th>
	</tr>
	<tr>
		<th colspan="3" style="align-content: center">
			<button style="font-size: 20px;" id="botonEnviarArt">Enviar</button>
		</th>
	</tr>
</table>
</center>
</form>
</div>





</body>
</html>
