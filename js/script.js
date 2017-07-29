$(document).ready(initEventos);

function initEventos(){
	$("#enviarConsulta").click(checkCampos);
	$("input").keypress(limpiarMensajes);
	$("#consulta").keyup(contarCaracteresConsulta);
	$("#descripcion").keyup(contarCaracteresDescripcion);
	$("#botonEnviarArt").click(function(e){
		e.preventDefault();
		enviarArticulo();
	});
	$("#subirImagen").change(function(){
		var sizeByte = this.files[0].size;
     	var sizekiloByte = parseInt(sizeByte / 1024);
     	$("#msgArchivo").html("");
     	if(sizekiloByte>4096){
     		$("#msgArchivo").html("El tamaño de la imagen excede los 4MB");
     		$("#subirImagen").val("");
     	}

	});
}

function checkCampos(){
	var nombre = $("#nombre").val();
	var apellido = $("#apellido").val();
	var email = $("#email").val();
	var telefono = $("#telefono").val();
	var celular = $("#celular").val();
	var consulta = $("#consulta").val();
	var check=true;

	if(email!=""){
		if(!email.match(/^[a-zA-Z0-9]{2,}@[a-zA-Z0-9]{3,}\.[a-zA-Z0-9]{2,}/)){
			$("#errorEmail").html("Ingrese un E-mail válido");
		}
	}else{
		check=false;
		$("#errorEmail").html("Ingrese un E-mail válido");
	}

	if(apellido==""){
		$("#errorApellido").html("Ingrese un apellido");
		check=false;

	}

	if(telefono!=""){
		if(!telefono.match(/^2[0-9]/)){
			$("#errorTelefono").html("Ingrese un teléfono válido");
			check=false;
		}
	}

	if(celular!=""){
		if(!celular.match(/^09[0-9]{7,7}/)){
			$("#errorCelular").html("Ingrese un celular válido");
			check=false;
		}
	}else{
		$("#errorCelular").html("Ingrese un celular válido");
		check=false;
	}

	if(check==true){
		$("#mensajeEnviado").html("Su consulta se ha enviado correctamente!");
		$("#mensajeEnviado").css("color", "blue");

	}	

}

function limpiarMensajes(){
	$("#errorApellido").text("");
	$("#errorEmail").text("");
	$("#errorTelefono").text("");
	$("#errorCelular").text("");
}

function contarCaracteresConsulta(){
	var cantidad = $("#consulta").val();
	$("#consultaCantCaracteres").text("Caracteres restantes: " + (250 - (cantidad.length)));
	if($("#consulta").val()==""){
		$("#consultaCantCaracteres").text("");
	}

}

function contarCaracteresDescripcion(){
	var cantidad = $("#descripcion").val();
	$("#cantDescripcion").text("Caracteres restantes: " + (180 - (cantidad.length)));
	if($("#descripcion").val()==""){
		$("#cantDescripcion").text("");
	}

}

function enviarArticulo(){
	var check = checkCamposArticulo();
}

function checkCamposArticulo(){
	check=true;
	var codigo = $("#codigo").val();
	var precio = parseInt($("#precio").val());
	var stock = parseInt($("#stock").val());
	var descripcion = $("#descripcion").val();

	if(codigo!=""){
		if(!codigo.match(/^#[0-9]{1,5}/)){
			$("#errorCodigo").html("Código no válido");
			check=false;
		}
	}else{
		check=false;
		$("#errorCodigo").html("Código no válido");
	}

	if(precio==0 || precio<0 || Number.isNaN(precio)){
		$("#errorPrecio").html("Precio no válido");
		check=false;
	}


	if(stock==0 || stock<0 || Number.isNaN(stock)){
		$("#errorStock").html("Stock no válido");
		check=false;
	}

	if(descripcion==""){
		$("#errorDescripcion").html("Ingrese una descripcion");
	}	

	if(check){
		$("#formNuevoArt").submit();
	}				

}





