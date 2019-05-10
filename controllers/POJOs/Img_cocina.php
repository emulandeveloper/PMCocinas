<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Img_cocina
 *
 * @author roman
 */
class Img_cocina {

        private $id;
    private $id_cocina;
    private $ruta_img;
    
    function __construct($id, $id_cocina, $ruta_img) {
        $this->id = $id;
        $this->id_cocina = $id_cocina;
        $this->ruta_img = $ruta_img;
    }
    
    function getId() {
        return $this->id;
    }

    function getId_cocina() {
        return $this->id_cocina;
    }

    function getRuta_img() {
        return $this->ruta_img;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setId_cocina($id_cocina) {
        $this->id_cocina = $id_cocina;
    }

    function setRuta_img($ruta_img) {
        $this->ruta_img = $ruta_img;
    }


}
