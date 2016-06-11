<?php
session_start();
include "conexion.php";
$_SESSION['NombreUsuario'] = $_GET['u'];
$_SESSION['Parcial'] = $_GET['e'];
$_SESSION['cantPreguntas'] = $_GET['cp'];
$c=0;
$suma=0;
while($c<$_SESSION['cantPreguntas']){
$campo[$c]=$_POST[$c];
$suma = $suma + $campo[$c];
$c++;
}
$promedio = ($suma/$_SESSION['cantPreguntas']);
mysql_query("update nota_exm set nota='".$promedio."' where USUARIO='".$_SESSION['NombreUsuario']."' and id='".$_SESSION['Parcial']."' ", $conectador);
header("Location:../vista/index.php?v=p_rev&e=".$_SESSION['Parcial']."");
?>