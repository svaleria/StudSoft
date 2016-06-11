<?php
session_start();
if(isset($_SESSION['unm']) && $_SESSION['unm']!="admin" && $_SESSION['unm']!="profesor")
{
  header("location:estudiante.php"); 
}
if(isset($_SESSION['unm']) && $_SESSION['unm']=="profesor")
{
  header("location:profesor.php");  
}
if(isset($_SESSION['unm']) && $_SESSION['unm']=="admin")
{
  header("location:admin.php"); 
}
if(isset($_SESSION['exid']))
{
  header("location:examenpage.php");  
  
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
  <li><a href="home.php">Inicio</a></li>
  <li><a href="acerca.php">Acerca</a></li>  
  <li class="active"><a href="login.php">Usuario</a></li>
</ul>

<div class="page-header">
  <h1>Bienvenido!, <small>por favor autentiquese.</small></h1>
</div>
<center>

<form action="procLogin.php" method="get" enctype="multipart/form-data">
<div class="input-group input-group-lg">
  
  <input type="text" class="form-control" placeholder="Nombre de usuario" name="username"/>
</div>
</br>
<div class="input-group input-group-lg">
  
  <input type="password" class="form-control" placeholder="Contrasena" name="password"/>
</div>
</br>

<input type="submit" class="btn btn-primary btn-lg"  value="Ingresar" />
   
</form>

</center>
</div>
</body>
</html>