<body>
<br>

<center><span style="font-family: sans-serif; font-size: 25px">Ingreso de administrador</span></center>
<br>

<div class="formularioLogin">
<form action="<?php echo base_url().'login/ingresar' ?>" method="post">
	<table>
		<tr>
			<th>
				<label>Usuario:</label>
			</th>	
			<th>
				<label><input class="inputLogin" type="text" name="usuario"></label>
			</th>
		</tr>
		<tr>
			<th>
				<label>Contraseña:</label>
			</th>	
			<th>
				<label><input class="inputLogin" type="password" name="contraseña"></label>
			</th>
		</tr>
		<tr>
			<th colspan="2">
			<br>
				<input style="font-size: 20px" type="submit" name="" value="Entrar">
			</th>
		</tr>
		<tr>
			<th colspan="2">
			<br>
				<label><span style="color: red;"><?php echo $mensaje ?></span></label>
			</th>
		</tr>
		
	
	</table>
	</form>
</div>
</body>




