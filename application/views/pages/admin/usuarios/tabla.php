<?php
foreach ($usuarios as $usuario) {
    ?>
<tr>
    <!-- <td><?= $usuario->nombre ?></td>
    <td><?= $usuario->apellido ?></td> -->
    <td><?= $usuario->username ?></td>
    <td><?= $usuario->correo ?></td>
    <td><?php if ($usuario->tipo_usuario == '1') {
                echo "<span'>Administrador</span>";
            } elseif ($usuario->tipo_usuario == '2') {
                echo "<span'>User</span>";
            } ?></td>
    <td><?php if ($usuario->estado == '1') {
                echo "<span class='btn btn-success btn-sm'>Activo</span>";
            } elseif ($usuario->estado == '2') {
                echo "<span class='btn btn-danger btn-sm'>Inactivo</span>";
            } ?></td>
    <td class="text-center">
        <?php if ($usuario->tipo_usuario == '1') { ?>
        <button class="btn btn-warning btn-sm" onclick="obtener('<?= $usuario->id_usuario ?>')" data-toggle="modal" data-target="#modaledit"><i class="fas fa-edit"></i></button>
        <?php } else { ?>
        <button class="btn btn-warning btn-sm" onclick="obtener('<?= $usuario->id_usuario ?>')" data-toggle="modal" data-target="#modaledit"><i class="fas fa-edit"></i></button>
        | <?php if ($usuario->estado == '1') { ?>
        <button class="btn btn-danger btn-sm" onclick="eliminar('<?= $usuario->id_usuario ?>')"><i class="fas fa-user-times"></i></button>
        <?php } else { ?>
        <button class="btn btn-primary btn-sm" onclick="activar('<?= $usuario->id_usuario ?>')"><i class="fas fa-user-check"></i></button>
        <?php } ?>
        <?php } ?>
    </td>
</tr>
<?php
}
