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
    private $cod_cocina;
    private $nombre;
    private $img_cocina;
    private $id_empleado;
    
    function __construct($id, $cod_cocina, $nombre, $img_cocina, $id_empleado) {
        $this->id = $id;
        $this->cod_cocina = $cod_cocina;
        $this->nombre = $nombre;
        $this->img_cocina = $img_cocina;
        $this->id_empleado = $id_empleado;
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

    function getImg_cocina() {
        return $this->img_cocina;
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

    function setImg_cocina($img_cocina) {
        $this->img_cocina = $img_cocina;
    }

    function setId_empleado($id_empleado) {
        $this->id_empleado = $id_empleado;
    }



    
}
