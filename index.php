<?php
   include_once("url_config.php");
   
   include ROOT."controladores/plantilla.controlador.php";
   include ROOT."controladores/usuarios.controlador.php";
   include ROOT."controladores/roles.controlador.php";
   include_once ROOT."modelo/usuarios.modelo.php";
   include_once ROOT."modelo/roles.modelo.php";




$plantilla = new ControladorPlantilla();
$plantilla->ctrPlantilla();


?>
