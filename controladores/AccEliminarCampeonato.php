<?php

include ('../clases/campeonato.php');
include ('../lib/db.php');
include ('../lib/constantes.php');


if (isset($_POST["txtEliminaCampeonato"])) {
    $codigo = $_POST["txtEliminaCampeonato"];
}
$oCamp = new campeonato(null, $codigo, null, null, null, null);
$oCamp->EliminarCampeonato();
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

