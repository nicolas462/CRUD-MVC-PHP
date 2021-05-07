<?php
    require_once '../modelo/Conexion.php';
    $conexion = new Conexion();
    session_start();

    // Buúsqueda
    if(isset($_POST['buscar']))
    {
        $identificacion = $_POST['identificacion'];
        $registro = $conexion->searchByIdentificacion($identificacion);
        $_SESSION['identificacion'] = $registro;

        if (count($registro) > 0) // Si se encontró registro.
        {
            echo
            "<script type='text/javascript'>
                window.location.href='../vista/Buscar.php';
            </script>";
        }
        else
        {
            echo
            "<script type='text/javascript'>
                alert('No se encontraron registros.');
                window.location.href='../index.php';
            </script>"; 
        }
    }
?>