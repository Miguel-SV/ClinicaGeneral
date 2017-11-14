<?php

include 'cn.php';
session_start();

$Usuario=$_POST['usuario'];
$Nombre=$_POST['Nombre'];
$Direccion=$_POST['direccion'];
$Fecha=$_POST['FechNac'];
$Sexo=$_POST['sexo'];
$Telefono=$_POST['tel'];
$Correo=$_POST['correo'];
$Dui=$_POST['dui'];
$Nit=$_POST['nit'];
$clave=$_POST['clave'];
$admin=$_SESSION['usuario'];


$insertar = "INSERT INTO usuarios (Usuario, Nombre, Direccion, FechaNac, Sexo, TelMovil, Email, DUI, NIT, clave, administradores_Usuario) VALUES ('$Usuario','$Nombre','$Direccion','$Fecha','$Sexo','$Telefono','$Correo','$Dui','$Nit','$clave','$admin')";


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



