<?php
include 'conexion.php';
session_start();
$_SESSION['tabla'] = $_GET['v'];
$_SESSION['primaria'] = $_GET['pk'];
$result = mysql_query("SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = '".$_SESSION['tabla']."'", $conectador); 
$row = mysql_fetch_array($result);
if($_SESSION['tabla']=='usuario'){mysql_query("delete from usuario where usuario='".$_SESSION['primaria']."'",$conectador);}else{
mysql_query("delete from ".$_SESSION['tabla']." where ".$row[0]."='".$_SESSION['primaria']."'",$conectador);}
header("Location:../vista/index.php?v=".$_SESSION['pagina']."");
?>