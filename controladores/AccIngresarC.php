<?php
include ("../lib/constantes.php");
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form  method="POST" role="form" >

            <div class="form-group">
                <label >Codigo Campeonato</label>
                <input type="text" class="form-control" id="codigo" name="codigo" placeholder="Ingresar Codigo Campeonato">
            </div>
            <div class="form-group">
                <label>Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese Nombre">
            </div>
            <div class="form-group">
                <label>Fecha de inicio</label>
                <input type="date" class="form-control" id="fechaInicio" name="fechaInicio" >
            </div>
            <div class="form-group">
                <label>Fecha de Termino</label>
                <input type="date" class="form-control" id="fechaTermino" name="fechaTermino" >
            </div>
            <div class="form-group">
                <label>Cantidad de partidos</label>
                <input type="number" class="form-control" id="cantidadPartidos" name="cantidadPartidos"  placeholder="Ingrese N# Partidos" >
            </div>
             <div>
                <input type="submit" class="btn btn-primary"value="agregar" formaction="<?= URLBASE ?>controladores/AccIngresaCampeonato.php">
            </div>   
            <div>
                <label>Codigo del CAMPEONATO</label>
                <input type="text" name="txtEliminaCampeonato" >
                <input type="submit"class="btn btn-primary" value="Eliminar Campeonato" formaction="<?= URLBASE ?>controladores/AccEliminarCampeonato.php">
            </div>
            <div>
                <input type="submit"class="btn btn-primary" value="Actualizar Campeonato" formaction="<?= URLBASE ?>controladores/AccUpdCampeonato.php">
            </div>
            <div>
                <input type="submit"class="btn btn-primary" value="Listar Campeonatos" formaction="<?= URLBASE ?>controladores/listarCampeonatos.php">
            </div>
        </form>
    </body>
</html>
