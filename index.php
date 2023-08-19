<?php
//requiero a plantilla.controlador.php
require_once "controladores/plantilla.controlador.php";

//instancio el objeto
$plantilla = new ControladorPlantilla();

//Ejecuto el metodo
$plantilla  ->ctrGetPlantilla();