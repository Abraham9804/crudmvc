<?php 
//Al estar incluido routes.php dentro de template y template dentro de index, las variables que definimos en index estan disponibles en routes.php
//Hacemos dinamica la llamada al controlador concatenando el contenido de la variable $controller de esta forma si $controller = pages, se llamara a pagesController.php
include_once("controllers/".$controller."Controller.php");



//$objController guardara el nombre de la clase dinamicamente para instanciarla
$objController = $controller."Controller";

$controladorPaginas = new $objController;
$controladorPaginas->$action(); //Pasamos dinamicamente el metodo al que queremos acceder
