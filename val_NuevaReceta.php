<?php

include 'cn.php';

$Dosis=$_POST['dosis'];
$Fecha=$_POST['fecha'];
$insertar = "INSERT INTO medicamentos (Dosis, Fecha) VALUES ('$Dosis','$Fecha')";


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
