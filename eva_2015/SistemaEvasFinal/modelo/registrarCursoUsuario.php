<?php
session_start();
include "conexion.php";
$id=$_POST['id'];
$curso=$_POST['curso'];
$usuario=$_POST['user'];
$rol=$_POST['rol'];
if($rol=='Docente'){$rol=2;}
if($rol=='Estudiante'){$rol=1;}
mysql_query("insert into `curso_usuario`(`id`, `curso`, `usuario`) values ('".$id."','".$curso."','".$usuario."');",$conectador);
mysql_query("insert into `rol`(`id_rol`, `rol`, `usuario`) values ('".$id."','".$rol."','".$usuario."');",$conectador);

header("Location:../vista/index.php?v=p_adm");
?>