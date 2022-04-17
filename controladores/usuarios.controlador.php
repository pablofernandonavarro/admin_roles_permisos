<?php

class ctrUsuarios
{

    static public function ctrMostarUsuarios()
    {
        $tabla = "usuarios";
        $respuesta = mdlUsuarios::mdlMostarUsuarios($tabla);
        return $respuesta;
    }

    static public function ctrGuardarUsuario()
    {  

       
             
        if (isset($_POST['usuario_perfil'])) {

            if (isset($_FILES['subirImagenPerfil']) && !empty($_FILES['subirImagenPerfil']['tmp_name'])) {

               
                list($ancho, $alto) = getimagesize($_FILES['subirImagenPerfil']['tmp_name']);
                
                $nuevoAncho = 480;
                $nuevoAlto = 382;
                $directorio = "vistas/imagenes/usuarios";
              
                

                if ($_FILES['subirImagenPerfil']['type'] == "image/jpeg") {
                   
                    
                    $aleatorio = mt_rand(1, 999);
                    $ruta = $directorio . "/" . $aleatorio . ".jpg";
                    $origen = imagecreatefromjpeg($_FILES['subirImagenPerfil']['tmp_name']);
                    $destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);
                    imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);
                    imagejpeg($destino, $ruta);
                } else if ($_FILES['subirImagenPerfil']['type'] == "image/png") {

                    $aleatorio = mt_rand(1, 999);
                    $ruta = HTTP . $directorio . "/" . $aleatorio . ".png";
                    $origen = imagecreatefromjpeg($_FILES['subirImagenPerfil']['tmp_name']);
                    $destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);
                    imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);
                    imagejpeg($destino, $ruta);
                } else {
                   
                    echo "<script>
                    
                    
                         swal.fire({
                                 type:'error',
                                 title:'¡CORREGIR!',
                                 text:'¡NO se permite formato diferente a JPG y/o PNG!',
                                 showConfirmButton : true,
                                 confirmButtonText:'Cerrar'


                         }).then(function(result){

                             if(result.value){
                                 history.back();
                             }
                        

                         });
                     </script>";
                    return;
                }
               
                $encriptarPassword= crypt($_POST['usuario_password'],'$5$rounds=5000$usesomesillystringforsalt$');
                
                $datos=array(
                    'usuario_usuario'=>$_POST['usuario_usuario'],
                    'usuario_nombre'=>$_POST['usuario_perfil'],
                    'usuario_password'=>$encriptarPassword,
                    'usuario_rol'=>$_POST['usuario_rol'],
                    'foto'=>$ruta
                );
                $tabla="usuarios";

                $respuesta=mdlUsuarios::mdlguardarusuarios($tabla,$datos);

                if ($respuesta =="ok"){
               
                    echo "<script>
                   

                        swal.fire({
                                 type:'success',
                                 title:'¡ok!',
                                 text:'¡se guardo el registro correctamente!',
                                 showConfirmButton : true,
                                 confirmButtonText:'Continuar'


                         }).then(function(result){

                             if(result.value){
                                 history.back();
                             }
                        

                         });
                     </script>";
                    





                }else{
                    echo "<div class='alert alert-danger mt-3 small'>registro Fallido </div>";
                }
                






            }
        }
    }
}

 