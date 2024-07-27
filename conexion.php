<?php
//Creamos una clase

class db {
    public static $instancia = NULL;    //definimos la var $instancia como null para poder crear una instancia de la clase

    public static function crearInstancia(){
        if(!isset(self::$instancia)){   //Comprobamos que la var $instancia sea null
            $opcionesPdo[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;   //Creamos un array asociativo que guardara los errores y excepciones de la conexion

            self::$instancia = new PDO("mysql: host=localhost;dbname=crudmvc","root","12qwaszx", $opcionesPdo); //guardamos la conexion en la var $instancia
    
        }
        return self::$instancia; //Retornamos la conexion
    }
}