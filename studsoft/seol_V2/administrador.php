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
  <h1>Hola, Administrador!</h1>
  <p>Felicitaciones, ingresaste al sistema.</p>
  <p>Tienes las siguentes opciones:</p> 
</div>

<form action="habEst.php" method="get">
  <p>
    <label for="pregunta"></label>
    <input type="text" name="pregunta" id="pregunta" />
    <input type="submit" name="Buscar" id="Buscar" value="Buscar" />
  </p>
</form>

<div class="jumbotron">
 <a href="bitacora.php">- Bitácora</a>
 <p><a href="gruposAdm.php">- Grupos</a>
 <p><a href="usuariosAdm.php">- Usuarios</a>
</div>



</body>
</html>