<?php
session_start();
include 'conexion.php';
if(isset($_POST['user'])) {
   $usuario = $_POST['user'];
   $pw = $_POST['passwd'];
   $log = mysql_query("SELECT * FROM usuario WHERE USUARIO='$usuario' and CONTRASENA='$pw'");
   if(mysql_num_rows($log)==0){
	   	echo '<script> alert("Usuario o contraseña incorrecto...");</script>';
	   	session_destroy();
   		echo '<script> window.location="../vista/index.html"; </script>';
   	}
   	else{
   		$_SESSION['user'] = $usuario;
   		$_SESSION['passwd'] = $pw;
   		header("Location:../vista/index.php?v=p_adm");      
   		}
   	}
?>