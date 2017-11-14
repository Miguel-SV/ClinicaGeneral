<?php
include 'cn.php';

$user=$_POST['user'];
$name=$_POST['nombre'];
$date=$_POST['Fecha'];
$password=$_POST['Clave'];
$espe=$_POST['Especializacion'];
$direccion= $_POST['Direccion'];
$email= $_POST['Email'];
$telFijo= $_POST['Fijo'];
$telMovil= $_POST['Movil'];
$insertar = "INSERT INTO administradores(Usuario, Nombre, FechaNac, Especializacion, Clave, Direccion, Email, TelFijo, TelMovil ) VALUES ('$user','$name','$date','$espe','$password','$direccion','$email','$telFijo','$telMovil')";




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