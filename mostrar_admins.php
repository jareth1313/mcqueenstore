<?php
    include('nav.php');
    include('clases/Usuario.php');

    $usu=new Usuario();

    $datos=$usu->mostrarAdmins();
?>
<br>
<link rel="stylesheet" href="estilos.css">
<h2>Administradores:</h2>
<table>
    
    <thead>
        <tr>
            <!--colspan define el número de columnas combinadas -->
            <th >Nombre</th>
            <th>Apellido Paterno</th>
            <th>Correo</th>
            <th>Tipo</th>
            <th>estatus</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
        while($row=mysqli_fetch_assoc($datos)){
        ?> 

        <tr>
            <td><?php echo $row['nom_usu']?></td>
            <td><?=$row['ap_usu']?></td>
            <td><?=$row['correo']?></td>
            <td><?=$row['tipo_usu']?></td>
            <td><?=$row['estatus']?></td>
            <td>
              
                <?php echo '<a href="editar_admins.php?pk_admin='.$row['pk_usuario'].'" title="Editar Administrador">
            
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"  class="bi bi-pencil-square" viewBox="0 0 16 16">
                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                </svg></a> '  ?>
                     
            </td>
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>