<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/style.php">
    <title>Document</title>
</head>
<body>
    <div class="parentDiv">
        <div class="childDiv"><h2>Editar registro</h2></div>
    </div>
    <?php require_once("../controlador/EditarControlador.php"); ?>
    <form action="../controlador/EditarControlador.php" method="post" enctype="multipart/form-data">
        <div class="parentDiv">
            <div class="childDiv">
                <?php foreach($values as $row): ?>
                    <div class="childDiv"><input type="hidden" name="id" value="<?= $row['id']?>"><br></div>
                    <div class="childDiv">Nombre: <input type="text" name="nombre" value="<?= $row['nombre']?>"><br></div>
                    <div class="childDiv">apellido: <input type="text" name="apellido" value="<?= $row['apellido']?>"><br></div>
                    <div class="childDiv">Identificacion: <input type="text" name="identificacion" value="<?= $row['identificacion']?>"><br></div>
                    <div class="childDiv">E-mail: <input id="e-mail" type="text" name="email" value="<?= $row['email']?>"><br></div>
                    <div class="childDiv"> <p id="checkerEmail"></p> <br></div>
                    <div class="childDiv">Fecha de nacimiento: <input type="date" name="fechaNacimiento" value="<?= $row['fechaNacimiento']?>"><br></div>
                    <center><div class="childDiv"><img src="data:image;base64,<?= $row['foto']?>"></div></center>
                    <div class="childDiv">Foto: <input type="file" name="foto"><br></div>
                    <div class="childDiv"><input type="submit" value="Actualizar" name="actualizar" id="buttonSubmit"></div>
                <?php endforeach;?>
            </div>
        </div>
    </form>
    <div class="parentDiv">
        <div class="childDiv"><a href="../index.php">Volver</a></div>
    </div>
    
    <script src="../js/script.js" type="text/javascript"></script>
</body>
</html>