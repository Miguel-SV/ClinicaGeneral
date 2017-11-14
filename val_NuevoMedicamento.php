<?php
include 'cn.php';

$Nombre=$_POST['nombre'];
$Laboratorio=$_POST['laboratorio'];
$Cantidad=$_POST['cantidad'];
$Descripcion=$_POST['descripcion'];
$insertar = "INSERT INTO medicamentos (Nombre, Laboratorio, Cantidad, Descripcion) VALUES ('$Nombre','$Laboratorio','$Cantidad','$Descripcion')";


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