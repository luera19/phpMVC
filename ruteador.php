<?php 


include_once("controlador/controlador_".$controlador.".php");

$objControlador="Controlador".ucfirst($controlador);

$controlador= new $objControlador();

$controlador->$accion();


?>
