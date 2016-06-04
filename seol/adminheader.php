<?php
session_start();
if(!isset($_SESSION['unm']) || !isset($_SESSION['psw']))
{
	header("location:error.php");	
	
}
if(isset($_SESSION['exid']))
{
	header("location:exampage.php");	
	
}
include("db_connect.php");
$sq="SELECT * FROM detalles_usuario where nombre='admin'";
$res=mysql_query($sq);
$r=mysql_fetch_array($res);
?>

<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="css/bootstrap.min.css" type="text/css" rel="stylesheet" />
    <script type="text/javascript" src="js/jquery-1.10.2.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<ul class="nav nav-pills">  
  <li class="active"><a href="admin.php">ADMIN</a></li>
   <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Administrar<b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="creatuser.php">Crear Usuario</a></li>
          <li><a href="manageuser.php">Modificar Usuario</a></li>
        </ul>
  </li>
  <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Administrar Pregunta<b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="crearpregunta.php">Crear Pregunta</a></li>
          <li><a href="adminpregunta.php">Modificar Pregunta</a></li>
          
        </ul>
  </li>
   <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Administrar examen<b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="crearexam.php">Crear Examen</a></li>
          <li><a href="borrarexam.php">Borrar Examen</a></li>
          <li><a href="grupo.php">Grupos</a></li>
        </ul>
  </li>
  <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Usuario<b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="feedback.php">Feedback</a></li>
          <li><a href="signout.php">Log out</a></li>
        </ul>
  </li>
  
 
  <li style="padding-left:300px"><img src="<?php echo $r[15];?>" class="img-thumbnail" height="150px" width="150px"  /></li>
</ul>
