<?php
    // echo $controlador;
    // echo $accion;

    include_once("controladores/controlador_".$controlador.".php");
    $objControlador = "Controlador".ucfirst($controlador);
    //$controlador = new ControladorPaginas();
    $controlador = new $objControlador();
    $controlador->$accion();


?>