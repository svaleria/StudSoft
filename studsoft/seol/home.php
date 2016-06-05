<?php
session_start();
if(isset($_SESSION['unm']) && $_SESSION['unm']=="profesor")
{
	header("location:profesor.php");	
}
if(isset($_SESSION['unm']) && $_SESSION['unm']=="admin")
{
	header("location:admin.php");	
}
if(isset($_SESSION['unm']) && $_SESSION['unm']!="admin" && $_SESSION['unm']!="verifier")
{
	header("location:estudiante.php");	
}
if(isset($_SESSION['exid']))
{
	header("location:exampage.php");	
	
}
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
  <li><img src="images/logo.svg" width="50px" height="50px" /></li> 
  <li class="active"><a href="home.php">Inicio</a></li>
  <li><a href="aboutus.php">Acerca</a></li>
  
  <li><a href="login.php">Ingresar</a></li>
</ul>
<div class="page-header">
  <h1>Seol Sistema de Evaluaciones Online  <small>Una bienvenida al visitante.</small></h1>
</div>
<div align="justify">
El proposito de la creacion de esta pagina es para proporcionar una herramienta  de creacion y administracion de examenes via web y facilitar la calificacion. Tambien es aprobar la materia de TIS.</div></div></div>
</div>
  </div>
</body>
</html>