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
                <h3 class="center-align">Lista de Pacientes</h3>
                <br>


                <hr> 
                <form action="cliente_eliminar.php" method="post">

                    <table border="1" class="striped centered responsive-table">
                        <thead>
                            <tr>

                                <th>Nombre</th>
                                <th>N° Telefono</th>
                                <th>Responsable</th>
                                <th>Sexo</th>
                                <th colspan="2">Acciones</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $result = mysqli_query($conexion, "select * from pacientes");
                            while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                <tr>

                                    <td><?php echo $row['Nombre']; ?></td>

                                    <td><?php echo $row['TelMovil']; ?></td>
                                    <td><?php echo $row['Responsabe']; ?></td>
                                    <td><?php echo $row['sexo']; ?></td>
                                    <td><a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Editar"  href="pacienteEditar.php?idPaciente=<?php echo $row['idPaciente']; ?>" ><i class="botoness2 zmdi zmdi-border-color zmdi-hc-2x "></i></a></td>
                                    <td><a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Nueva Consulta"  href="NuevaConsulta.php?idPaciente=<?php echo $row['idPaciente']; ?>" ><i class="botoness2 zmdi zmdi-hospital zmdi-hc-2x "></i></a></td>

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