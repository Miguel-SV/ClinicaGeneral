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
                <br>
                <h3 class="center-align">Lista Administradores</h3>
                <br>


                <hr> 



                <form action="cliente_eliminar.php" method="post">

                    <table border="1" class="striped centered responsive-table">
                        <thead>
                            <tr>
                                <th>Nombres</th>
                                <th>Email</th>
                                <th>Telefono Movil</th>
                                <th colspan="1">Editar</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $result = mysqli_query($conexion, "select * from administradores");
                            while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                <tr>
                                    <td><?php echo $row['Nombre']; ?></td>
                                    <td><?php echo $row['Email']; ?></td>
                                    <td><?php echo $row['TelMovil']; ?></td>
                                    <td><a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Editar"  href="AdminEditar.php?Usuario=<?php echo $row['Usuario']; ?>" ><i class=" zmdi zmdi-border-color zmdi-hc-2x "></i></a></td>
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
