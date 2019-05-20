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
class Cocinas {
    
    private static $instance;
    private $bd;

    public function __construct() {
        $this->bd = Conexion::singleton_conexion();
    }
    public static function singletonCocinas() {
        if (!isset(self::$instance)) {
            $miclass = __CLASS__;
            self::$instance = new $miclass;
        }

        return self::$instance;
    }
    
    public function addCocina (Cocina $c) {
        
        try{
            $consulta = "INSERT INTO cocinas "
                    . "(id, id_empleado, cod_cocina, nombre, modelo, activo) "
                    . "values"
                    . "(null, ?, ?, ?, ?, ?)";
            
            $query = $this->bd->preparar($consulta);
            
            @$query->bindParam(1, $c->getId_empleado());
            @$query->bindParam(2, $c->getCod_cocina());
            @$query->bindParam(3, $c->getNombre());
            @$query->bindParam(4, $c->getModelo());
            @$query->bindParam(5, $c->getActivo());
            
            $query->execute();
            
            $insert = true;

        } catch (Exception $ex) {

            $insert = false;
            
        }
        
        return $insert;
    }
    
    public function getUltimoId() {
        
        try{
            $consulta = "SELECT MAX(id) as ultimo FROM cocinas";
            
            $query = $this->bd->preparar($consulta);
            
            $query->execute();
            $tCocina = $query->fetchAll();
           
        } catch (Exception $ex) {          

        }
        
        return $tCocina[0]['ultimo'];
    }
}
