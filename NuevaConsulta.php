<?php
session_start();
?>


<?php
require_once "cn.php";


$paciente = $_GET['idPaciente'];

$resultado = mysqli_query($conexion, "select idPaciente from pacientes WHERE idPaciente='$paciente'");

if (isset($_REQUEST['sintomas'])) {
    $Sintomas = $_REQUEST['sintomas'];
} else {
    $Sintomas = "";
}
if (isset($_REQUEST['descripcion'])) {
    $Descripcion = $_REQUEST['descripcion'];
} else {
    $Descripcion = "";
}


if (isset($_POST['Enviar'])) {
    $insertar = "INSERT INTO consulta (Sintomas, Descripcion, PACIENTES_idPaciente) VALUES ('$Sintomas','$Descripcion','$paciente')";


//Ejecutar consultas
    $result = mysqli_query($conexion, $insertar);
    if (!$result) {
        echo '<script>
    alert("Error al registrarse");
    </script>
    ';
    } else {
        echo '<script>
    alert("A sido registrado exitosamente");
    window.history.go(-1);
    </script>
    ';
    }
}
?>

<html>

    <body>
        <?php
        include 'head.php';
        ?>
        <?php
        include 'menu.php';
        ?>


        <form  method="post">
            <div class="row contenedor">
                <div class="card-panel  white conten">

                    <div>
                        <h4 class="center">Datos de Consulta</h4>
                        <hr>

                        <div class="input-field col s12">
                            <input placeholder="ejm. Dolor de Cabeza" id="sintomas" type="text" class="validate" name="sintomas" required>
                            <label for="first_name">Sintomas</label>
                        </div>
                        <div class="input-field col s12">
                            <input placeholder="ejm. Epilepsias" id="descripcion" type="text" class="validate" name="descripcion" required>
                            <label for="last_name">Descripcion de Enfermedad</label>
                        </div>

                    </div>
                    <div class="center">

                        <button type="submit"  class="margen-botones waves-effect waves-green btn " value="Enviar" name="Enviar">Ir a receta</button>

                    </div>
                </div>
            </div>
        </form>
        <?php
        include 'script.php';
        ?>
    </body>
</html>
