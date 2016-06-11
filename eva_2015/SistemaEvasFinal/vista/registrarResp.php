<?php
session_start();
include "../modelo/conexion.php";
$id_respuesta=$_POST['id_respuesta'];
$usuario=$_POST['usuario'];
$respuesta=$_POST['respuesta'];
$publicacion=$_POST['publicacion'];
if($rol=='Docente'){$rol=2;}
if($rol=='Estudiante'){$rol=1;}
mysql_query("insert into `respuesta`(`id_respuesta`, `usuario`, `respuesta`, `publicacion`) values ('".$id_respuesta."','".$usuario."','".$respuesta."','".$publicacion."');",$conectador);
header("Location:index.php?v=p_resp&p=".$_SESSION['publicacion']."");
?>