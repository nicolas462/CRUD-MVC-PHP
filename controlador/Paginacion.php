<?php
    require_once('modelo/Conexion.php');
    $conexion = new Conexion();
    $usuarios = $conexion->getData();

    $cantidadRegistros = count($usuarios);
    $cantidadMostrar = 3;

    if($_GET['pagina'])
    {
        $firstLimit = intval(($_GET['pagina']) - 1)  * $cantidadMostrar;
        $registros = $conexion->getDataLimit($firstLimit, $cantidadMostrar);
    }

    require_once("vista/Usuarios.php");
?>