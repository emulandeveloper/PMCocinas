<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Armarios
 *
 * @author roman
 */
class Armarios {

    private $id;
    private $cod_armario;
    private $modelo;
    private $img_armario;
    private $id_empleado;
    
    function __construct($id, $cod_armario, $modelo, $img_armario, $id_empleado) {
        $this->id = $id;
        $this->cod_armario = $cod_armario;
        $this->modelo = $modelo;
        $this->img_armario = $img_armario;
        $this->id_empleado = $id_empleado;
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

    function getImg_armario() {
        return $this->img_armario;
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

    function setImg_armario($img_armario) {
        $this->img_armario = $img_armario;
    }
    
    function getId_empleado() {
        return $this->id_empleado;
    }

    function setId_empleado($id_empleado) {
        $this->id_empleado = $id_empleado;
    }




    
    
    
    
}
