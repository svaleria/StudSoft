<?php
session_start();
include "conexion.php";
$dir_subida = '../descargas/';
$_SESSION['tarea'] = $_GET['t'];
$fichero_subido = $dir_subida . basename($_FILES['fichero_usuario']['name']);
echo '<pre>';
if (move_uploaded_file($_FILES['fichero_usuario']['tmp_name'], $fichero_subido)) {
    echo "El fichero es válido y se subió con éxito.\n";
} else {
    echo "¡Posible ataque de subida de ficheros!\n";
}
mysql_query("INSERT INTO `archivo`(`id_archivo`, `ruta`, `TAREA`, `USUARIO`) VALUES ('".rand()."','".$fichero_subido."',  '".$_SESSION['tarea']."' ,'".$_SESSION['user']."' )",$conectador);

header("Location:../vista/index.php?v=p_adm");
?>