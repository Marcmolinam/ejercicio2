<?php
include ("../lib/librerias.php");
if (isset($_SESSION["oEquipos"])) {
    $oEquip = $oEquipos;
} else {
    $oEquip = new equipos(null, null, null);
}
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
        <div class="container   ">
            <table class="table table-bordered table-stripped">
                <tr>
                    <th style="text-align: center;">#</th>
                    <th style="text-align: center;">Codigo Equipo</th>
                    <th style="text-align: center;">Nombre del Equipo</th>
                    <th style="text-align: center;" colspan="2">Accion</th>
                </tr>
                <?php
                $oEquip->ListarEquipos();
                ?>

            </table>
        </div>    
        <form id="formelimina" action="../lib/eliminarrecepcion.php" method="post">
            <input type="hidden" value="" name="rut_e" id="rut_e">
        </form>

        <div>
            <a  class="btn btn-success btn-lg" href="<?= URLBASE ?>Vistas/MantenedorEquipos.php" >Registrar Equipo</a>
        </div>
    </body>
</html>
