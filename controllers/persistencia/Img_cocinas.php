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

require_once 'Conexion.php';

class Img_cocinas {

    private static $instance;
    private $bd;
    
    function __construct() {
        $this->bd = Conexion::singleton_conexion();
    }
    
    public static function singletonImgcocinas(){
        if (!isset(self::$instance)){
            $miclass = __CLASS__;
            self::$instance = new $miclass;
        }
        return self::$instance;
    }


    public function addImg (Img_cocina $c) {
        
        try {
            $consulta = "INSERT INTO img_cocinas (id, id_cocina, ruta_img) values (null, ?, ?)";
            
            $query = $this->bd->preparar($consulta);
            
            @$query->bindParam(1, $c->getId_cocina());
            @$query->bindParam(2, $c->getRuta_img());
            
            $query->execute();
            $insert = true;
            
            
        } catch (Exception $exc) {

            $insert = false;

        }
        return $insert;
        }
}
