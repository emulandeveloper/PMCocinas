<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Armario
 *
 * @author roman
 */
class Armario {

    private $id;
    private $id_empleado;
    private $cod_armario;
    private $modelo;
    private $activo;
 
    
    function __construct($id, $id_empleado, $cod_armario, $modelo, $activo) {
        $this->id = $id;
        $this->id_empleado = $id_empleado;
        $this->cod_armario = $cod_armario;
        $this->modelo = $modelo;
        $this->activo = $activo;
        
    }
    
    
    function getId() {
        return $this->id;
    }

    function getCod_armario() {
        return $this->cod_armario;
    }

    function getModelo() {
        return $this->modelo;
    }

    function getActivo() {
        return $this->activo;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setCod_armario($cod_armario) {
        $this->cod_armario = $cod_armario;
    }

    function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    function setActivo($activo) {
        $this->activo = $activo;
    }
    
    function getId_empleado() {
        return $this->id_empleado;
    }

    function setId_empleado($id_empleado) {
        $this->id_empleado = $id_empleado;
    }




    
    
    
    
}
