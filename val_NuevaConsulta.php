<!--
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
--!>

<?php
include 'cn.php';

$Sintomas=$_POST['sintomas'];
$Descripcion=$_POST['descripcion'];
$insertar = "INSERT INTO consulta (Sintomas, Descripcion) VALUES ('$Sintomas','$Descripcion')";


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