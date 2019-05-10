<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of campeonato
 *
 * @author cetecom
 */
class campeonato {
    private $idcampeonato;
    private $codigo;
    private $nombre;
    private $fechainicio;
    private $fechatermino;
    private $cantidadpartidos;
    
    function __construct($idcampeonato, $codigo, $nombre, $fechainicio, $fechatermino, $cantidadpartidos) {
        $this->idcampeonato = $idcampeonato;
        $this->codigo = $codigo;
        $this->nombre = $nombre;
        $this->fechainicio = $fechainicio;
        $this->fechatermino = $fechatermino;
        $this->cantidadpartidos = $cantidadpartidos;
    }
    
    function getIdcampeonato() {
        return $this->idcampeonato;
    }

    function getCodigo() {
        return $this->codigo;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getFechainicio() {
        return $this->fechainicio;
    }

    function getFechatermino() {
        return $this->fechatermino;
    }

    function getCantidadpartidos() {
        return $this->cantidadpartidos;
    }

    function setIdcampeonato($idcampeonato) {
        $this->idcampeonato = $idcampeonato;
    }

    function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setFechainicio($fechainicio) {
        $this->fechainicio = $fechainicio;
    }

    function setFechatermino($fechatermino) {
        $this->fechatermino = $fechatermino;
    }

    function setCantidadpartidos($cantidadpartidos) {
        $this->cantidadpartidos = $cantidadpartidos;
    }

    function InsertaDatos(){
        /*Verficamos la existencia*/
        $db= new DBConnect();
        $dblink=$db->conexion();
        
        if (!isset($dblink)){
            return false;
        }
                /*update usuario
                                 set nomarchivo=?,archivo=? , nombre=? , nomusu=?
                                 where idusuario=?*/
        
        $PDOst=$dblink->prepare('INSERT INTO campeonato (idcampeonato,codigo, nombre, fechainicio,fechatermino,cantidadpartidos)
                                                 VALUES (?,?, ?, ?,?,?)');
        
        $PDOst->execute(array($this->idcampeonato, $this->codigo,$this->nombre,$this->fechainicio,$this->fechatermino,$this->cantidadpartidos));

      /*  if ( $row=$PDOst->fetch(PDO::FETCH_OBJ)){
            return true;
        }
        else{
             return false;   
        }
        */
    }

}
