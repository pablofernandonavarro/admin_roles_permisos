<?php
   include_once("url_config.php");


include ROOT."controladores/plantilla.controlador.php";

$plantilla = new ControladorPlantilla();
$plantilla->ctrPlantilla();
?>