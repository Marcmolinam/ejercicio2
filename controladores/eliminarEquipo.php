<?php

include ("../lib/librerias.php");

$idequipo = $_GET["idequipo"];




$oEqui = new equipos($idequipo,"","");
try {
    $oEqui->EliminarEquipo();
} catch (Exception $exc) {
    echo $exc->getTraceAsString();
}

header("location:".URLBASE."Vistas/listadoEquipos.php");

