<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of equipos
 *
 * @author Pedro Navarro
 */
class equipos {

    private $idequipo;
    private $codigo;
    private $nombre;

    function __construct($idequipo, $codigo, $nombre) {
        $this->idequipo = $idequipo;
        $this->codigo = $codigo;
        $this->nombre = $nombre;
    }

    function getIdequipo() {
        return $this->idequipo;
    }

    function getCodigo() {
        return $this->codigo;
    }

    function getNombre() {
        return $this->nombre;
    }

    function setIdequipo($idequipo) {
        $this->idequipo = $idequipo;
    }

    function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function InsertaEquipo() {
        /* Verficamos la existencia */
        $db = new DBConnect();
        $dblink = $db->conexion();

        if (!isset($dblink)) {
            return false;
        }


        $PDOst = $dblink->prepare('INSERT INTO equipo ( codigo, nombre)
                                                 VALUES (?,?)');

        $PDOst->execute(array($this->codigo, $this->nombre));
    }

    function EliminarEquipo() {

        $db = new DBConnect();
        $dblink = $db->conexion();

        if (!isset($dblink)) {
            return false;
        }

        $PDOst = $dblink->prepare('delete from equipo where idequipo=?');

        $PDOst->execute(array($this->idequipo));
    }

    function ListarEquipos() {
        $db = new DBConnect();
        $dblink = $db->conexion();

        if (!isset($dblink)) {
            return false;
        }
        $stmt = $dblink->prepare("SELECT idequipo, codigo, nombre FROM equipo");
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                ?>
                <tr>
                    <td><?php if (isset($row["idequipo"])){ print($row["idequipo"]);} ?></td>
                    <td><?php if (isset($row["codigo"])){ print($row["codigo"]);} ?></td>
                    <td><?php if (isset($row["nombre"])){ print($row["nombre"]);} ?></td>
                </tr>

                <?php

            }
        }
    }

    function ActualizaCampeonato() {
        $db = new DBConnect();
        $dblink = $db->conexion();

        if (!isset($dblink)) {
            return false;
        }

        $PDOst = $dblink->prepare('update equipo SET nombre=?, codigo=?WHERE idequipo=?');

        $PDOst->execute(array($this->nombre, $this->codigo, $this->idequipo));
    }

}
