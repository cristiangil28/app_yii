<?php
use yii\helpers\Url;
?>

<a href="<?= Url::toRoute("site/create")?>">Crear Usuario</a>

<h3>Lista de Usuarios</h3>

<table class="table table-bordered">
    <tr>
        <th>Id Usuario</th>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>Cédula</th>
        <th colspan="2">Acciones </th>
    </tr>
    <?php foreach($model as $row): ?>
        <tr>
            <td><?= $row->id?></td>
            <td><?= $row->nombre?></td>
            <td><?= $row->apellidos?></td>
            <td><?= $row->cedula?></td>
            <td><a href="#">Editar</a></td>
            <td><a href="#">Eliminar</a></td>
        </tr>
    <?php endforeach ?> 

</table>