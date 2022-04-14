<?php

class ctrUsuarios{

    static public function ctrMostarUsuarios(){
     $tabla="usuarios";
     $respuesta= mdlUsuarios::mdlMostarUsuarios($tabla);
    return $respuesta;
    }
}
?>