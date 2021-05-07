<?php
    include_once 'modelo/Conexion.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.php">
    <title>CRUD</title>
</head>
<body>
    <?php if(!$_GET) { header('Location: index.php?pagina=1'); } ?>
    <div class="parentDiv header">
        <div class="childDiv"><h2>Agregar registro</h2></div>
    </div>
    <div class="parentDiv header">
    <!-- enctype: form-data debido a que existen peticiones de subida de archivos -->
        <form action="controlador/Acciones.php" method="post" enctype="multipart/form-data">
            <div class="childDiv">
                <div class="childDiv">Nombre: <input type="text" name="nombre" placeholder="Nombre"> <br></div>
                <div class="childDiv">Apellido: <input type="text" name="apellido" placeholder="Apellido"><br></div>
                <div class="childDiv">Identificación: <input type="text" name="identificacion" placeholder="123456789"><br></div>
                <div class="childDiv">E-mail: <input id="email" type="text" name="email" placeholder="ejemplo@uniminuto.edu.co"><br></div>
                <center><p id="emailValidacion" name="emailValidacion"></p></center>
                <div class="childDiv">Fecha de nacimiento: <input type="date" name="fechaNacimiento"><br></div>
                <div class="childDiv">Foto: <input type="file" name="foto"><br></div>
                <div class="childDiv smallText">*Imágenes pesadas no se subirán correctamente.<br></div>
                <div class="childDiv"><button type="submit" name="agregar" id="buttonSubmit">Agregar</button></div>            
            </div>
            
        </form> 
    </div>
    <hr>

    <form action="controlador/BuscarControlador.php" method="post">
        <div class="parentDiv">
            <div class="childDiv">
            <p>Realizar búsqueda y mostrar edad:</p>
                <input type="number" name="identificacion" placeholder="Numero de identificación">
                <button type="submit" name="buscar">
                    <img src="img/lupa.png" alt="submit" class="searchButton"/>
                </button>
                <br><br><br>
            </div>
        </div>
    </form>

    <?php require_once 'controlador/Paginacion.php'; ?>    

    <script src="js/emailChecker.js" type="text/javascript"></script>
</body>
</html>