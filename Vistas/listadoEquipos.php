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
        <table class="table table-stripped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Rut</th>
                    <th>Nombre</th>
                    <th>Cargo</th>
                    <th>Fecha Inicio</th>
                    <th>Fecha Termino</th>
                    <th>Dias totales</th>
                    <th>Comentario</th>

                </tr>
            </thead>
            <tbody>
                <?php
                if (is_array($arrVacaciones)) {
                    foreach ($arrVacaciones as $key => $oVacacion) {
                        ?>
                        <tr>
                            <td><?= $key + 1; ?></td>
                            <td><?= $oVacacion->getRut(); ?></td>
                            <td><?= $oVacacion->getNombre(); ?></td>
                            <td><?= $oVacacion->getCargo(); ?></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><input type="button" id="eliminarVacacion" value="Eliminar" onclick="JavaScript:Feliminar(<?= $oVacacion->getRut(); ?>);" ><input type="button" id="modificarVacacion" value="Editar"></td>
                        </tr>
                    <?php
                    }
                }
                ?>
            </tbody>
        </table>
        <form id="formelimina" action="../lib/eliminarrecepcion.php" method="post">
            <input type="hidden" value="" name="rut_e" id="rut_e">
        </form>

        <div>
            <a  class="btn btn-success btn-lg" href="<?= URLBASE ?>controladores/AccEquipos.php" >Registrar Equipo</a>
        </div>
    </body>
</html>