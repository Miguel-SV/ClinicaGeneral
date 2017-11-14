<?php

include 'cn.php';

$Usuario=$_POST['usuario'];
$Nombre=$_POST['nombre'];
$Direccion=$_POST['direccion'];
$Fecha=$_POST['FechNac'];
$Sexo=$_POST['sexo'];
$Telefono=$_POST['tel'];
$Correo=$_POST['correo'];
$Dui=$_POST['dui'];
$Nit=$_POST['nit'];
$insertar = "INSERT INTO usuarios (Usuario, Nombre, FechaNac, Sexo, TelMovil, Email, DUI, NIT) VALUES ('$Usuario','$Nombre','$direccion','$Fecha','$Sexo','$Telefono','$Correo','$Dui','$Nit')";


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



