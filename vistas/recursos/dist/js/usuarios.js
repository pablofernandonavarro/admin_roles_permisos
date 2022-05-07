$("input[name='subirImagenPerfil']").change(function () {
  var imagen = this.files[0];

  if (imagen["type"] != "image/jpeg" && imagen["type"] != "image/png") {
    $("input[name='subirImagenPerfil']").val("");

    swal.fire({
      type: "error",
      title: "¡error al subir la imagen!",
      text: "¡la imagen debe estar en formato jpg o png!",
      confirmButtonText: "Cerrar",
    });
  } else if (imagen["size"] > 2000000) {
    $("input[name='subirImagenPerfil']").val("");

    swal.fire({
      type: "error",
      title: "¡error al subir la imagen!",
      text: "¡la imagen imagen no debe ppesar mas de 2 MB!",
      confirmButtonText: "Cerrar",
    });
  } else {
    var datosImagen = new FileReader();

    datosImagen.readAsDataURL(imagen);

    $(datosImagen).on("load", function (event) {
      var rutaImagen = event.target.result;

      $(".preVisualizarImgUsuarios").attr("src", rutaImagen);
    });
  }
});

/* Editar Usuario */



$(".tablaUsuarios").DataTable({
	
	"deferRender": true,
	"retrieve": true,
	"processing": true,
	"language": {

		"sProcessing":     "Procesando...",
		"sLengthMenu":     "Mostrar _MENU_ registros",
		"sZeroRecords":    "No se encontraron resultados",
		"sEmptyTable":     "Ningún dato disponible en esta tabla",
		"sInfo":           "Mostrando registros del _START_ al _END_",
		"sInfoEmpty":      "Mostrando registros del 0 al 0",
		"sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
		"sInfoPostFix":    "",
		"sSearch":         "Buscar:",
		"sUrl":            "",
		"sInfoThousands":  ",",
		"sLoadingRecords": "Cargando...",
		"oPaginate": {
			"sFirst":    "Primero",
			"sLast":     "Último",
			"sNext":     "Siguiente",
			"sPrevious": "Anterior"
		},
		"oAria": {
			"sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
			"sSortDescending": ": Activar para ordenar la columna de manera descendente"
		}

	}

});

$(".tablaUsuarios").on("click", ".btnEditarUsuarios", function () {
    var idUsuario = $(this).attr("idusuario");
    var datos = new FormData();
    datos.append("idusuario", idUsuario);
    $.ajax({
      url: "ajax/usuarios.ajax.php",
      method: "POST",
      data: datos,
      cache: false,
      contentType: false,
      processData:false,
      datatype: "json",
      success: function(respuesta){
          
          $("#usuario_perfil_editar").val(respuesta['nombre']);
          $("#usuario_usuario_editar").val(respuesta['usuario']);
          $("#usuario_password_editar").val(respuesta['password']);
          $(".preVisualizarImgUsuarios").attr("scr",respuesta['foto']);
         
          
          
  
      }
  
    });
  });
