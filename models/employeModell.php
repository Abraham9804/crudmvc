<?php

class employeModell {
    public static function crear($nombre, $apellido, $correo){
        $conexionDb = DB::crearInstancia();   //Accedemos al metodo para crear la conexion
        $sql = $conexionDb->prepare("INSERT INTO empleados(nombre, apellido, correo) VALUES(?,?,?)");
        $sql->bindParam(1,$nombre);
        $sql->bindParam(2,$apellido);
        $sql->bindParam(3,$correo);
        $sql->execute();
    }
}