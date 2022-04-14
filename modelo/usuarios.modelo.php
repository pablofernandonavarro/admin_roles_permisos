<?php
require_once ("conexion.php");

class mdlUsuarios{

 static public function mdlMostarUsuarios($tabla){
  
    $stmt= Conexion::conectar()->prepare("SELECT * FROM $tabla");
    $stmt->execute();
    return $stmt->fetchAll();

    $stmt->closeCursor();
    $stmt=null;
   

 }


}

?>