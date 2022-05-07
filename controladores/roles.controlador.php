<?php

class ctrRoles{
    
    static public function ctrMostarRoles($item,$valor){

        $tabla="Roles";
        $respuesta= MdlRoles::mdlMostarRoles($tabla,$item,$valor);

        return $respuesta;



    }





}