<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cocina
 *
 * @author roman
 */
class Cocina {

    private $id;
    private $id_empleado;
    private $cod_cocina;
    private $nombre;
    private $modelo;
    private $activo;
    
    function __construct($id, $id_empleado, $cod_cocina, $nombre, $modelo, $activo) {
        $this->id = $id;
        $this->cod_cocina = $cod_cocina;
        $this->nombre = $nombre;
        $this->modelo = $modelo;
        $this->id_empleado = $id_empleado;
        $this->activo = $activo;
    }
    
    function getId() {
        return $this->id;
    }

    function getCod_cocina() {
        return $this->cod_cocina;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getId_empleado() {
        return $this->id_empleado;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setCod_cocina($cod_cocina) {
        $this->cod_cocina = $cod_cocina;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setId_empleado($id_empleado) {
        $this->id_empleado = $id_empleado;
    }
    
    function getModelo() {
        return $this->modelo;
    }

    function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    function getActivo() {
        return $this->activo;
    }

    function setActivo($activo) {
        $this->activo = $activo;
    }






    
}
