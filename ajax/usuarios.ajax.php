<?php


require_once("../url_config.php");
require_once(ROOT."controladores/usuarios.controlador.php");
require_once(ROOT."modelo/usuarios.modelo.php");



class ajaxUsuarios{

    public $idusuario;

       public function ajaxEditarUsuarios(){

        $item ="id";
        $valor = $this->idusuario;
        $respuesta = ctrUsuarios::ctrMostarUsuariosuno($item,$valor);
        return $respuesta;
      
       
       } 

}


// editar usuarios

if(isset($_POST['idusuario'])){

    

    $editar = new ajaxUsuarios();
    $editar->idusuario= $_POST['idUsuario'];
    
   
  

   
    $editar->ajaxEditarUsuarios();

}



