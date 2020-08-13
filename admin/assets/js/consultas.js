$(buscar_datos());

function buscar_datos(consulta){
	$.ajax({
		url: 'validarVer.php' ,
		type: 'POST' ,
		dataType: 'html',
		data: {consulta: consulta},
	})
	.done(function(respuesta){
		$("#autos").html(respuesta);
	})
	.fail(function(){
		console.log("Error");
	});
}


$(document).on('keyup','#auto', function(){
	var valor = $(this).val();
	if (valor != "") {
		buscar_datos(valor);
	}else{
		buscar_datos();
	}
});