<?php
include_once("url_config.php");
require_once(ROOT . "modelo/Conexion.php");

class MdlRoles
{

    static function mdlMostarRoles($tabla, $item, $valor)
    {
        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla where $item= :$item");

         $stmt ->bindParam(":".$item,$valor,PDO::PARAM_STR);

        $stmt->execute();
        return $stmt->fetch();
    }
}
