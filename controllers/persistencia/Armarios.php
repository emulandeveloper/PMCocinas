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
require_once 'Conexion.php';

class Armarios {

    private static $instance;
    private $bd;
    
    public function __construct() {
        $this->bd = Conexion::singleton_conexion();
    }
    
    public static function singletonArmarios() {
        if (!isset(self::$instance)){
            $miclass = __CLASS__;
            self::$instance = new $miclass;
        }
        
        return self::$instance;
    }
    
    public function addArmario (Armario $a){
        
        try {
            $consulta = "INSERT INTO armarios"
                    . " (id, id_empleado, cod_armario, modelo, nombre, tipo, img, activo) "
                    . "values "
                    . "(null, ?, ?, ?, ?, ?, ?, ?);";
            
            $query = $this->bd->preparar($consulta);
            
            @$query->bindParam(1, $a->getId_empleado());
            @$query->bindParam(2, $a->getCod_armario());
            @$query->bindParam(3, $a->getModelo());
            @$query->bindParam(4, $a->getNombre());
            @$query->bindParam(5, $a->getTipo());
            @$query->bindParam(6, $a->getImg());
            @$query->bindParam(7, $a->getActivo());
            
            $query->execute();
            
            $insert = true;
            
            
        } catch (Exception $ex) {
        
            $insert = false;
            
        }
        
        return $insert;
    }
    
    public function getAllArmarios() {
        try {
            $consulta = "SELECT * FROM armarios WHERE activo = 1";
            
            $query = $this->bd->preparar($consulta);
            
            $query->execute();
            $tCocinas = $query->fetchAll();
        } catch (Exception $ex) {
            
        }
        return $tCocinas;
    }
    
    public function borrarArmario($id) {

        try {
            $consulta = "UPDATE armarios SET activo=0"
                    . " WHERE id= $id;";
            $query = $this->bd->preparar($consulta);

            $query->execute();
            $baja = true;
        } catch (Exception $ex) {
            $baja = false;
        }
        return $baja;
    }
    
    public function getUltimoId() {
        
        try{
            $consulta = "SELECT MAX(id) as ultimo FROM armarios";
            
            $query = $this->bd->preparar($consulta);
            
            $query->execute();
            $tArmario = $query->fetchAll();
           
        } catch (Exception $ex) {          

        }
        
        return $tArmario[0]['ultimo'];
    }
}
