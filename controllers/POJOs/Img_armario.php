<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Img_armario
 *
 * @author roman
 */
class Img_armario {

    private $id;
    private $id_armario;
    private $ruta_img;
    
    function __construct($id, $id_armario, $ruta_img) {
        $this->id = $id;
        $this->id_armario = $id_armario;
        $this->ruta_img = $ruta_img;
    }
    
    function getId() {
        return $this->id;
    }

    function getId_armario() {
        return $this->id_armario;
    }

    function getRuta_img() {
        return $this->ruta_img;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setId_armario($id_armario) {
        $this->id_armario = $id_armario;
    }

    function setRuta_img($ruta_img) {
        $this->ruta_img = $ruta_img;
    }



}
