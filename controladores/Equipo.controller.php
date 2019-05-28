<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once '../lib/librerias.php';

class clienteController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new equipos();
    }
    
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/equipos/equipo.php';
       
    }
    
    public function Crud(){
        $equipo = new equipos();
        
        if(isset($_REQUEST['idequipos'])){
            $equipos = $this->model->Obtener($_REQUEST['idequipos']);
        }
        
        require_once 'view/header.php';
        require_once 'view/cliente/Equipo-Editar.php';
        
    }
    
    public function Guardar(){
        $equipo = new equipos();
        
        $equipo->idequipo = $_REQUEST['idequipo'];
        $equipo->codigo = $_REQUEST['codigo'];
        $equipo->nombre = $_REQUEST['nombre'];

        $equipo->idequipo > 0 
            ? $this->model->Actualizar($equipo)
            : $this->model->Registrar($equipo);
        
        header('Location: index.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['idequipo']);
        header('Location: index.php');
    }
}