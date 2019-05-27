<?php

include ('../lib/librerias.php');

$codigo = $_POST["codigo"];

$nombre = $_POST["nombre"];


$fechainicio = $_POST["fechaInicio"];


$fechatermino = $_POST["fechaTermino"];


$cantidadPartidos = $_POST["cantidadPartidos"];

$oCamp = new campeonato(null, $codigo, $nombre, $fechainicio, $fechatermino, $cantidadPartidos);

$oCamp->InsertaDatos();
