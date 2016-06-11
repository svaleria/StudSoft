<?php
session_start();
include "conexion.php";
//antes debe haber un insert
$result1=mysql_query("describe ".$_SESSION['tabla']);
$row1=mysql_fetch_array($result1);
if($_SESSION['tabla']=='publicacion'){
mysql_query("insert into `publicacion`(`PUBLICACION`, `CATEGORIA`, `USUARIO`, `curso`) values ('null','".$_SESSION['categoria']."','".$_SESSION['user']."','".$_SESSION['curso']."');",$conectador);}
else{
mysql_query("insert into ".$_SESSION['tabla']."(".$row1[0].") values('null');",$conectador);}
//Ahora recien se continua con updateo
$result=mysql_query("describe ".$_SESSION['tabla']);
$n=0;
while ($row=mysql_fetch_array($result)){
$campo[$n]=$_POST[$row[0]];
$kp[$n]=$row[$n];
if($n==0){
mysql_query("update ".$_SESSION['tabla']." set ".$row[0]."= '".$campo[$n]."' where ".$kp[0]."='null'",$conectador);
}else {mysql_query("update ".$_SESSION['tabla']." set ".$row[0]."= '".$campo[$n]."' where ".$kp[0]."='".$campo[0]."'",$conectador);}
$n++;
}
if($_SESSION['tabla']=='tarea'){
$dir_subida = '../descargas/';
$fichero_subido = $dir_subida . basename($_FILES['fichero_usuario']['name']);
echo '<pre>';
if (move_uploaded_file($_FILES['fichero_usuario']['tmp_name'], $fichero_subido)) {
    echo "El fichero es válido y se subió con éxito.\n";
} else {
    echo "¡Posible ataque de subida de ficheros!\n";
}
mysql_query("INSERT INTO `archivo`(`id_archivo`, `ruta`, `TAREA`, `USUARIO`) VALUES ('".rand()."','".$fichero_subido."','".$campo[0]."','".$_SESSION['user']."' )",$conectador);
}
header("Location:../vista/index.php?v=p_adm");
?>