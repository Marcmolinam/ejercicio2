<?php
include ('../clases/campeonato.php');
include ('../lib/db.php');
include ('../lib/constantes.php');
if (isset($_POST["txtCodigo"])) {
    $codigo = $_POST["txtCodigo"];
}
if (isset($_POST["txtNombre"])) {
    $nombre = $_POST["txtNombre"];
}
if (isset($_POST["txtFechaInicio"])) {
    $fechainicio=$_POST["txtFechaInicio"];
}
if (isset($_POST["txtFechaTermino"])) {
    $fechatermino=$_POST["txtFechaTermino"];
}
if (isset($_POST["txtCantidadPartidos"])) {
    $cantidadPartidos=$_POST["txtCantidadPartidos"];
}

$oCamp = new campeonato(null, $codigo, $nombre, $fechainicio, $fechatermino, $cantidadPartidos);
$oCamp->ActualizaCampeonato();
