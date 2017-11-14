<?php

include 'cn.php';

$Nombre=$_POST['nombre'];
$Fecha=$_POST['fecha'];
$Tel=$_POST['tel'];
$Responsable=$_POST['responsable'];
$Sexo=$_POST['sexo'];
$insertar = "INSERT INTO pacientes (Nombre, FechaNac, TelMovil, Responsable, Sexo) VALUES ('$Nombre','$Fecha','$Tel','$Responsable','$Sexo')";


//Ejecutar consultas
$result = mysqli_query($conexion, $insertar);
if(!$result){
    echo '<script>
    alert("Error al registrarse");
    </script>
    ';
     
}else{
    echo '<script>
    alert("A sido registrado exitosamente");
    window.history.go(-1);
    </script>
    ';
}
//Cerrar conexion
mysqli_close($conexion);

