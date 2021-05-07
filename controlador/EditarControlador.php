<?php
    require_once '../modelo/Conexion.php';
    $conexion = new Conexion();

    // Editar
    if(isset($_GET['edit']))
    {
        $id = $_GET['edit'];
        $values = $conexion->getDataDB($id);
    }

    // Actualizar
    if(isset($_POST['actualizar']) && !(empty($_POST['nombre'])) && !(empty($_POST['apellido'])) && !(empty($_POST['identificacion'])) && !(empty($_POST['email'])) && !(empty($_POST['fechaNacimiento']))  &&  is_uploaded_file($_FILES['foto']['tmp_name']) )
    {
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $identificacion = $_POST['identificacion'];
        $email = $_POST['email'];
        $fechaNacimiento = $_POST['fechaNacimiento'];

        $foto = addslashes($_FILES['foto']['tmp_name']); // Obtiene la ubicación temporal de la imagen.
        $foto = file_get_contents($foto); // Obitene su contenido.
        $foto = base64_encode($foto); // Lo codifica con el estándar base64.

        if(is_numeric($identificacion))
        {
            $conexion->update($id, $nombre, $apellido, $identificacion, $email, $fechaNacimiento, $foto);
            echo
            "<script type='text/javascript'>
                alert('Registro editado con éxito.');
                window.location.href='../index.php';
            </script>";
        }
        else
        {
            echo
            "<script type='text/javascript'>
                alert('La identificación debe ser numérica. Intentelo nuevamente.');
                window.location.href='../index.php';
            </script>";
        }
    }
    elseif (isset($_POST['actualizar']))
    {
        echo
        "<script type='text/javascript'>
            alert('Revise los datos e intentelo nuevamente.');
            window.location.href='../index.php';
        </script>";
    }
?>