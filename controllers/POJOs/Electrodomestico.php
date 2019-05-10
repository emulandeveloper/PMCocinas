<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Electrodomesticos
 *
 * @author roman
 */
class Electrodomesticos {
    
    private $id;
    private $cod_electro;
    private $tipo_electro;
    private $modelo;
    private $img_electro;
    private $id_empleado;
    
    function __construct($id, $cod_electro, $tipo_electro, $modelo, $img_electro, $id_empleado) {
        $this->id = $id;
        $this->cod_electro = $cod_electro;
        $this->tipo_electro = $tipo_electro;
        $this->modelo = $modelo;
        $this->img_electro = $img_electro;      
        $this->id_empleado = $id_empleado;
    }
    
    function getId() {
        return $this->id;
    }

    function getCod_electro() {
        return $this->cod_electro;
    }

    function getTipo_electro() {
        return $this->tipo_electro;
    }

    function getModelo() {
        return $this->modelo;
    }

    function getImg_electro() {
        return $this->img_electro;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setCod_electro($cod_electro) {
        $this->cod_electro = $cod_electro;
    }

    function setTipo_electro($tipo_electro) {
        $this->tipo_electro = $tipo_electro;
    }

    function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    function setImg_electro($img_electro) {
        $this->img_electro = $img_electro;
    }
    
    function getId_empleado() {
        return $this->id_empleado;
    }

    function setId_empleado($id_empleado) {
        $this->id_empleado = $id_empleado;
    }





}
