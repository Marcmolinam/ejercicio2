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

function InsertaDatos() {
        /* Verficamos la existencia */
        $db = new DBConnect();
        $dblink = $db->conexion();

        if (!isset($dblink)) {
            return false;
        }
        

        $PDOst = $dblink->prepare('INSERT INTO equipo (idequipo, codigo, nombre)
                                                 VALUES (?,?,?)');

        $PDOst->execute(array($this->idequipo, $this->codigo, $this->nombre));

       
    }
}
