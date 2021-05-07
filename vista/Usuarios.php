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

    </tr>
    <?php foreach($registros as $row): ?>
    <tr>
        <td> <?= $row['id'] ?> </td>
        <td> <?= $row['nombre'] ?> </td>
        <td> <?= $row['apellido'] ?> </td>
        <td> <?= $row['identificacion'] ?> </td>
        <td> <?= $row['email'] ?> </td>
        <td> <?= $row['fechaNacimiento'] ?> </td>
        <td> <img class="tableImg" src="data:image;base64,<?= $row['foto']?>"> </td>

        <td>
            <div class="parentDiv"> 
                <div class="divChild"> <a href="vista/Editar.php?edit=<?= $row['id']?>"><img src="img/edit.png" class="editButton"></a> </div>
                <div class="divChild"><a href="controlador/Acciones.php?Id=<?= $row['id']?>"><img src="img/borrar.png" class="deleteButton"></a></div>
            </div>
        </td>
    </tr>
    <?php endforeach;?>
</table>
</div>

<div class="parentDiv">
    <div class="childDiv">
        <p>Mostrando <?= $cantidadMostrar?> registros por página:</p>
    </div>
    <div class="childDiv">
        <?php for($i = 1; $i <= ceil($cantidadRegistros/$cantidadMostrar); $i++): ?>
            <a href="?pagina=<?=$i?>"> <button class="btn-paginacion"><?=$i?></button> </a>
        <?php endfor; ?>
    </div>
</div>
