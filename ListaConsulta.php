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
             <h3 class="center-align">Lista de Consultas</h3>
            <br>
                
                 
                <hr> 
            <form action="cliente_eliminar.php" method="post">

            <table border="1" class="striped centered responsive-table">
                <thead>
                    <tr>
                        <th>Sintomas</th>
                        <th>Descripcion</th>
                        <th>idPaciente</th>
                        <th colspan="2">Acciones</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    $result = mysqli_query($conexion, "select * from consulta");
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <tr>
                            <td><?php echo $row['Sintomas']; ?></td>
                            <td><?php echo $row['Descripcion']; ?></td>
                            <td><?php echo $row['PACIENTES_idPaciente']; ?></td>
                            <td><a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Editar"  href="adminEditar.php?idConsulta=<?php echo $row['idConsulta']; ?>" ><i class="botoness2 zmdi zmdi-border-color zmdi-hc-2x "></i></a></td>
                            <td><a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Eliminar" href="#" onclick="javascript:if (confirm('QUIERES ELIMINAR')) {
                        parent.location = 'adminEliminar.php?idConsulta=<?php echo $row['idConsulta']; ?>'
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


