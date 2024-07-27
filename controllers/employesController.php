<?php 
require_once("models/employeModell.php");
require_once("conexion.php");



class employesController{
    public function inicio(){
        include_once("views/empleados/inicio.php");
    }

    public function crear(){
        if($_POST){
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $correo = $_POST['correo'];

            employeModell::crear($nombre, $apellido, $correo);
        }
        include_once("views/empleados/crear.php");
    }

    public function editar(){
        include_once("views/empleados/editar.php");
    }
}