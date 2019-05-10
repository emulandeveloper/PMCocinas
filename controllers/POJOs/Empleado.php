<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Empleado
 *
 * @author roman
 */
class Empleado {

    private $id;
    private $cod_empleado;
    private $password;
    private $nombre;
    private $apellido1;
    private $apellido2;
    
    function __construct($id, $cod_empleado, $password, $nombre, $apellido1, $apellido2) {
        $this->id = $id;
        $this->cod_empleado = $cod_empleado;
        $this->password = $password;
        $this->nombre = $nombre;
        $this->apellido1 = $apellido1;
        $this->apellido2 = $apellido2;
    }
    
    
    function getId() {
        return $this->id;
    }

    function getCod_empleado() {
        return $this->cod_empleado;
    }

    function getPassword() {
        return $this->password;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getApellido1() {
        return $this->apellido1;
    }

    function getApellido2() {
        return $this->apellido2;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setCod_empleado($cod_empleado) {
        $this->cod_empleado = $cod_empleado;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setApellido1($apellido1) {
        $this->apellido1 = $apellido1;
    }

    function setApellido2($apellido2) {
        $this->apellido2 = $apellido2;
    }



    
    
}
