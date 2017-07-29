<!DOCTYPE html>
<html>
<head style="background-color: #A4A4A4">
	<title>Inicio</title>
	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'css/estilos.css'?>" />
	<script src="<?php echo base_url().'js/jquery.js'?>" type="text/javascript"></script>   
	<script src="<?php echo base_url().'js/script.js'?>" type="text/javascript"></script>   
	

</head>
<body>
<header>
	<center><a href="<?php echo base_url().'index/'?>"><img src="<?php echo base_url().'imagenes/header.png'?>"></a></center>

<div id="header">

	<ul class="nav">
		<li><a href="<?php echo base_url().'index/nosotros'?>">Nosotros</a></li>
		<li><a href="<?php echo base_url().'index/mision'?>">Misión</a></li>
		<li><a href="<?php echo base_url().'index/sucursales'?>">Sucursales</a></li>
		<li><a href="">Presupuestos</a>
			<ul>
				<li><a href="<?php echo base_url().'index/presupuesto'?>">Pedí tu presupuesto</a></li>
			</ul>
		</li>
	</ul>

	<ul class="nav2">
		
		<?php
			if($this->session->userdata('usuario')){
			
			echo "<li><a href='".base_url()."index/nuevoArticulo'>Subir nuevo artículo</a></li>";
			}
		?>
		
		<li>
		<?php 

			
			if($this->session->userdata('usuario')){
				echo "<span style='color:green;'>Admin Logueado</span>";
				echo "<a href='".base_url()."login/salir'>Salir</a>";
			}else{
				echo "<a href='".base_url()."login/index'>Login</a>";
			}

		?>


		</li>
	</ul>	
</div>
</header>

