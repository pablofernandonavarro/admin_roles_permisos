<?php
   include_once("url_config.php");
   
   include ROOT."controladores/plantilla.controlador.php";
   include ROOT."controladores/usuarios.controlador.php";
   include_once ROOT."modelo/usuarios.modelo.php";



$plantilla = new ControladorPlantilla();
$plantilla->ctrPlantilla();
?>
