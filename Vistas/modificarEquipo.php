<?php
include ('../lib/librerias.php');

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
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.css">
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    </head>
    <body>
         <form  method="POST" role="form" >

            <div class="form-group">
                <h1>MODIFICACION DE EQUIPOS</h1>
            </div
            <div class="form-group">
                <label>Codigo</label>
                <input type="text" class="form-control" id="codigoEquipo" name="codigoEquipo" placeholder="Ingrese Codigo">
            </div>
            <div class="form-group">
                <label>Nombre</label>
                <input type="text" class="form-control" id="nombreEquipo" name="nombreEquipo" placeholder="Ingrese Nombre Equipo">
            </div>
            <div>
                <input type="submit" class="btn btn-primary" value="Modificar Equipo" formaction="<?= URLBASE ?>controladores/modificarEquipo.php?idequipo=<?php echo $_GET["idequipo"]?>">    
            </div>
        </form>
    </body>
</html>
