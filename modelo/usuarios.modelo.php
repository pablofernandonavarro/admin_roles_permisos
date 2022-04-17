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
 static public function mdlguardarusuarios($tabla,$datos){
   

   $stmt= Conexion::conectar()->prepare("INSERT INTO $tabla(usuario,password,nombre,foto,rol)values(:USUARIO, :PASS, :NOMBRE, :FOTO, :ROL)");
  
  $stmt->bindParam(":USUARIO",$datos['usuario_usuario'],PDO::PARAM_STR);
  $stmt->bindParam(":NOMBRE",$datos['usuario_nombre'],PDO::PARAM_STR);
  $stmt->bindParam(":PASS",$datos['usuario_password'],PDO::PARAM_STR);
  $stmt->bindParam(":ROL",$datos['usuario_rol'],PDO::PARAM_INT);
  $stmt->bindParam(":FOTO",$datos['foto'],PDO::PARAM_STR);



  if ($stmt->execute()){
     return "ok";
  }else{
     echo"error";
  }
  $stmt->closeCursor();
  $stmt=null;



 }


}

?>