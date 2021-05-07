<?php
    require_once '../modelo/Conexion.php';
    $conexion = new Conexion();

    //borrar
    if(isset($_GET['Id']))
    {
        $id = $_GET['Id'];
        $conexion->delete($id);
        echo
        "<script type='text/javascript'>
            alert('Registro eliminado.');
            window.location.href='../index.php';
        </script>";
    }

    // Editar
    if(isset($_GET['edit']))
    {
        $id = $_GET['edit'];
        $values = $conexion->getDataDB($id);
        echo
        "<h2>$id</h2><script type='text/javascript'>
            
            window.location.href='../index.php';
        </script>";
    }


    // Agregar
    if(isset($_POST['agregar']) && !(empty($_POST['nombre'])) && !(empty($_POST['apellido'])) && !(empty($_POST['identificacion'])) &&  !(empty($_POST['email'])) && !(empty($_POST['fechaNacimiento']))   &&  is_uploaded_file($_FILES['foto']['tmp_name']))
    {
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $identificacion = $_POST['identificacion'];
        $email = $_POST['email'];
        $fechaNacimiento = $_POST['fechaNacimiento'];

        $foto = addslashes($_FILES['foto']['tmp_name']); // Obtiene la ubicación temporal de la imagen.
        $foto = file_get_contents($foto); // Obitene su contenido.
        $foto = base64_encode($foto); // Lo codifica con el estándar base64.

        if(is_numeric($identificacion) && count($conexion->searchByIdentificacion($identificacion)) < 1 ) // Si el valor es numérico y no está registrado en la BBDD.
        {
            $conexion->insert($nombre, $apellido, $identificacion, $email, $fechaNacimiento, $foto);
            echo
            "<script type='text/javascript'>
                alert('Valor agregador con éxito.');
                window.location.href='../index.php';
            </script>";
        }
        elseif(!is_numeric($identificacion))
        {
            echo
            "<script type='text/javascript'>
                alert('La identificación debe ser numérica.');
                window.location.href='../index.php';
            </script>";
        }
        else // Si ya está registrado.
        {
            echo
            "<script type='text/javascript'>
                alert('El número de identificación ya se encuentra registrado.');
                window.location.href='../index.php';
            </script>";
        }
    }
    elseif(isset($_POST['agregar'])) 
    {
        echo
        "<script type='text/javascript'>
            alert('Revise los campos ingresados.');
            window.location.href='../index.php';
        </script>";
    }

    /** 
     * Fuentes:
     * - https://www.youtube.com/watch?v=4ZpqQ3j1o2w
     */
?>