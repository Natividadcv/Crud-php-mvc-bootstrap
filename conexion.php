<?php
    class BD{
       private static $instancia = NULL;

       public static function crearInstancia(){
            if(!isset( self::$instancia )){
                $opcionesPDO[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;

                self::$instancia = new PDO('mysql:host=localhost:3307;dbname=empleados', 'root', '', $opcionesPDO);
                echo "Estamos en linea...";
            }
            return self::$instancia;
       }

    }
?>