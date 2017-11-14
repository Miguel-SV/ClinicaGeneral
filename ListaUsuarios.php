<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="es">
   <?php
    include "cn.php";
   ?>
   
   <!-- **************** Contenido *************** -->
    <body>
     
     <?php
            include "head.php";
      ?>
      
      <!-- **************** Incluir Menu Alumno *************** -->
       <?php
            include "menu.php";
       ?>
       
       
       <div class="container white">
           
            <div class="container-fluid">
             <h3 class="center-align">Lista de Usuarios</h3>
            <br>
                
                 
                <hr> 
            <form action="cliente_eliminar.php" method="post">

            <table border="1" class="striped centered responsive-table">
                <thead>
                    <tr>
                        <th>N° de Usuario</th>
                        <th>Usuario</th>
                        <th>Password</th> 
                        <th>Nombre</th>
                        <th>N° Telefono</th>
                        <th>E-mail</th>
                        <th>Administrador</th>
                        <th colspan="2">Acciones</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    $result = mysqli_query($conexion, "select * from usuarios");
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <tr>
                            <td><?php echo $row['idUsuario']; ?></td>
                            <td><?php echo $row['Usuario']; ?></td>
                            <td><?php echo $row['Password']; ?></td>
                            <td><?php echo $row['Nombre']; ?></td>
                            <td><?php echo $row['TelMovil']; ?></td>
                            <td><?php echo $row['Email']; ?></td>
                            <td><?php echo $row['ADMINISTRADORES_idAdministradores']; ?></td>
                            <td><a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Editar"  href="adminEditar.php?idUsuario=<?php echo $row['idUsuario']; ?>" ><i class="botoness2 zmdi zmdi-border-color zmdi-hc-2x "></i></a></td>
                            <td><a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Eliminar" href="#" onclick="javascript:if (confirm('QUIERES ELIMINAR')) {
                        parent.location = 'adminEliminar.php?idUsuario=<?php echo $row['idUsuario']; ?>'
                    } else {
                        ''
                    }
                    ;"><i class="botoness zmdi zmdi-delete zmdi-hc-2x mdc-text-red"></i></a></td>                                          
                        </tr>
                            <?php
                        }
                        mysqli_close($conexion);
                        ?>
                </tbody>
            </table>
        </form>       
       </div>
       </div>    
    </body>
    
     <!-- **************** Incluir script *************** -->
       <?php
            include "script.php";
       ?>
        
</html>

