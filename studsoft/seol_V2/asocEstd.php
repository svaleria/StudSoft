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
  <h1>Grupo Matemáticas!</h1>
  <p>
  Selecciona las estudiantes a quienes mandarás este examen:</p>
</div>

<form action="habEst.php" method="get">
  <p>
    <input name="Reynaldo Soria" type="checkbox" value="" /> 
    Reynaldo Soria
  </p>
  <p>
    <input name="Julian Quispe" type="checkbox" value="" />
Julian Quispe</p>
  <p>
    <input name="Leopoldo Facha" type="checkbox" value="" />
Leopoldo Facha </p>
  <p>
    <input name="Mario Aguirre" type="checkbox" value="" />
Mario Aguirre </p>
  <p>
    <input name="Wilson Mamani" type="checkbox" value="" />
Wilson Mamani </p>
  <p>
    <p>
      <p>
    <input type="submit" name="Enviar" id="Enviar" value="Enviar" />
  </p>
</form>


</body>
</html>