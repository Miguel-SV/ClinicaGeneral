<?php


include 'cn.php';

$nombre=$_POST['nombre'];
$descripcion=$_POST['descripcion'];
$cantidad=$_POST['cantidad'];

$insertar = "INSERT INTO Medicamentos(nombreMed, descripcionMed, cantidadMed) VALUES ('$nombre','$descripcion','$cantidad')";




//Ejecutar consultas
$result = mysqli_query($conexion, $insertar);
if(!$result){
    echo '<script>
    alert("Error al registrarse");
    window.history.go(-1);
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
