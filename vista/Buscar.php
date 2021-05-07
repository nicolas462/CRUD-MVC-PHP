<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.php">
    <title>Buscar</title>
</head>
<body>
    <?php require_once("../controlador/BuscarControlador.php"); ?>

    <div class="parentDiv">
        <div class="childDiv"><h2>Registro encontrado</h2></div>
    </div>

    <div class="parentDiv">
    <table>
        <tr>
            <th> ID </th>
            <th> Nombre </th>
            <th> Apellido </th>
            <th> Identificación </th>
            <th> E-mail </th>
            <th> Fecha de nacimiento </th>
            <th> Foto </th>
            <th> Edad </th>
        </tr>
        <?php foreach($_SESSION['identificacion'] as $row): ?>
        <tr>
            <td> <?= $row['id'] ?> </td>
            <td> <?= $row['nombre'] ?> </td>
            <td> <?= $row['apellido'] ?> </td>
            <td> <?= $row['identificacion'] ?> </td>
            <td> <?= $row['email'] ?> </td>
            <td id="date"> <?= $row['fechaNacimiento'] ?> </td>
            <td> <img src="data:image;base64,<?= $row['foto']?>"> </td>
            <td id="edad"> </td>
        </tr>
        <?php endforeach;?>
    </table>
    </div>
    <div class="parentDiv">
        <div class="childDiv"><a href="../index.php">Volver</a></div>
    </div>
    
    <script src="../js/script.js" type="text/javascript"></script>
</body>
</html>