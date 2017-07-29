
<div style="position: relative; margin-top:4% ; z-index: 5">
<?php foreach($articulos as $a):?>
<div class="articuloLista">
<table class="tablaGaleria">

<tr>
	<td>
		<img style="width: 250px; height: 250px" class="imagen_articulo" src="<?php echo base_url().'imagenes/'.$a['imagen'] ?>">
	</td>
</tr>
<tr>
	<td style="padding-bottom: 4px;">
		Codigo: <?= $a['codigo'];?>

	</td>
</tr>
<tr>
	<td style="color:green; font-size: 18px;"">Precio: $<?= $a['precio'];?></td>
</tr>

<tr>
	<td style="padding: 1px; width: 250px; height: 80px;"><?= $a['descripcion'];?></td>
</tr>

</table>
</div>
<?php endforeach ?>

<center><p id="paginacion"><?= $paginacion ?></p></center>
</div>


