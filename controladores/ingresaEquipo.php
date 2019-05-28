<?php
include ("../lib/librerias.php");
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$idEquipo = $_POST["idEquipo"];

$codigoEquipo = $_POST["codigoEquipo"];


$nombreEquipo = $_POST["nombreEquipo"];




$oEqui = new equipos($idEquipo,$codigoEquipo,$nombreEquipo);

$oEqui->InsertaEquipo();