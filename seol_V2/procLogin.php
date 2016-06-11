<?php
session_start();
include "db_connect.php";
$usuario=$_GET["username"];
$contrasena=$_GET["password"];

$resultado = mysqli_query($conectador, "select alias_us,contrasena,tipo_us from detalles_usuario where alias_us = '$usuario' ;");

while ($row=mysqli_fetch_array($resultado)){

if($contrasena==$row[1]){
$_SESSION['usuario']=$usuario;
if($row[2]=='admin'){header("Location:administrador.php");}
if($row[2]=='estudiante'){header("Location:estudiante.php");}
if($row[2]=='profesor'){header("Location:profesor.php");}
	}
else{
header("Location:login.php");
}

}

mysqli_close($conectador);
?>