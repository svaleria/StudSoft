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
  <li class="active"><a href="profesor.php">Profesor</a></li>
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Administrar<b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="ver.php">Grupos</a></li>
          <li><a href="ver.php">Lista de Estudiantes</a></li>
          <li><a href="signout.php">Log Out</a></li>
        </ul>
  </li>
</ul><br /><br />
<?php
if(isset($_GET['sms']))
{
echo '<div class="alert alert-success">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <strong>Verification!</strong> Done.
</div>';}?>
<div class="jumbotron">
  <h1>Hola, estudiante!</h1>
  <p>
  felicitaciones, ingresaste al sistema.</p>
  <p>Ingresa a tus grupos</p>

 
</div>

<table>

<p><div class="jumbotron">
<h2>Grupos:</h2>
</div>
</p>
  <tr>
    <td><div class="jumbotron">
  <a href="panGrupoEst.php"><h2>- Matemáticas</h2></a>
</div></td>
  </tr>
  <tr>
    <td><div class="jumbotron">
  <a href=""><h2>- Alquimia</h2></a>
</div></td>
  </tr>
</table>





</body>
</html>