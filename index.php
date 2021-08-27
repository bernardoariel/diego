<?php 
#LLAMAR HORARIO DE ARGENTINA
date_default_timezone_set('America/Argentina/Buenos_Aires');

#CONTROLADORES y MODELOS
#-----------------------------------------------------
//LLAMO A LA PlantillaControlador
require_once "controladores/plantilla.controlador.php";

require_once "controladores/landing.controlador.php";
require_once "modelos/landing.modelo.php";


#LLAMAR A LA PLANTILLA.
#-------------------------------------
$plantilla = new ControladorPlantilla();
$plantilla->plantilla();
