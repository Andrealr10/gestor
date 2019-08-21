<?php
    foreach($usuarios as $usuario){
?>
    <tr>
         <td><?= $usuario->id_usuario?></td>
         <td><?= $usuario->nombre?></td>
         <td><?= $usuario->apellido?></td>
         <td><?= $usuario->username?></td>
         <td><?php if($usuario->tipo == '1'){ echo "<span'>Administrador</span>";}elseif($usuario->tipo == '2'){ echo "<span'>User</span>";}?></td>
         <td><?php if($usuario->estado == '1'){ echo "<span class='btn btn-success btn-sm'>Activo</span>";}elseif($usuario->estado == '2'){ echo "<span class='btn btn-danger btn-sm'>Inactivo</span>";}?></td>
         <td class="text-center">
            <a href="#"><i class="fas fa-edit"></i></a> | <a href="#"><i class="fas fa-user-times"></i></a>
        </td>
    </tr>
<?php
 }
 ?>