<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Img_armarios
 *
 * @author roman
 */

require_once 'Conexion.php';

class Img_armarios {

    private static $instance;
    private $bd;
    
    function __construct() {
        $this->bd = Conexion::singleton_conexion();
    }
    
    public static function singletonImgarmarios(){
        if (!isset(self::$instance)){
            $miclase = __CLASS__;
            self::$instance = new $miclase;
        }
        return self::$instance;
    }
    
    public function addImg (Img_armario $a){
        
        try {
            
            $consulta = "INSERT INTO img_armarios (id, id_armario, ruta_img) values (null, ?, ?)";
            
            $query = $this->bd->preparar($consulta);
            
            @$query->bindParam(1, $a->getId_armario());
            @$query->bindParam(2, $a->getRuta_img());
            
            $query->execute();
            $insert = true;
        } catch (Exception $ex) {
        
            $insert = false;
            
        }
        return $insert;
    }
    
    
}