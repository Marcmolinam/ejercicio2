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
                <h1>INGRESO DE EQUIPOS</h1>
                <label >Id Equipo</label>
                <input type="text" class="form-control" id="idEquipo" name="idEquipo" placeholder="Ingresar Codigo Campeonato">
            </div>
            <div class="form-group">
                <label>Codigo</label>
                <input type="text" class="form-control" id="codigoEquipo" name="codigoEquipo" placeholder="Ingrese Codigo">
            </div>
            <div class="form-group">
                <label>Nombre</label>
                <input type="text" class="form-control" id="nombreEquipo" name="nombreEquipo" placeholder="Ingrese Nombre Equipo">
            </div>
            <div class="form-group">
                <input type="submit"class="btn btn-primary" value="Registrar Equipo" formaction="<?= URLBASE ?>controladores/ingresaEquipo">            </div>
        </form>
    </body>
</html>
