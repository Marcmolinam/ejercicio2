<?php
include ("../lib/librerias.php");

$cont=0;
$oEquipos = new equipos(null,null,null); 
if (!isset($arrayEquipos)) {
    $arrayEquipos=array($oEquipos->ListarEquipos());
    $cont++;
}

$_SESSION["aEquipos"]= $arrayEquipos;
if ($cont >= 1) {
    header("location:".URLBASE."Vistas/listadoEquipos.php");
}
