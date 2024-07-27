<?php
//Establecemos valores por defecto por si el usuario no agregar los valores a la url
$controller = "pages";
$action = "inicio";

//Mediante esta validacion si el usuario ingresa algo a la URL las variables tomaran esos valores
if(isset($_GET["controller"]) && isset($_GET["action"])){
    if(($_GET["controller"]) != "" && ($_GET["action"]) != ""){
        //Capturamos las peticiones de la URL
        $controller = $_GET["controller"];
        $action    = $_GET["action"];
    }
    
}

require_once("views/template.php");