<?php
session_start();
include "conexion.php";
$n=0;
while ($n<$_SESSION['MaxPreguntas']){
$campo[$n]=$_POST[$n];
mysql_query("insert into `resp_preg_exm`(`id_resp`, `respuesta`, `id_pregunta`, `usuario`, `calif`) 
	values ('".rand()."','".$campo[$n]."','".$_SESSION['arreglo'][$n]."','".$_SESSION['user']."','0');",$conectador);
$n++;
}
header("Location:../vista/index.php?v=p_adm");
?>