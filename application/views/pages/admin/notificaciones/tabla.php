<?php foreach ($notificaciones as $not) { ?>
    <tr>
        <td><?= $not->username ?></td>
        <td><?= $not->fecha ?></td>
        <td><?= $not->descripcion ?></td>
        <td>
            <button class="btn btn-sm btn-secondary"><i class="fas fa-info-circle"></i></button>
            <button class="btn btn-sm btn-info"><i class="fas fa-reply"></i></button>
        </td>
    </tr>
<?php } ?>