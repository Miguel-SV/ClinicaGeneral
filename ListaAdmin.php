<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="es">
  
  
  <!-- **************** Incluir encabezados *************** --> 

   
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
             <h3 class="center-align">Lista Administradores</h3>
            <br>
                
                 
                <hr> 
       
       

<form action="cliente_eliminar.php" method="post">

            <table border="1" class="striped centered responsive-table">
                <thead>
                    <tr>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Usuario</th>
                        <th colspan="2">Acciones</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    $result = mysqli_query($conexion, "select * from administradores");
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <tr>
                            <td><?php echo $row['Usuario']; ?></td>
                            <td><?php echo $row['Nombre']; ?></td>
                            <td><?php echo $row['Email']; ?></td>
                            <td><a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Editar"  href="adminEditar.php?idAdministradores=<?php echo $row['idAdministradores']; ?>" ><i class="botoness2 zmdi zmdi-border-color zmdi-hc-2x "></i></a></td>
                            <td><a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Eliminar" href="#" onclick="javascript:if (confirm('QUIERES ELEIMINAR')) {
                        parent.location = 'adminEliminar.php?idAdministradores=<?php echo $row['idAdministradores']; ?>'
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
