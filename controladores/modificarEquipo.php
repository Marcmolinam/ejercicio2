<?php
include ("../lib/librerias.php");
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$idequipo = $_GET["idequipo"];

$codigoEquipo = $_POST["codigoEquipo"];

$nombreEquipo = $_POST["nombreEquipo"];

$oEqui = new equipos($idequipo,$codigoEquipo,$nombreEquipo);
try {
    $oEqui->ActualizaEquipo();
} catch (Exception $exc) {
    echo $exc->getTraceAsString();
}

header("location:".URLBASE."Vistas/listadoEquipos.php");