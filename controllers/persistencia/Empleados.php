<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Empleado
 *
 * @author roman
 */

require_once 'Conexion.php';

class Empleados {

    private static $instance;
    private $bd;

    function __construct() {
        $this->bd = Conexion::singleton_conexion();
    }

    public static function singletonEmpleados() {
        if (!isset(self::$instance)) {
            $miclass = __CLASS__;
            self::$instance = new $miclass;
        }

        return self::$instance;
    }
    
    public function getLogins($login, $password) {
        try {
            $consulta = "SELECT * FROM empleados WHERE "
                    . "cod_empleado='" .
                    $login . "' and password='" .
                    $password . "'";

            $query = $this->bd->preparar($consulta);

            $query->execute();
            $tEmpleado = $query->fetchAll();
        } catch (Exception $ex) {
            echo "Se ha producido un error en getLoginPassword";
        }
        if (empty($tEmpleado)) { //Si no existe ese idUsuario
            $tEmpleado = null;
        } else {

            $tEmpleado = new Empleado($tEmpleado[0][0], $tEmpleado[0][1], $tEmpleado[0][2], $tEmpleado[0][3], $tEmpleado[0][4], $tEmpleado[0][5]);
        }
        return $tEmpleado;
    }
    
    public function getEmpleado($cod_empleado) {
        try{
            $consulta = "SELECT * FROM empleados WHERE "
                    . "cod_empleado='" . $cod_empleado . "';";
            
            $query = $this->bd->preparar($consulta);
            
            $query->execute();
            $tEmpleados = $query->fetchAll();
        } catch (Exception $ex) {

        }
        return $tEmpleados;
    }

}
