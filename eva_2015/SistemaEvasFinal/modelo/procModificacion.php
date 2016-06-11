<?php
session_start();
include "conexion.php";
$result=mysql_query("describe ".$_SESSION['tabla']);
$n=0;

while ($row=mysql_fetch_array($result)){
$campo[$n]=$_POST[$row[0]];
$kp[$n]=$row[$n];
mysql_query("update ".$_SESSION['tabla']." set ".$row[0]."= '".$campo[$n]."' where ".$kp[0]."='".$campo[0]."'",$conectador);
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
//mysql_query("insert into, archivo('id_archivo', 'ruta', 'TAREA') values (1,".$fichero_subido.", "."'".$campo[0]."'",$conectador);
	mysql_query("INSERT INTO `archivo`(`id_archivo`, `ruta`, `TAREA`) VALUES ('".rand()."','".$fichero_subido."','".$campo[0]."')",$conectador);
}
//echo $fichero_subido;
//./descargas/z.txt
header("Location:../vista/index.php?v=p_adm");
?>