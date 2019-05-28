<?php
include ("../lib/librerias.php");
$contador=0;
$oEquipos = new equipos(null,null,null); 
if (isset($_SESSION["arrEquipos"])) {
    $arrEquipos = $_SESSION["arrEquipos"];
    $contador++;
}

$arrEquipos[] = $oEquipos->ListarEquipos();
$_SESSION["$aEquipos"] = $oEquipos;


if ($contador >= 1) {
    header("location:".URLBASE."Vistas/listadoEquipos.php");
}
