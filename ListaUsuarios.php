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
                        
                        <th>Nombre</th>
                        <th>N° Telefono</th>
                        <th>E-mail</th>
                        <th colspan="1">Acciones</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    $result = mysqli_query($conexion, "select * from usuarios");
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <tr>
                       
                            <td><?php echo $row['Nombre']; ?></td>
                            <td><?php echo $row['TelMovil']; ?></td>
                            <td><?php echo $row['Email']; ?></td>
                            
                        </tr>    
                    } else {
                        ''
                    }
                                                             
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

