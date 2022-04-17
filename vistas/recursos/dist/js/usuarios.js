$("input[name='subirImagenusuarios']").change(function(){
   
    var imagen = this.files[0];

    if(imagen["type"]  != "image/jpeg" && imagen["type"] != "image/png"){

      $("input[name='subirImagenusuarios']").val("");

        swal.fire({
        type:'error',
        title:'¡error al subir la imagen!',
        text:'¡la imagen debe estar en formato jpg o png!',
        confirmButtonText:'Cerrar'
        });

    }else if(imagen["size"] > 2000000){

        $("input[name='subirImagenusuarios']").val("");


        swal.fire({
            type:'error',
            title:'¡error al subir la imagen!',
            text:'¡la imagen imagen no debe ppesar mas de 2 MB!',
            confirmButtonText:'Cerrar'
            });
       

    }else{
        var datosImagen = new FileReader;

        datosImagen.readAsDataURL(imagen);

        $(datosImagen).on("load", function(event){

            var rutaImagen = event.target.result;

            $(".preisualizarImgusuarios").attr("src",rutaImagen);

        })
    }






})