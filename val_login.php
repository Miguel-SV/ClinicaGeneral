<?php
//Recibir los datos y almacenarlos en variables
include 'cn.php';
session_start();
$_SESSION['usuario']=$_REQUEST['user'];

$email=$_POST['user'];
$clave=$_POST['pass'];

$consulta="SELECT * FROM administradores WHERE  Usuario='$email' and  Clave= '$clave'";
$resultado=mysqli_query($conexion, $consulta);
$filas=mysqli_num_rows($resultado);



if($filas>0){
     
    header("location:Usuarios.php");
}else{
    header("location:index.php");
}
mysqli_free_result($resultado);
//Cerrar conexion
mysql_close($conexion);

?>
