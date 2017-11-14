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
             <h3 class="center-align">Lista de Recetas</h3>
            <br>
                
                 
                <hr> 
            <form action="cliente_eliminar.php" method="post">

            <table border="1" class="striped centered responsive-table">
                <thead>
                    <tr>
                        <th>N° de Receta</th>
                        <th>Dosis</th>
                        <th>Fecha</th>
                        <th>Administrador</th>
                        <th>N° Consulta</th>
                        <th colspan="2">Acciones</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    $result = mysqli_query($conexion, "select * from recetas");
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <tr>
                            <td><?php echo $row['idReceta']; ?></td>
                            <td><?php echo $row['Dosis']; ?></td>
                            <td><?php echo $row['Fecha']; ?></td>
                            <td><?php echo $row['MEDICAMENTOS_idMedicamento']; ?></td>
                            <td><?php echo $row['CONSULTA_idConsulta']; ?></td>
                            <td><a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Editar"  href="adminEditar.php?idReceta=<?php echo $row['idReceta']; ?>" ><i class="botoness2 zmdi zmdi-border-color zmdi-hc-2x "></i></a></td>
                            <td><a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Eliminar" href="#" onclick="javascript:if (confirm('QUIERES ELIMINAR')) {
                        parent.location = 'adminEliminar.php?idReceta=<?php echo $row['idReceta']; ?>'
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
