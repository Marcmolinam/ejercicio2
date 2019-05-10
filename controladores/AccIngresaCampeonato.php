<?php

include ('../clases/campeonato.php');
include ('../lib/db.php');
include ('../lib/constantes.php');
if (isset($_POST["txtCodigo"])) {
    $codigo = $_POST["txtCodigo"];
}
//$codigo = $_POST["txtCodigo"];
$nombre = $_POST["txtNombre"];
$fechainicio=$_POST["txtFechaInicio"];
$fechatermino=$_POST["txtFechaTermino"];
$cantidadPartidos=$_POST["txtCantidadPartidos"];

$oCamp = new campeonato(null, $codigo, $nombre, $fechainicio, $fechatermino, $cantidadPartidos);

$oCamp->InsertaDatos();